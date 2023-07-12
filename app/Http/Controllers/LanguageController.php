<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
/**
 * Class LanguageController.
 */

class LanguageController extends Controller
{

    public function swap($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
