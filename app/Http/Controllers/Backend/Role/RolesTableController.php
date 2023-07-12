<?php

namespace App\Http\Controllers\Backend\Role;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Role\RoleRepository;
use App\Http\Requests\Backend\Role\ManageRoleRequest;

/**
 * Class RolesTableController.
 */
class RolesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var RoleRepository
     */
    protected $roles;

    /**
     * contructor to initialize repository object
     * @param RoleRepository $role;
     */
    public function __construct(RoleRepository $roles)
    {
        $this->roles = $roles;
    }

    /**
     * This method return the data of the model
     * @param ManageRoleRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageRoleRequest $request)
    {
        return Datatables::of($this->roles->getForDataTable())
            ->escapeColumns(['name', 'sort'])
            ->addColumn('permissions', function ($role) {
                if ($role->all) {
                    return '<span class="label label-success">' . trans('labels.general.all') . '</span>';
                }

                return $role->permission_name;
            })
            ->addColumn('users', function ($role) {
                return $role->userCount;
            })
            ->addColumn('actions', function ($role) {
                return $role->action_buttons;
            })
            ->make(true);
    }
}
