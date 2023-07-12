<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function show(User $user)
    {
        return view('backend.profile.index');
    }


}
