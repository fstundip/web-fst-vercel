<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Category::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                ->orWhere('slug', 'like', '%' . $search . '%');
            });
        }
        
        return view('dashboard.categories.index', [
            'category' => $query->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories',
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->save();


        return redirect('dashboard/categories')->with('success', 'New category has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories,slug,' . $category->id,
        ];

        $validatedData = $request->validate($rules);

        $category->update($validatedData);

        return redirect('dashboard/categories')->with('success', 'Category has been updated!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        $messages = 'Category has been deleted!';

        return redirect('dashboard/categories')->with('success', $messages);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
