<?php

namespace App\Http\Controllers\Show;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\BlogV2\Post;
use Carbon\Carbon;

class BlogControllerV2 extends Controller
{
    // php artisan make:controller BlogControllerV2

    public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(config('blog.posts_per_page'));

        return view('blog.index', compact('posts'));
    }

    public function showPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        return view('blog.post')->withPost($post);
    }
}
