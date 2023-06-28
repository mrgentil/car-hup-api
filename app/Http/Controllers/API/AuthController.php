<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\JWTAuth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'status' => 401,
                'message' => 'Invalid Credentials',
            ]);
        }
        $user = Auth::user();
        $token = $user->createToken('token')->plainTextToken;
        return response(['jwt' => $token]);
    }

    public function logout()
    {
        auth()->user()->currentAccessToken()->delete();
        return response([
            'message' => 'Successfully Logged Out'
        ]);

    }
}
