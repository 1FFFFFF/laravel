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


// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

Route::get('/', function () {
    return view('welcome');
});





/*
* study
*/
// ‘/’ or null 都为根目录 api中 ‘/’为‘/’api‘/’ 
Route::get('/nb',function(){
    return view('welcome',['website'=>'牛逼牛逼']);
});

Route::get('/hello', function () {
    return 'Hello, welcome to LaravelAcademy.org';
});

Route::match(['get', 'post'], 'foo', function () {
    return 'This is a request from get or post';
});

Route::match(['get'], 'foo1', function () {
    return 'This is a request from get';
});

// todo need see https://laravel.com/docs/5.5/csrf  web.php post about csrf
Route::match(['post'], 'foo1', function () {
    return 'This is a request from post';
});

Route::any('bar', function () {
    return 'This is a request from any HTTP verb';
});

Route::any('there',function(){
    return 'hello everyone';
});

// 重定向  当前地址 目标地址 状态码
Route::redirect('/here', '/there', 301); 

// Route::get('user/{id}',function($id){
//     return 'The userId is '.$id;
// });

// http://XXX/user/xiaoming/info/19/boy
Route::get('user/{name}/info/{age}/{sex}',function($name,$age,$sex){
    return "HE is $age $sex  that the name is $name ";
});

    
Route::get('user/{id}', 'UserController@show');