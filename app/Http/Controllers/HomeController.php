<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{

    public function home()
    {
        $post = Post::with('category')
        ->whereHas('category', function ($query) {
            $query->where('name', 'Press Release');
        })
        ->whereNotNull('image')
        ->paginate(15);

        return view('home', [
            "title" => "Forum Studi Teknik (FST)",
            "post" => $post
        ]);
    }
}
