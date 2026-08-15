<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginRequest;
use App\Http\Requests\Api\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        $token = $user->createToken('auth_token');
        return response()->json([
            'user' => $user,
            'token' => $token->plainTextToken,
            'token_type' => 'Bearer'
        ],201);
    }

    public function login(LoginRequest $request){
        $credentials = $request->validated();
        if(!Auth::attempt($credentials))
            return response()->json(['errors' => ['Las credenciales proporcionadas son incorrectas.']],401);

        /** @var \App\Models\User $user */
        $user = Auth::user();
        $token = $user->createToken('auth_token');
        return response()->json([
            'user' => $user,
            'token' => $token->plainTextToken,
            'token_type' => 'Bearer'
        ], 200);
    }
}
