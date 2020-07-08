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
Route::resource('home','HomeController');

 Route::get('thongtin/{tuoi}/{ten}', function ($tuoi, $ten) {
    return "hello $ten , $tuoi tuổi";
 })->where(['tuoi' => '[0-9]+', 'ten' => '[a-z]+']);

 Route::get('login', function () {
    return view('login');
});

Route::get('chao/{user}', function ($user) {
    return view('hello-user', ['user' => $user]);
});

Route::get('call-view', function () {
    return view('home');
 });