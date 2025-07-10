<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Report;

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

        $report = Report::latest('created_at')->take(3)->get();

        return view('home', [
            "title" => "Forum Studi Teknik (FST)",
            "post" => $post,
            "report" => $report
        ]);
    }
}
