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
//Route::get('/', function () {
//    return view('home');
//});
//
//Route::get('/about', function () {
//    return view('tutorial');
//});
//
//Route::get('/options', function () {
//    return view('options');
//});
//
//Route::get('/quiz', function () {
//    return view('quiz');
//});
//
//Route::get('/myclass', function () {
//    return view('teacherView');
//});
//
//Route::get('/login', function () {
//    return view('login');
//});
//
//Route::get('/tutorial', function() {
//    return view('tutorial');
//});
//
//Route::get('/home', function () {
//    return view('home');
//})
//
//Route::get('/mainview') {
//    return view('teacherlanding');
//}
//
//Route::view('/mainview2','adminlanding');
//
//Route::get('/mainview3','studentlanding');
//Route::view('/myclass','teacherClass');
//Route::get('/classedit'){
//    return view('adminClass');
//};
