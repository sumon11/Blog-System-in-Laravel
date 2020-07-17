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
})->name('home');

Auth::routes();

/*Route::get('/adminDashboard', function () {
    return view('admin.dashboard');
})->name('adminDashboard');*/
Route::group(['namespace'=>'Admin','middleware'=>['auth','admin']],function(){
	Route::get('admin/dashboard','DashboardController@index')->name('dashboard');
	Route::resource('admin/tag','TagController');
	Route::resource('admin/category','CategoryController');
	Route::resource('admin/post','PostController');
});

Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']],function(){
	Route::get('dashboard','DashboardController@index')->name('dashboard');
});

