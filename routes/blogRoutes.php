<?php
/**
 * Created by PhpStorm.
 * User: hzj
 * Date: 2018/1/10
 * Time: 12:53
 */


// 邮件测试

Route::get('/mail/send','MailController@send');

// 博客首页
Route::get('/blogshow','BlogController@show')
    ->name('blogshow');

// 博客编辑页面
Route::get('/writeblog','BlogController@writeBlog')
    ->name('writeblog');

// 博客列表页
Route::get('/bloglist','BlogController@blogList')
    ->name('bloglist');

// 博客详情页面
Route::get('/blog/{id?}','BlogController@showBlog')
    ->name('blog');

