<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardBidangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Bidang::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                ->orWhere('slug', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        return view('dashboard.bidang-kabinet.index', [
            'bidang' => $query->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.bidang-kabinet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:bidangs',
            'description' => 'required'
        ]);

        $bidang = new Bidang;
        $bidang->name = $request->input('name');
        $bidang->slug = $request->input('slug');
        $bidang->description = $request->input('description');
        $bidang->save();

        return redirect('dashboard/bidang-kabinet')->with('success', 'New bidang has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bidang = Bidang::findOrFail($id);
        return view('dashboard.bidang-kabinet.edit', [
            'bidang' => $bidang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bidang = Bidang::findOrFail($id);
        $rules = [
            'name' => 'required|max:255',
            'slug' => 'required|unique:bidangs,slug,' . $bidang->id,
            'description' => 'required'
        ];

        $validatedData = $request->validate($rules);

        $bidang->update($validatedData);

        return redirect('dashboard/bidang-kabinet')->with('success', 'Bidang has been updated!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bidang = Bidang::findOrFail($id);
        $bidang->delete();

        $messages = 'Bidang has been deleted!';

        return redirect('dashboard/bidang-kabinet')->with('success', $messages);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Bidang::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
