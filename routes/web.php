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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//Routes for Admins

Route::get('admin/login' , 'Admin\AdminLoginController@showLoginForm')->name('admin.login.form');
Route::post('/admin' , 'Admin\AdminLoginController@adminLogin')->name('admin.login');
Route::get('/admin' , 'AdminHomeController@index')->name('deshborad');

