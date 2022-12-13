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
Route::get('/service', function () {
    return view('service');
});
Route::get('/services', function () {
    return view('services');
});

Route::get('/service2', function () {
    return view('service2');
});
Route::get('/service3', function () {
    return view('service3');
});
Route::get('/service4', function () {
    return view('service4');
});
Route::get('/service5', function () {
    return view('service5');
});
Route::get('/service6', function () {
    return view('service6');
});
