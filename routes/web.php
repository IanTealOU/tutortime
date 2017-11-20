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
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('tutorial');
});
Route::get('/options', function () {
    return view('options');
});
Route::get('/quiz', function () {
    return view('quiz');
});
Route::get('/myclass', function () {
    return view('teacherView');
});
Route::get('/login', function () {
    return view('login');
});