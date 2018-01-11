<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\BlogModel;

class BlogController extends Controller
{
    // todo del 这是一个用于测试model的方法 准备删除
    public function test()
    {
        // 可以查询所有数据
        dd(BlogModel::all());
        // where
        dd(BlogModel::where('blog_id', 1)
            ->get());
        // insert
        $bM = new BlogModel();
        $bM->blog_title = 'test_title';
        $bM->blog_content = 'test_title';
        $bM->save();

        // 觉得可能弃用的DB 方法
        $blogM = new BlogModel();
        $blogM->firstInsert();
        $results = $blogM->showList();
    }

    public function show()
    {
        $result1 = BlogModel::find(1);
        $result2 = BlogModel::find(2);
        var_dump($result2->blog_id);
        echo '<hr>';
        var_dump($result1->blog_id);
        echo '<hr>';
        if($result1 === $result2){
            echo '===';
            echo '<br>';
        }

        $results = BlogModel::all();
        foreach ($results as $result){
            echo '<a href="'.route('blog').'\\'.$result->blog_id.'">'.$result->blog_id.'</a>';
            echo '嘿嘿';
            echo $result->blog_id;
            echo ':';
            echo $result->blog_title;
            echo '---';
            echo $result->blog_content;
            echo '<br>';
        }
        return view('blog.blog');
    }

    public function blogList()
    {
        return view('blog.blogList');
    }

    public function showBlog($blogId = 1)
    {
        $blogM = new BlogModel();
        $result = $blogM->showBlogById($blogId);
        $result = reset($result);
        echo $result->blog;
        return view('blog.showBlog');
    }

    public function writeBlog()
    {
        return view('blog.writeBlog');
    }

    public function submitBlog($pass)
    {
        if($this->passSumit($pass)){
            echo 'submit success';
        } else {
            echo 'you can\'t submit blog';
        }
        return redirect()->route('blog');
    }

    private function passSumit($pass)
    {
        return false;
    }

}
