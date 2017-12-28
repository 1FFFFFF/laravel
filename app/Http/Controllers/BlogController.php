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

        return 'blog show';
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
        echo 'you will write in here';
        echo '<form action="">
              <textarea></textarea><br>
              <textarea>asdas</textarea><br>
              <input type="button" value="提交">
              </form>';
        return 'you will write in here';
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
