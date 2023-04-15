<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('solicitudes', 'App\Http\Controllers\SolicitudeController');
});

Route::middleware('auth:sanctum')->get('user', function(){
    return auth()->user();
});

Route::any('{all}', function () {
    return view('layouts.app');
})
->where(['all' => '.*']);
