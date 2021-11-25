<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SimilarController;
use App\Http\Controllers\Admin\MainController;
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

//Route::get('/', function () {});

Route::get('/', [IndexController::class, 'index']);

Route::get('/similar/{film?}', [SimilarController::class, 'index']);

Route::get('/admin', 'App\Http\Controllers\Admin\MainController@index')->name('admin.index');

//Route::group(['prefix' => 'admin', 'namespace'=>'Admin'], function(){
//    Route::get('/', 'MainController@index')->name('admin.index');
//});




