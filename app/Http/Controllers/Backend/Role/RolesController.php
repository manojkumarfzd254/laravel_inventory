<?php

namespace App\Http\Controllers\Backend\Role;

use App\Models\Role\Role;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Repositories\Backend\Role\RoleRepository;
use App\Repositories\Backend\Permission\PermissionRepository;
use App\Http\Requests\Backend\Role\ManageRoleRequest;
use App\Http\Requests\Backend\Role\CreateRoleRequest;
use App\Http\Requests\Backend\Role\StoreRoleRequest;
use App\Http\Requests\Backend\Role\EditRoleRequest;
use App\Http\Requests\Backend\Role\UpdateRoleRequest;
use App\Http\Requests\Backend\Role\DeleteRoleRequest;

/**
 * RolesController
 */
class RolesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\Access\Role\RoleRepository
     */
    protected $roles;

    /**
     * @var \App\Repositories\Backend\Access\Permission\PermissionRepository
     */
    protected $permissions;

    /**
     * @param \App\Repositories\Backend\Access\Role\RoleRepository             $roles
     * @param \App\Repositories\Backend\Access\Permission\PermissionRepository $permissions
     */
    public function __construct(RoleRepository $roles, PermissionRepository $permissions)
    {
        $this->roles = $roles;
        $this->permissions = $permissions;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Role\ManageRoleRequest  $request
     * 
     */
    public function index(ManageRoleRequest $request)
    {
        return view('backend.roles.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateRoleRequestNamespace  $request
     * 
     */
    public function create(CreateRoleRequest $request)
    {
        return view('backend.roles.create')->withPermissions($this->permissions->getAll())
            ->withRoleCount($this->roles->getCount());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRoleRequestNamespace  $request
     * 
     */
    public function store(StoreRoleRequest $request)
    {
        
        $this->roles->create($request->all());
        //return with successfull message
        Alert::toast(trans('alerts.backend.roles.created'), 'success');
        return redirect()->route('admin.roles.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Role\Role  $role
     * @param  EditRoleRequestNamespace  $request
     * 
     */
    public function edit(Role $role, EditRoleRequest $request)
    {
        //return view('backend.roles.edit', compact('role'));
        return view('backend.roles.edit')
        ->withRole($role)
            ->withRolePermissions($role->permissions->pluck('id')->all())
            ->withPermissions($this->permissions->getAll());
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRoleRequestNamespace  $request
     * @param  App\Models\Role\Role  $role
     * 
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->roles->update( $role, $input );
        //return with successfull message
        Alert::toast(trans('alerts.backend.roles.updated'), 'success');
        return redirect()->route('admin.roles.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteRoleRequestNamespace  $request
     * @param  App\Models\Role\Role  $role
     * 
     */
    public function destroy(Role $role, DeleteRoleRequest $request)
    {
        //Calling the delete method on repository
        $this->roles->delete($role);
        //returning with successfull message
        Alert::toast(trans('alerts.backend.roles.deleted'), 'success');
        return redirect()->route('admin.roles.index');
    }
    
}
