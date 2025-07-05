<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts.index', [
            "title" => "Informasi - Forum Studi Teknik (FST)",
            "posts" => $posts
        ]);
    }

    public function show($category_slug, $post_slug)
    {
        $category = Category::where('slug', $category_slug)->firstOrFail();
        $post = Post::where('slug', $post_slug)
                ->where('category_id', $category->id)
                ->firstOrFail();

        return view('posts.show', [
            "title" => $post->title,
            "post" => $post
        ]);
    }
}
