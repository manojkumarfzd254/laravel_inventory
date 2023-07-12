<?php

namespace App\Http\Controllers\Api\V1\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
trait ResetPasswordSender
{

    /**
     * Send a reset link to the given user.
     */
    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $this->credentials($request)
        );

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($request, $response)
                    : $this->sendResetLinkFailedResponse($request, $response);
    }

    /**
     * Validate the email for the given request.
     */
    protected function validateEmail(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validation->fails()) {
            return $this->throwValidation($validation->messages()->first());
        }
    }

    /**
     * Get the needed authentication credentials from the request.
     */
    protected function credentials(Request $request)
    {
        return $request->only('email');
    }

    /**
     * Get the response for a successful password reset link.
     */
    protected function sendResetLinkResponse(Request $request, $response)
    {
        return response([
            'status'    => 'ok',
            'message'   => 'We have sent email with reset password link. Please check your inbox!.',
        ],200)->header('content-Type','application/json');
    }

    /**
     * Get the response for a failed password reset link.
     */
    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return response(array('error'=>[
            'message'   => 'Failed! please try again later',
        ]),404)->header('content-Type','application/json');
    }

    /**
     * Get the broker to be used during password reset.
     */
    public function broker()
    {
        return Password::broker();
    }
}
