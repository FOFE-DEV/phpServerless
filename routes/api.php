<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("index/{name}",function ($name){

    DB::table('Persons')->insert([
        'LastName' => $name,
        'FirstName' => 'fofe ',
        'Address' => 'ngaoundere',
        'City' => 'foumbot',
    ]);
    return response()->json(data: ["message"=>"user ".$name." created"], status: 201);
});

