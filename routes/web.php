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
})->name('nb');

Route::get('/hello', function () {
    return 'Hello, welcome to LaravelAcademy.org';
})->name('hello');

Route::match(['get', 'post'], 'foo', function () {
    return 'This is a request from get or post';
})->name('foo');

Route::match(['get'], 'foo1', function () {
    return 'This is a request from get';
})->name('fool');

// todo need see https://laravel.com/docs/5.5/csrf  web.php post about csrf
Route::match(['post'], 'foo1', function () {
    return 'This is a request from post';
})->name('foolpost');

Route::any('bar', function () {
    return 'This is a request from any HTTP verb';
})->name('bar');

Route::any('there',function(){
    return 'hello everyone';
})->name('there');

// 重定向  当前地址 目标地址 状态码
Route::redirect('/here', '/there', 301)->name('here');

// Route::get('user/{id}',function($id){
//     return 'The userId is '.$id;
// });

// http://XXX/user/xiaoming/info/19/boy
Route::get('user/{name}/info/{age}/{sex}',function($name ,$age ,$sex ){
    return "HE is $age $sex  that the name is $name ";
})->name('usernameinfoagesex');

Route::get('user/{id}', 'UserController@show')->name('userid');

Route::get('user1/{name}', function ($name) {
    // name 必须是字母且不能为空
    return 'name 必须是字母且不能为空';
})->where('name', '[A-Za-z]+')->name('user1');

Route::get('user2/{name?}', function ($name = null) {
    return $name;
})->name('user2');

Route::get('user3/{name?}', function ($name = 'John') {
    return $name;
})->name('user3');

Route::get('user4/{id?}/{name?}', function ($id=1231, $name='hzj') {
    // 同时指定 id 和 name 的数据格式
    return '限定id为数字name为字符';
})->where(['id' => '[0-9]+', 'name' => '[a-z]+'])->name('user4');

Route::get('user5/{id?}', function ($id=1231231) {
    // 只有当 {id} 是数字时才会被调用  因为在app\..\routeserviceprovide.php 的 function boot 中进行了限定
    return '只有当 {id} 是数字时才会被调用  因为在app\..\routeserviceprovide.php 的 function boot 中进行了限定<br>你之所以可以使用是因为我取消了限制 ';
})->name('user5');

Route::get('user6/profile', function () {
    // 通过路由名称生成 URL
    return 'my url: ' . route('user6');
})->name('user6');

// todo study
// 子域名路由
//Route::domain('{account}.blog.dev')->group(function () {
//    Route::get('user/{id}', function ($account, $id) {
//        return 'This is ' . $account . ' page of User ' . $id;
//    });
//});

Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        // Matches The "/admin/users" URL
        return 'this is admin/user';
    })->name('adminuser');
});

Route::resource('posts', 'PostController');