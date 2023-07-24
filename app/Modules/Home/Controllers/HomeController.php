<?php

namespace App\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        return Inertia::render('Home/Views/content');
    }

}
