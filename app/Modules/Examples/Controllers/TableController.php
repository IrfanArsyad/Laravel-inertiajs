<?php

namespace App\Modules\Examples\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Modules\Examples\Repositories\UserTableRepository;

class TableController extends Controller
{

    public array $viewdata = [];

    public function index(Request $request)
    {
        return Inertia::render('Examples/Views/table/content', $this->viewdata);
    }

    public function table(Request $request)
    {
        $users = new UserTableRepository();
        return $users->get_users($request);
    }

}
