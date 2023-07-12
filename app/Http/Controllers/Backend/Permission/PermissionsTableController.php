<?php

namespace App\Http\Controllers\Backend\Permission;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Permission\PermissionRepository;
use App\Http\Requests\Backend\Permission\ManagePermissionRequest;

/**
 * Class PermissionsTableController.
 */
class PermissionsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var PermissionRepository
     */
    public function __construct(PermissionRepository $permissions)
    {
        $this->permissions = $permissions;
    }

    /**
     * @param ManagePermissionRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManagePermissionRequest $request)
    {
        return Datatables::of($this->permissions->getForDataTable())
            ->escapeColumns(['name', 'sort'])
            ->addColumn('permissions', function ($permission) {
                if ($permission->all) {
                    return '<span class="label label-success">'.trans('labels.general.all').'</span>';
                }
            })
            ->addColumn('actions', function ($permission) {
                return $permission->action_buttons;
            })
            ->make(true);
    }
}
