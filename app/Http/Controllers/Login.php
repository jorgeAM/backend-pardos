<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

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
        dd($request->all());
    }
}
