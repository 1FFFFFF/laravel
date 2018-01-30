<?php

// 邮件测试

Route::get('/mail/send','MailController@send');

// 博客首页
Route::get('/blogshow','BlogControllerV2@show')
    ->name('blogshow');

// 博客编辑页面
Route::get('/writeblog','BlogControllerV2@writeBlog')
    ->name('writeblog');

// 博客列表页
Route::get('/bloglist','BlogControllerV2@blogList')
    ->name('bloglist');

// 博客详情页面
Route::get('/blog/{id?}','BlogControllerV2@showBlog')
    ->name('blog');

