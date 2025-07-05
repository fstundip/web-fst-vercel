<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $post = Post::where('category_id', $category->id)->latest()->get();

        return view('category', [
            'title' => $category->name, 
            'category' => $category->name,
            'post' => $post
        ]);
    }
}
