<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Login with username or email 
https://medium.com/innohub/laravel-5-6-customizing-default-auth-part-2-login-with-username-or-email-e66a70217178

Complexity Password
https://www.5balloons.info/password-regex-validation-laravel-authentication/
Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.

Phone Number Validation
http://codel10n.com/mobile-number-validation-how-to-do-it-right/
*/

Route::get('/', function () {
    return view('vendor.adminlte2.homepage');
});

Route::resource('profiles','RegisterController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/index2', function () {
    return view('vendor.adminlte2.index2');
});

Route::get('/blank', function () {
    return view('vendor.adminlte2.blank');
});

Route::get('/form1', function () {
    return view('sample.form1column');
});

Route::get('/form2', function () {
    return view('sample.form2column');
});

Route::get('/table1', function () {
    return view('sample.table1');
});

Route::get('/table2', function () {
    return view('sample.table2');
});

Route::get('/modules', function () {
    return view('admin.modules.index');
});

Route::get('/modules/create', function () {
    return view('admin.modules.create');
});