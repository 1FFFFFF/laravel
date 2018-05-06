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

Route::get('/', 'PagesController@root')->name('root');

Route::namespace('Test')->group(function(){
    Route::get('/idtest','NextDbController@getId');
});

// Blog pages
//Route::get('/', function () {
//    return redirect('/blog');
//});

Route::namespace('Blog')->group(function(){
    Route::get('blog', 'BlogController@index');
    Route::get('blog/{slug}', 'BlogController@showPost');
});


// 邮件测试
Route::get('/mail/send','MailController@send');
// 中间件测试
//Route::get('{age}',function(){
//})->middleware('CheckAge');
