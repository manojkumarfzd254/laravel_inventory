<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Api\V1\Auth\ResetPasswordSender;
use App\Http\Controllers\APIController;

class ForgotPasswordController extends APIController
{

    use ResetPasswordSender;

}
