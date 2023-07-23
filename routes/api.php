<?php


use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use Tightenco\Ziggy\Ziggy;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/router', function (\Illuminate\Http\Request $request) {
    $ziggyObj = (new Ziggy)->toArray();
    $ziggyObj['url'] = 'https://' . $request->host();

    return response()->json($ziggyObj);

//    try {
//        $key_name = 'router:' . $request->httpHost();
//
//        $check = Redis::client()->get($key_name);
//
//        if (!$check || config('app.debug')) {
//            $ziggyObj = (new Ziggy)->toArray();
//            $ziggyObj['url'] = 'https://' . $request->host();
//
//            Redis::client()->set($key_name, json_encode($ziggyObj), 'EX', 300);
//
//            return response()->json($ziggyObj);
//        }
//
//        return response()->json(json_decode($check));
//
//    } catch (Exception) {
//        $ziggyObj = (new Ziggy)->toArray();
//        $ziggyObj['url'] = 'https://' . $request->host();
//
//        return response()->json($ziggyObj);
//    }
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
