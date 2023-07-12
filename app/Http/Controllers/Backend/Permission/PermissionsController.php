<?php

namespace App\Http\Controllers\Backend\Permission;

use App\Models\Permission\Permission;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Repositories\Backend\Permission\PermissionRepository;
use App\Http\Requests\Backend\Permission\ManagePermissionRequest;
use App\Http\Requests\Backend\Permission\CreatePermissionRequest;
use App\Http\Requests\Backend\Permission\StorePermissionRequest;
use App\Http\Requests\Backend\Permission\EditPermissionRequest;
use App\Http\Requests\Backend\Permission\UpdatePermissionRequest;
use App\Http\Requests\Backend\Permission\DeletePermissionRequest;

/**
 * PermissionsController
 */
class PermissionsController extends Controller
{
    /**
     * @var PermissionRepository
     */
    protected $permissions;

    /**
     * @param PermissionRepository $permissions
     */
    public function __construct(PermissionRepository $permissions)
    {
        $this->permissions = $permissions;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Permission\ManagePermissionRequest  $request
     * 
     */
    public function index(ManagePermissionRequest $request)
    {
        return view('backend.permissions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  CreatePermissionRequestNamespace  $request
     * 
     */
    public function create(CreatePermissionRequest $request)
    {
        return view('backend.permissions.create')->withPermissionCount($this->permissions->getCount());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePermissionRequestNamespace  $request
     * 
     */
    public function store(StorePermissionRequest $request)
    {
        $this->permissions->create($request->all());
        Alert::toast(trans('alerts.backend.permissions.created'), 'success');
        return redirect()->route('admin.permission.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Permission\Permission  $permission
     * @param  EditPermissionRequestNamespace  $request
     * 
     */
    public function edit(Permission $permission, EditPermissionRequest $request)
    {
        return view('backend.permissions.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePermissionRequestNamespace  $request
     * @param  App\Models\Permission\Permission  $permission
     * 
     */
    public function update(Permission $permission, UpdatePermissionRequest $request)
    {
        $this->permissions->update($permission, $request->all());
        Alert::toast(trans('alerts.backend.permissions.updated'), 'success');
        return redirect()->route('admin.permission.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DeletePermissionRequestNamespace  $request
     * @param  App\Models\Permission\Permission  $permission
     * 
     */
    public function destroy(Permission $permission, DeletePermissionRequest $request)
    {
        $this->permissions->delete($permission);

        Alert::toast(trans('alerts.backend.permissions.deleted'), 'success');
        return redirect()->route('admin.permissions.index');
    }
}
