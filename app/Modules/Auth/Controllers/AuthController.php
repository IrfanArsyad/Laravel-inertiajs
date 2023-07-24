<?php

namespace App\Modules\Auth\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return Inertia::render('Auth/Views/login');
    }


    public function register(Request $request)
    {
        return Inertia::render('Auth/Views/register');
    }

}
