<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pages.index', [
            'pages' => Pages::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 200));

        Pages::create($validatedData);

        return redirect('dashboard/pages')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $page = Pages::findOrFail($id);

        return view('dashboard.pages.show', [
            'pages' => $page
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $page = Pages::findOrFail($id);
        return view('dashboard.pages.edit', [
            'pages' => $page
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pages $pages)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:pages,slug,' . $pages->id,
            'body' => 'required'
        ]);

        $pages->fill($validatedData);
        $pages->save();

        $messages = "Page has been edited!";
        return redirect('dashboard/pages')->with('success', $messages);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $page = Pages::findOrFail($id);
        $page->delete();

        $messages = 'Page has been deleted!';

        return redirect('dashboard/pages')->with('success', $messages);
    }
}
