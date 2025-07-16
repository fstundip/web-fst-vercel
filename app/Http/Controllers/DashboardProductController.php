<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                ->orWhere('category', 'like', '%' . $search . '%')
                ->orWhere('price', 'like', '%' . $search . '%');
            });
        }

        return view('dashboard.products.index', [
            'product' => $query->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
            'price' => 'required|integer|min:0',
            'image' => 'required|image|file|max:10000|mimes:jpeg,png,jpg',
        ]);

        $image = $request->file('image');
        $image->storeAs('product-images', $image->hashName());

        Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'image' => 'product-images/' . $image->hashName(), 
        ]);

        return redirect('dashboard/products')->with('success', 'New product has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('dashboard.products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $rules = [
            'name' => 'required|max:255',
            'category' => 'required',
            'price' => 'required|integer|min:0',
            'image' => 'image|file|max:10000|mimes:jpeg,png,jpg',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($product->image) {
                Storage::delete($product->image);
            }

            $image = $request->file('image');
            $image->storeAs('product-images', $image->hashName());
            $validatedData['image'] = 'product-images/' . $image->hashName();
        }

        $product->update($validatedData);

        return redirect('dashboard/products')->with('success', 'Product has been updated!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image) {
            Storage::delete($product->image);
        }
        $product->delete();

        $messages = 'Product has been deleted!';

        return redirect('dashboard/products')->with('success', $messages);
    }

}
