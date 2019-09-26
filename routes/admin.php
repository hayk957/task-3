<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;



Route::group(['middleware' => ['admin']], function () {
    Route::get('/', 'DashboardController@index')->middleware('auth');

    Auth::routes();
    Route::get('/dashboard', 'DashboardController@index');
// Route::get('/system-management/{option}', 'SystemMgmtController@index');
    Route::get('/profile', 'ProfileController@index');

    Route::resource('employee-management', 'EmployeeManagementController');
    Route::resource('companies','DashboardController');



});
