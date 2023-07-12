<?php

namespace App\Http\Controllers\Backend\User;


use App\Http\Controllers\Controller;
use App\Models\User\User;
use Illuminate\Http\Request;
use App\Repositories\Backend\User\UserRepository;
use App\Http\Requests\Backend\User\ManageUserRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Backend\User\CreateUserRequest;
use App\Http\Requests\Backend\User\StoreUserRequest;
use App\Http\Requests\Backend\User\EditUserRequest;
use App\Http\Requests\Backend\User\ShowUserRequest;
use App\Http\Requests\Backend\User\UpdateUserRequest;
use App\Http\Requests\Backend\User\DeleteUserRequest;

class UsersController extends Controller
{
    /**
     * variable to store the repository object
     * @var UserRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param UserRepository $repository;
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\User\ManageUserRequest  $request
     *
     */
    public function index(ManageUserRequest $request)
    {
        return view('backend.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateUserRequestNamespace  $request
     *
     */
    public function create(CreateUserRequest $request)
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreUserRequestNamespace  $request
     *
     */
    public function store(StoreUserRequest $request)
    {
        $this->repository->create($request->all());
        //return with successfull message
        Alert::toast(trans('alerts.backend.users.created'), 'success');
        return back();
    }

    public function show(ShowUserRequest $request, User $user)
    {
        return view('backend.users.show', compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\User\User  $user
     * @param  EditUserRequestNamespace  $request
     *
     */
    public function edit(EditUserRequest $request,User $user)
    {
        return view('backend.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateUserRequestNamespace  $request
     * @param  App\Models\User\User  $user
     *
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $this->repository->update($user, $request->all());
        Alert::toast(trans('alerts.backend.users.updated'), 'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteUserRequestNamespace  $request
     * @param  App\Models\User\User  $user
     *
     */
    public function destroy(DeleteUserRequest $request, User $user)
    {
        $user->delete();
        Alert::toast(trans('alerts.backend.users.deleted'), 'success');
        return back();
    }
}
