<?php

use App\Http\Controllers\UserController\admin;
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

    return view('admin.dashboard.index')->name('dashboard');
});


Route::group(['prefix' => 'admin'], function () {
        Route::get('/user','App\Http\Controllers\Admin\UserController@index')->name('admin.users.list');
        Route::get('/user/create','App\Http\Controllers\Admin\UserController@create')->name('admin.users.create');
        Route::post('/user/create','App\Http\Controllers\Admin\UserController@store')->name('admin.users.store');
        Route::get('/users/delete/{user_id}','App\Http\Controllers\Admin\usercontroller@delete')->name('admin.user.delete');
        Route::get('/users/edit/{user_id}','App\Http\Controllers\Admin\usercontroller@edit')->name('admin.user.edit');
        Route::post('/users/edit/{user_id}','App\Http\Controllers\Admin\usercontroller@update')->name('admin.user.update');
});
