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

    //Users Route
        Route::get('/user','App\Http\Controllers\Admin\UserController@index')->name('admin.users.list');
        Route::get('/user/create','App\Http\Controllers\Admin\UserController@create')->name('admin.users.create');
        Route::post('/user/create','App\Http\Controllers\Admin\UserController@store')->name('admin.users.store');
        Route::get('/users/delete/{user_id}','App\Http\Controllers\Admin\usercontroller@delete')->name('admin.user.delete');
        Route::get('/users/edit/{user_id}','App\Http\Controllers\Admin\usercontroller@edit')->name('admin.user.edit');
        Route::post('/users/edit/{user_id}','App\Http\Controllers\Admin\usercontroller@update')->name('admin.user.update');

        //Files Routre

        Route::get('/files', 'App\Http\Controllers\admin\FilesController@index')->name('admin.files.list');
        Route::get('/files/create', 'App\Http\Controllers\admin\FilesController@create')->name('admin.files.create');
        Route::post('/files/create', 'App\Http\Controllers\admin\FilesController@store')->name('admin.files.store');
        Route::get('/files/edit/{file_id}', 'App\Http\Controllers\admin\FilesController@edit')->name('admin.files.edit');
        Route::post('/files/edit/{file_id}', 'App\Http\Controllers\admin\FilesController@update')->name('admin.files.update');


        //plans Route

        Route::get('/plans', 'App\Http\Controllers\admin\PlansController@index')->name('admin.plan.list');
        Route::get('/plans/create', 'App\Http\Controllers\admin\PlansController@create')->name('admin.plan.create');
        Route::post('/plans/create', 'App\Http\Controllers\admin\PlansController@store')->name('admin.plan.store');
        Route::get('/plans/edit/{plan_id}', 'App\Http\Controllers\admin\PlansController@edit')->name('admin.plan.edit');
        Route::post('/plans/edit/{plan_id}', 'App\Http\Controllers\admin\PlansController@update')->name('admin.plan.update');
        Route::get('/plans/remove/{plan_id}', 'App\Http\Controllers\admin\PlansController@remove')->name('admin.plan.remove');

});
