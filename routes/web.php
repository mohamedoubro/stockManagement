<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return redirect('login');
});
Auth::routes();

// Category Route

Route::middleware(['web'])->group(function () {
    //
    Route::resource('category','CategoryController');

Route::resource('product','ProductController');

Route::resource('provider','ProviderController');

Route::resource('sell','SellController');

Route::resource('command','CommandController');

Route::resource('company','CompanyController');

Route::get('home', 'CompanyController@details')->name('home');
});
