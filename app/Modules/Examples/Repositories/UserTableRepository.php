<?php

namespace App\Modules\Examples\Repositories;

use App\Repositories\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserTableRepository extends Repository
{
    public function get_users(Request $request)
    {
        $query =  DB::table('users')->paginate(5)->onEachSide(1)
            ->appends($request->except('page'));

       return $query->toJson();
    }
}
