<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Mail\WelcomeEmail;
use App\Models\Role;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
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


    public function register(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'first_name' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'avatar' => 'image|max:2048',

        ]);

        $data = $request->all();

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $path = $file->store('avatar', 'public');
            $data['avatar'] = $path;
        }
        $role = Role::where('name', 'Simple Client')->first();
        $subscription = Subscription::where('name', 'Basic')->first();
        $data['role_id'] = $role->id;
        $data['subscription_id'] = $subscription->id;
        $user = User::create($data);
        $user->roles()->attach($role);
        $user->subscriptions()->attach($subscription);
        Mail::to($user->email)->queue(new WelcomeEmail($user));
        $token =  $user->createToken($user->email . '_Token')->plainTextToken;
        return response()->json([
            'status' => 200,
            'username' => $user->email,
            'token' => $token,
            'message' => 'Register Successfully'
        ]);
    }
    public function logout(): \Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
    {
        auth()->user()->currentAccessToken()->delete();
        return response([
            'message' => 'Successfully Logged Out'
        ]);

    }

    public function resetPassword(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'email' => 'required|email',
            'token' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::where('email', $request->email)
            ->where('reset_token', $request->token)
            ->first();

        if (!$user) {
            return response()->json(['error' => 'Invalid token or email'], 400);
        }

        // Réinitialiser le mot de passe
        $user->password = Hash::make($request->password);
        $user->reset_token = null;
        $user->save();

        return response()->json(['message' => 'Password reset successfully']);
    }
}
