<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{

    public function home()
    {
        $featured = Post::with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'Press Release');
            })
            ->whereNotNull('image')
            ->latest()
            ->first();
        
        $post = Post::with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'Press Release');
            })
            ->whereNotNull('image')
            ->latest()
            ->paginate(4);

        return view('home', [
            "title" => "Forum Studi Teknik (FST)",
            "featured" => $featured,
            "post" => $post
        ]);
    }
}
