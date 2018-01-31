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


//Route::get('/', function () {
//    return view('index.index');
//});


// Blog pages
Route::get('/', function () {
    return redirect('/blog');
});

Route::get('blog', 'Show\\BlogControllerV2@index');
Route::get('blog/{slug}', 'Show\\BlogControllerV2@showPost');
