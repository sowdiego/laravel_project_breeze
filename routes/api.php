<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

header('Access-Control-Allow-Methods: HEAD, GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Origin: *');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('testing', function(){
    return 'Testing API';
});