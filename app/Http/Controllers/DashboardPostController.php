<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'required|image|file|max:10000|mimes:jpeg,png,jpg',
            'body' => 'required'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/post-images', $image->hashName());

        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'body' => $request->body,
            'image' => 'post-images/' . $image->hashName(), 
            'excerpt' => Str::limit(strip_tags($request->body), 200)
        ]);

        return redirect('dashboard/posts')->with('success', 'New post has been added!');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('dashboard.posts.edit', [
            'post' => $post,
            'category' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $rules = [
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts,slug,' . $post->id,
            'category_id' => 'required',
            'image' => 'image|file|max:10000|mimes:jpeg,png,jpg',
            'body' => 'required'
        ];
        
        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($post->image) {
                Storage::delete('public/' . $post->image);
            }

            $image = $request->file('image');
            $image->storeAs('public/post-images', $image->hashName());
            $validatedData['image'] = 'post-images/' . $image->hashName();
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        $post->update($validatedData);

        return redirect('dashboard/posts')->with('success', 'Post has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
         if ($post->image) {
            Storage::delete('public/' . $post->image);
        }
        $post->delete();

        $messages = 'Post has been deleted!';

        return redirect('dashboard/posts')->with('success', $messages);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
