<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Models\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\APIController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * UserController
 */
class AuthController extends APIController
{
    public $data;
    // start login
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->throwValidation($validator->messages()->first());
        }
        if (!Auth::attempt($request->only('email', 'password')))
        {
            return $this->respondUnauthorized('Unauthorized');
        }

        $user = User::where('email', $request->email)->first();

        $token = $user->createToken('auth_token')->plainTextToken;

        $this->data = ['message' => 'Hi '.$user->name.', welcome to home','user'=>$user,'access_token' => $token, 'token_type' => 'Bearer'];

        return $this->setStatusCode(200)->respond($this->data);

    }
    // end login

    // start registration
    public function register(Request $request)
    {dd(1);
        $validator = Validator::make($request->all(),[
            'first_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if ($validator->fails()) {
            return $this->throwValidation($validator->messages()->first());
        }

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'gender' => $request->gender,
            'age' => $request->age,
            'dob' => $request->dob,
            'bio' => $request->bio,
            'password' => Hash::make($request->password),
        ]);
        $user->attachRole(3);
        $token = $user->createToken('auth_token')->plainTextToken;
        $this->data = ['data' => $user,'access_token' => $token, 'token_type' => 'Bearer', ];

        return $this->setStatusCode(201)->respond($this->data);

    }
    // end registration

    // start logout
    public function logout(Request $request)
    {
        try {
            // $user_id = auth('api')->user()->id;
            $request->user()->token()->revoke();
        } catch (\Exception $e) {
            return $this->respondInternalError($e->getMessage());
        }

        return response([
            'message'   => 'User Logout Successfully',
        ],200)->header('Content-Type','application/json');
    }
    // end logout
}
