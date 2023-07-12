<?php

namespace App\Repositories\Backend\User;

use Carbon\Carbon;
use App\Models\User\User;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = User::class;
    protected $upload_path;


    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    protected $storage;

    public function __construct()
    {
        $this->upload_path = 'images' . DIRECTORY_SEPARATOR . 'users' . DIRECTORY_SEPARATOR;
        $this->storage = Storage::disk('public');
    }

    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.users.table') . '.id',
                config('module.users.table') . '.first_name',
                config('module.users.table') . '.profile_photo_path',
                config('module.users.table') . '.email',
                config('module.users.table') . '.status',
                config('module.users.table') . '.created_at',
                config('module.users.table') . '.updated_at',
            ]);
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        $input = $this->uploadImage($input);
        $input['password'] = Hash::make($input['password']);
        $input['passwordtext'] = base64_encode($input['password']);

        if ($user = User::create($input)) {
            $user->attachRole(3);
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.users.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param User $user
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(User $user, array $input)
    {

        if (empty($input['profile_photo_path']))
           unset($input['profile_photo_path']);
        else {
            $this->deleteOldFile($user->profile_photo_path);
           $input = $this->uploadImage($input);
        }
        if(empty($input['password']))
           unset($input['password']);
        else{
             $input['password'] = Hash::make($input['password']);
            $input['passwordtext'] = base64_encode($input['password']);
        }

        if ($user->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.users.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param User $user
     * @throws GeneralException
     * @return bool
     */
    public function delete(User $user)
    {
        $profile_photo_path = $user->profile_photo_path;
        if($user->delete()) {
            $this->deleteOldFile($profile_photo_path);
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.users.delete_error'));
    }

    public function uploadImage($input)
    {
        $image = $input['profile_photo_path'];
        if (isset($input['profile_photo_path']) && !empty($input['profile_photo_path'])) {
            $name =  $image->getClientOriginalName();
            $img_name = pathinfo($name, PATHINFO_FILENAME);
            $img_ext = pathinfo($name, PATHINFO_EXTENSION);
            $fullname = $img_name . rand(10, 1000) . "." . $img_ext;
            $image->move($this->upload_path, $fullname);
            $input['profile_photo_path'] = $this->upload_path . $fullname;
            return $input;
        }
    }

    public function deleteOldFile($file_path)
    {
        return $this->storage->delete($file_path);
    }
}
