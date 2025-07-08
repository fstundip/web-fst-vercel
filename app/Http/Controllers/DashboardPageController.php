<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Page::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                ->orWhere('slug', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
            });
        }

        return view('dashboard.pages.index', [
            'page' => $query->paginate(10)
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
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:pages',
            'body' => 'required'
        ]);

        $page = new Page;
        $page->title = $request->input('title');
        $page->slug = $request->input('slug');
        $page->body = $request->input('body');
        $page->save();

        return redirect('dashboard/pages')->with('success', 'New page has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('dashboard.pages.edit', [
            'page' => $page
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required',
            'slug' => 'required|unique:pages,slug,' . $page->id,
        ];

        $validatedData = $request->validate($rules);

        $page->update($validatedData);

        return redirect('dashboard/pages')->with('success', 'Page has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        $messages = 'Page has been deleted!';

        return redirect('dashboard/pages')->with('success', $messages);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Page::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
