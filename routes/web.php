<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

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


Route::get('/admin', function () {

    return view('admin.dashboard.index');
});


Route::group(['prefix' => 'admin'], function () {
        Route::get('/user','App\Http\Controllers\UserController@index');
});
