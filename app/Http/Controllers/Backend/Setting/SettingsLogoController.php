<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Setting;
use App\Repositories\Backend\Setting\SettingRepository;
use Illuminate\Http\Request;

/**
 * Class settingLogoController.
 */
class SettingsLogoController extends Controller
{
    protected $setting;


    public function __construct(SettingRepository $setting)
    {
        $this->setting = $setting;
    }


    public function destroy(Setting $setting, Request $request)
    {
        $this->setting->removeLogo($setting, $request->data);

        return json_encode([
            'status' => true,
        ]);
    }
}
