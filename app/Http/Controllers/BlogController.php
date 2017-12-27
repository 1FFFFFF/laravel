<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\BlogModel;

class BlogController extends Controller
{
    public function show($id = 1)
    {
        $blogM = new BlogModel();
        $result = $blogM->select();
        $result = reset($result);
        echo $result->blog;
        echo '<br>';
        var_dump($blogM->readCountry());
        return 'blog show';
    }
}
