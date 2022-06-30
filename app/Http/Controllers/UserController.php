<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * register an user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function register(Request $request)
    {
        // dd($request->input('TestingBodyData'));

        $username = $request->input('username');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $resCount = User::where('username', '=', $username)->where('email', '=', $email)->count();

        if($resCount > 0) {
            return response()->json([
                'status' => 400,
                'message' => 'Duplicate username or email found!'
            ], 400);
        }

        try {
            $insertedUser = User::create([
                'username' => $username,
                'email' => $email,
                'name' => $name,
                'password' => $password
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'User registered successfully'
            ], 200);
        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json([
                'status' => 500,
                'message' => 'Something wrong occured while registering the user',
                'exception' => $exception->errorInfo
            ], 500);
        }
    }

    /**
     * login an user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        try {
            $resUser = User::where('username', '=', $username)->first();

            if ($resUser == null) {
                return response()->json([
                    'status' => 400,
                    'message' => 'Username or password is incorrect'
                ], 400);
            }

            if($resUser->password !== $password) {
                return response()->json([
                    'status' => 400,
                    'message' => 'Username or password is incorrect'
                ], 400);
            }

            return response()->json([
                'status' => 200,
                'message' => 'Login success',
                'data' => [
                    'user_id' => $resUser->id,
                    'username' => $resUser->username,
                    'email' => $resUser->email,
                    'name' => $resUser->name,
                    'role' => $resUser->role,
                    'unit_id' => $resUser->unit_id
                ]
            ], 200);
        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json([
                'status' => 500,
                'message' => 'Something wrong occured while logging in'
            ], 500);
        }
    }
}