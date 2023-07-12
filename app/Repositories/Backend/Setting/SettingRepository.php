<?php

namespace App\Repositories\Backend\Setting;

use App\Exceptions\GeneralException;
use App\Models\Setting\Setting;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;

/**
 * Class SettingsRepository.
 */
class SettingRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Setting::class;

    /**
     * Site Logo Path.
     *
     * @var string
     */
    protected $site_logo_path;

    /**
     * Favicon path.
     *
     * @var string
     */
    protected $favicon_path;

    /**
     * Storage Class Object.
     *
     * @var \Illuminate\Support\Facades\Storage
     */
    protected $storage;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->site_logo_path = 'images' . DIRECTORY_SEPARATOR . 'logo' . DIRECTORY_SEPARATOR;
        $this->favicon_path = 'images' . DIRECTORY_SEPARATOR . 'favicon' . DIRECTORY_SEPARATOR;
        $this->storage = Storage::disk('public');
    }


    public function update(Setting $setting, array $input)
    {
        if (!empty($input['logo'])) {
            $this->removeLogo($setting, 'logo');

            $input['logo'] = $this->uploadLogo($setting, $input['logo'], 'logo');
        }

        if (!empty($input['favicon'])) {
            $this->removeLogo($setting, 'favicon');

            $input['favicon'] = $this->uploadLogo($setting, $input['favicon'], 'favicon');
        }

        if ($setting->update($input)) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.settings.update_error'));
    }

    /*
     * Upload logo image
     */
    public function uploadLogo($setting, $logo, $type)
    {
        $path = $type == 'logo' ? $this->site_logo_path : $this->favicon_path;
        $name =  $logo->getClientOriginalName();
        $img_name = pathinfo($name, PATHINFO_FILENAME);
        $img_ext = pathinfo($name, PATHINFO_EXTENSION);
        $fullname = $img_name . rand(10, 1000) . "." . $img_ext;
        $logo->move('images/setting/', $fullname);
        $image_name = "images/setting/" . $fullname;
        return $image_name;
        // $image_name = time().$logo->getClientOriginalName();
        // print_r($image_name);die;

        // $this->storage->put($path.$image_name, file_get_contents($logo->getRealPath()));

        // return $image_name;
    }

    /*
     * remove logo or favicon icon
     */
    public function removeLogo(Setting $setting, $type)
    {
        $path = $type == 'logo' ? $this->site_logo_path : $this->favicon_path;

        if ($setting->$type && $this->storage->exists($path . $setting->$type)) {
            $this->storage->delete($path . $setting->$type);
        }

        $result = $setting->update([$type => null]);

        if ($result) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.settings.update_error'));
    }
}
