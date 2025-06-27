<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index(Page $page)
    {
        return view('pages.index', [
            "title" => "Page - Forum Studi Teknik (FST)",
            "page" => $page
        ]);
    }
}
