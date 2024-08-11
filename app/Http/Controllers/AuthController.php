<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('guest.login');
    }

    public function register()
    {
        return view('guest.register');
    }

    public function store(RegisterUserRequest $request)
    {
        dump($request);
    }
}
