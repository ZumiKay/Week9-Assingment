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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/property-grid' , function (){
    return view('property-grid');
});
Route::get('/Property-single' , function (){
    return view('Property-single');
});
Route::get('/Agent-grid', function () {
    return view('Agent-grid');
});
Route::get('/Agent-single', function () {
    return view('Agent-single');
});
Route::get('/blog-grid', function () {
    return view('blog-grid');
});
Route::get('/Blog-single', function () {
    return view('Blog-single');
});
Route::get('/contact', function () {
    return view('contact');
});
