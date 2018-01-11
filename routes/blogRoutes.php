<?php
/**
 * Created by PhpStorm.
 * User: hzj
 * Date: 2018/1/10
 * Time: 12:53
 */

Route::get('/','BlogController@show')->name('blog');
Route::get('/blog/{id?}','BlogController@showBlog')->name('blog');
Route::get('/bloglist','BlogController@blogList')->name('bloglist');
Route::get('/writeblog','BlogController@writeBlog')->name('writeblog');