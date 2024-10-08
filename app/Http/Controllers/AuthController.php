<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserRecourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public static $wrap = false;

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'remember' => 'boolean',
        ]);
        $remember = $credentials['remember'] ?? false;
        unset($credentials['remember']);
        if (!Auth::attempt($credentials, $remember)) {
            return response(['message' => 'Email or password is wrong'], 422);
        }
        /** @var \App\Models\User $user */
        $user = Auth::user();
        if (!$user->is_admin) {
            Auth::logout();
            return response(['message' => 'You don\'t have permission as admin'], 403);  
        }

        $token = $user->createToken('main')->plainTextToken;
        return response(
            ['user' => new UserRecourse($user), 'token' => $token]
        );
    }

    public function logout(Request $request)
    {
                /** @var \App\Models\User $user */
                $user = Auth::user();
                $user->CurrentTokens()->delete();  
    }
    public function getUser(Request $request)
    {
        return new UserRecourse($request -> user());
    }
}