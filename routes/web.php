<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



//
//Route::get('/', 'EmployeeController@index')->middleware('auth');
//

Route::get('home','HomeController@index');
Route::resource('company','CompanyController');
