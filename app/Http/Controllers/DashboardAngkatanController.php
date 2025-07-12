<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angkatan;

class DashboardAngkatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Angkatan::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('tahun', 'like', '%' . $search . '%');
        }

        return view('dashboard.angkatan-kabinet.index', [
            'angkatan' => $query->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.angkatan-kabinet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|integer|min:0'
        ]);

        $angkatan = new Angkatan;
        $angkatan->tahun = $request->input('tahun');
        $angkatan->save();


        return redirect('dashboard/angkatan-kabinet')->with('success', 'New angkatan has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $angkatan = Angkatan::findOrFail($id);
        return view('dashboard.angkatan-kabinet.edit', [
            'angkatan' => $angkatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $angkatan = Angkatan::findOrFail($id);
        $rules = [
            'tahun' => 'required|integer|min:0'
        ];

        $validatedData = $request->validate($rules);

        $angkatan->update($validatedData);

        return redirect('dashboard/angkatan-kabinet')->with('success', 'Angkatan has been updated!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $angkatan = Angkatan::findOrFail($id);
        $angkatan->delete();

        $messages = 'Angkatan has been deleted!';

        return redirect('dashboard/angkatan-kabinet')->with('success', $messages);
    }

}
