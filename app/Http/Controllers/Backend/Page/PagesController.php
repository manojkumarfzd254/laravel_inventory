<?php

namespace App\Http\Controllers\Backend\Page;

use App\Models\Page\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Page\PageRepository;
use App\Http\Requests\Backend\Page\ManagePageRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Backend\Page\CreatePageRequest;
use App\Http\Requests\Backend\Page\StorePageRequest;
use App\Http\Requests\Backend\Page\EditPageRequest;
use App\Http\Requests\Backend\Page\UpdatePageRequest;
use App\Http\Requests\Backend\Page\DeletePageRequest;

/**
 * PagesController
 */
class PagesController extends Controller
{
    /**
     * variable to store the repository object
     * @var PageRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param PageRepository $repository;
     */
    public function __construct(PageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Page\ManagePageRequest  $request
     * 
     */
    public function index(ManagePageRequest $request)
    {
        return view('backend.pages.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreatePageRequestNamespace  $request
     * 
     */
    public function create(CreatePageRequest $request)
    {
        return view('backend.pages.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePageRequestNamespace  $request
     * 
     */
    public function store(StorePageRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        Alert::toast(trans('alerts.backend.pages.created'), 'success');
        return redirect()->route('admin.pages.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Page\Page  $page
     * @param  EditPageRequestNamespace  $request
     * 
     */
    public function edit(Page $page, EditPageRequest $request)
    {
        return view('backend.pages.edit', compact('page'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePageRequestNamespace  $request
     * @param  App\Models\Page\Page  $page
     * 
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $page, $input );
        //return with successfull message
        Alert::toast(trans('alerts.backend.pages.updated'), 'success');
        return redirect()->route('admin.pages.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeletePageRequestNamespace  $request
     * @param  App\Models\Page\Page  $page
     * 
     */
    public function destroy(Page $page, DeletePageRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($page);
        //returning with successfull message
        Alert::toast(trans('alerts.backend.pages.deleted'), 'success');
        return redirect()->route('admin.pages.index');
    }
    
}
