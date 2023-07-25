<?php

namespace App\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public array $view_data = [];

    public function __construct()
    {

        $this->view_data['module'] = 'home';
    }

    public function index(Request $request)
    {
        return Inertia::render('Home/Views/content', $this->view_data);
    }

}
