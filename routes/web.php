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

Route::get("actiondoctor/getdataperday", "ActionDoctorController@getresultperday");
Route::get("actiondoctor/getdetail", "ActionDoctorController@getdetail");
Route::post("actiondoctor/submitaction", "ActionDoctorController@addaction");
Route::get("actiondoctor/getaction", "ActionDoctorController@showaction");
Route::get("publichealthcenterdoctor/login", 'UserController@login');
Route::get('keyperformancedoctor/getDataKPI','KeyPerformanceDoctorController@getDataKPI');
