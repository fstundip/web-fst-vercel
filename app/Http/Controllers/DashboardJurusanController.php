<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class DashboardJurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Jurusan::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', '%' . $search . '%');
        }

        return view('dashboard.jurusan-kabinet.index', [
            'jurusan' => $query->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.jurusan-kabinet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $jurusan = new Jurusan;
        $jurusan->name = $request->input('name');
        $jurusan->save();


        return redirect('dashboard/jurusan-kabinet')->with('success', 'New jurusan has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('dashboard.jurusan-kabinet.edit', [
            'jurusan' => $jurusan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $rules = [
            'name' => 'required|max:255'
        ];

        $validatedData = $request->validate($rules);

        $jurusan->update($validatedData);

        return redirect('dashboard/jurusan-kabinet')->with('success', 'Jurusan has been updated!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();

        $messages = 'Jurusan has been deleted!';

        return redirect('dashboard/jurusan-kabinet')->with('success', $messages);
    }

}
