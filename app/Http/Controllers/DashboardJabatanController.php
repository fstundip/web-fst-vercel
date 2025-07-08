<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class DashboardJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Jabatan::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                ->orWhere('level', 'like', '%' . $search . '%');
            });
        }

        return view('dashboard.jabatan-kabinet.index', [
            'jabatan' => $query->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.jabatan-kabinet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'level' => 'required|integer|min:1'
        ]);

        $jabatan = new Jabatan;
        $jabatan->name = $request->input('name');
        $jabatan->level = $request->input('level');
        $jabatan->save();


        return redirect('dashboard/jabatan-kabinet')->with('success', 'New jabatan has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('dashboard.jabatan-kabinet.edit', [
            'jabatan' => $jabatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $rules = [
            'name' => 'required|max:255',
            'level' => 'required|integer|min:1'
        ];

        $validatedData = $request->validate($rules);

        $jabatan->update($validatedData);

        return redirect('dashboard/jabatan-kabinet')->with('success', 'Jabatan has been updated!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();

        $messages = 'Jabatan has been deleted!';

        return redirect('dashboard/jabatan-kabinet')->with('success', $messages);
    }

}
