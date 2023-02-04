<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::resource('/products', ProductController::class);


Route::get('/form', 'App\Http\Controllers\FormController@index');

Route::get('/form/store', 'App\Http\Controllers\FormController@store');

Route::get('/test', function () {
    //test 2
    return view('test');    
});