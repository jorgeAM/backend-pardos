<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  LoginRequest $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                "message" => "Usuario no existe"
            ], 404);
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                "message" => "Contraseña incorrecta"
            ], 404);
        }

        return  $user;
    }
}
