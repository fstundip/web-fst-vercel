<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{

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
