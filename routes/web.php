<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('selly', function () {
    return "Hi 0xDebugger";
});


Route::view('awad','index');

Route::get('user/{id}','MohamedController@show');
Route::get('Jedd/{id}','Jedd@show');
Route::get('Jedd','Jedd@index');