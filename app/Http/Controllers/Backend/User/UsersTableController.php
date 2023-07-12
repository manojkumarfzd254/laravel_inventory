<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Repositories\Backend\User\UserRepository;
use App\Http\Requests\Backend\User\ManageUserRequest;
use Yajra\DataTables\Facades\DataTables;

class UsersTableController extends Controller
{

    protected $users;


    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    public function __invoke(ManageUserRequest $request)
    {
        return Datatables::of($this->users->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('image', function ($user) {
                return '<img src="' . asset($user->profile_photo_path) . '" width="60px" height="40px">';
            })
            ->addColumn('status', function ($user) {
                if ($user->status == "Enable") {
                    return '<button id="user_status" class="card btn btn-info" data-id="' . $user->id . '" value="' . $user->status . '"><i class="fa fa-check-square" data-toggle="tooltip" data-placement="top" title="Activate"></i></button>';
                } else {
                    return '<button id="user_status" class="card btn btn-danger" data-id="' . $user->id . '" value="' . $user->status . '"><i class="fa fa-square" data-toggle="tooltip" data-placement="top" title="Deactivate"></i></button>';
                }
            })
            ->addColumn('actions', function ($user) {
                return $user->action_buttons;
            })
            ->make(true);
    }
}
