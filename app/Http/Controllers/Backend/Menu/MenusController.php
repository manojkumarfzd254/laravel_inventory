<?php

namespace App\Http\Controllers\Backend\Menu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Menu\ManageMenuRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Backend\Menu\CreateMenuRequest;
use App\Http\Requests\Backend\Menu\StoreMenuRequest;
use App\Http\Requests\Backend\Menu\EditMenuRequest;
use App\Http\Requests\Backend\Menu\UpdateMenuRequest;
use App\Http\Requests\Backend\Menu\DeleteMenuRequest;
use App\Models\Menu\Menu;
use App\Repositories\Backend\Menu\MenuRepository;
use Lbmadesia\Generator\Module;

class MenusController extends Controller
{
    /**
     * Menu Model Object.
     *
     * @var \App\Models\Menu\Menu
     */
    protected $menu;

    /**
     * Module Model Object.
     *
     * @var \Lbmadesia\Generator\Module
     */
    protected $modules;

    /**
     * Menu Types.
     *
     * @var array
     */
    protected $types;

    /**
     * @param \App\Repositories\Backend\Menu\MenuRepository $menu
     */
    public function __construct(MenuRepository $menu, Module $module)
    {
        $this->menu = $menu;

        $this->modules = $module;

        $this->types = [
            'backend'  => 'Backend',
            'frontend' => 'Frontend',
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Requests\Backend\Menu\ManageMenuRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageMenuRequest $request)
    {
        return view('backend.menus.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param \App\Http\Requests\Backend\Menu\CreateMenuRequest $request
     *
     *
     */
    public function create(CreateMenuRequest $request)
    {
        return view('backend.menus.create')
            ->with('types', $this->types)
            ->with('modules', $this->modules->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Backend\Menu\StoreMenuRequest $request
     *
     *
     */
    public function store(StoreMenuRequest $request)
    {
        $this->menu->create($request->except('_token'));
        Alert::toast(trans('alerts.backend.menus.created'), 'success');
        return redirect()->route('admin.menus.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Menu\Menu                           $menu
     * @param \App\Http\Requests\Backend\Menu\EditMenuRequest $request
     *
     * @return \App\Http\Responses\Backend\Menu\EditResponse
     */
    public function edit(Menu $menu, EditMenuRequest $request)
    {
        return view('backend.menus.edit')
        ->with('types', $this->types)
            ->with('menu', $menu)
            ->with('modules', $this->modules->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Models\Menu\Menu                             $menu
     * @param \App\Http\Requests\Backend\Menu\UpdateMenuRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Menu $menu, UpdateMenuRequest $request)
    {
        $this->menu->update($menu, $request->all());
        Alert::toast(trans('alerts.backend.menus.updated'), 'success');
        return redirect()->route('admin.menus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Menu\Menu                             $menu
     * @param \App\Http\Requests\Backend\Menu\DeleteMenuRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Menu $menu, DeleteMenuRequest $request)
    {
        $this->menu->delete($menu);
        Alert::toast(trans('alerts.backend.menus.deleted'), 'success');
        return redirect()->route('admin.menus.index');

    }
}
