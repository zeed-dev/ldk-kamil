<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => false]);

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        // dashboard
        Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard.index');

        //permissions
        Route::resource('/permission', 'Admin\PermissionsController', [
            'except' => ['show', 'create', 'edit', 'update', 'delete'], 'as' => 'admin'
        ]);

        //roles
        Route::resource('/role', 'Admin\RoleController', [
            'except' => ['show'], 'as' => 'admin'
        ]);

        //users
        Route::resource('/user', 'Admin\UserController', [
            'except' => ['show'], 'as' => 'admin'
        ]);
    });
});
