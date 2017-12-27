<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Blog;
class BlogController extends Controller
{
    public function show($id = 1)
    {
        $model = new Blog();
        $result = $model->select();
        $result = reset($result);
        echo $result->blog;
        echo '<br>';
        return 'blog show';
    }
}
