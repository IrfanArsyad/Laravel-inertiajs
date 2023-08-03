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
        $data = [
            [
                'nama' => 'irfan',
                'email' => 'irfan@gmail.com',
                'alamat' => 'tangerang',
                'phone' => '0832131'
            ],
            [
                'nama' => 'irfan1',
                'email' => 'irfan1@gmail.com',
                'alamat' => 'tangerang',
                'phone' => '0832131'
            ],
            [
                'nama' => 'irfan2',
                'email' => 'irfan2@gmail.com',
                'alamat' => 'tangerang',
                'phone' => '0832131'
            ],
            [
                'nama' => 'irfan3',
                'email' => 'irfan3@gmail.com',
                'alamat' => 'tangerang',
                'phone' => '0832131'
            ]
        ];

        return response_api(collect($data), 200);
    }

}
