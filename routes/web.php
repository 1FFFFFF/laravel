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

//npm run watch-poll

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

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);
Route::resource('topics', 'TopicsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('categories', 'CategoriesController', ['only' => ['show']]);

Route::post('upload_image', 'TopicsController@uploadImage')->name('topics.upload_image');
