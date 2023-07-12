<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Setting\ManageSettingRequest;
use App\Http\Requests\Backend\Setting\UpdateSettingRequest;
use App\Models\Setting\Setting;
use App\Repositories\Backend\Setting\SettingRepository;
use RealRashid\SweetAlert\Facades\Alert;

/**
 * Class SettingController.
 */
class SettingsController extends Controller
{
    protected $setting;


    public function __construct(SettingRepository $setting)
    {
        $this->setting = $setting;
    }


    public function edit(Setting $setting)
    {
        return view('backend.settings.edit',compact('setting'));
    }


    public function update(Setting $setting, UpdateSettingRequest $request)
    {
        $this->setting->update($setting, $request->except(['_token', '_method']));
        Alert::toast(trans('alerts.backend.settings.updated'), 'success');
        return redirect()->route('admin.settings.edit', $setting->id);
    }
}
