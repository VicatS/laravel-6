<?php

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

Route::get('user/{name}', 'UserController@show');

/*Route::get('/', function () {
    $user = New App\User();
    $user->id = 2;
    $user->name = 'Isabel';
    $user->email = 'isabel@gmail.com';
    $user->save();
});*/


