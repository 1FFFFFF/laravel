<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\BlogModel;

class BlogController extends Controller
{
    public function show()
    {
        $blogM = new BlogModel();
        $results = $blogM->showList();

        foreach ($results as $result){
            echo '<a href="'.route('blog').'\\'.$result->blog_id.'">'.$result->blog_id.'</a>';
            echo $result->blog_id;
            echo ':';
            echo $result->title;
            echo '<br>';
        }
        return view('blog/blog');
    }

    public function showBlog($blogId = 1)
    {
        $blogM = new BlogModel();
        $result = $blogM->showBlogById($blogId);
        $result = reset($result);
        echo $result->blog;
        return 'blog show';
    }

    public function writeBlog()
    {
        return view('blog/writeBlog');
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
