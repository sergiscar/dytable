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

Route::get('/', function () {    return view('welcome');});

Route::resource('component', ComponentController::class);
Route::resource('sdg', SDGController::class);
Route::resource('mysdg', MysdgController::class);
Route::resource('mycomponent', MycomponentController::class);
Route::resource('mysubhigh', MysubhighController::class);
Route::resource('mysource', MysourceController::class);
Route::resource('sfc', SourceFinanceController::class);
