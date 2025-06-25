<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Bidang;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;



class DashboardAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.anggota-kabinet.index', [
            'anggota' => Anggota::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.anggota-kabinet.create', [
            'bidang' => Bidang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'bidang_id' => 'required',
            'slug' => 'required|unique:anggotas',
            'image' => 'image|file|max:3000',
            'jabatan' => 'required',
            'jurusan' => 'required'
        ]);

        $imagePath = $request->file('image')->store('post-images', 'public');

        $bidangKabinet = new Anggota;
        $bidangKabinet->name = $request->input('name');
        $bidangKabinet->slug = $request->input('slug');
        $bidangKabinet->jabatan = $request->input('jabatan');
        $bidangKabinet->bidang_id = $request->input('bidang_id');
        $bidangKabinet->jurusan = $request->input('jurusan');
        $bidangKabinet->image = $imagePath; // Menyimpan path file gambar ke dalam kolom 'image'
        $bidangKabinet->save();


        return redirect('dashboard/anggota-kabinet')->with('success', 'New anggota has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('dashboard.anggota-kabinet.show', [
            'anggota' => $anggota
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('dashboard.anggota-kabinet.edit', [
            'anggota' => $anggota,
            'bidang' => Bidang::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
        $rules = [
            'name' => 'required|max:255',
            'jabatan' => 'required',
            'bidang_id' => 'required',
            'jurusan' => 'required',
            'image' => 'image|file|max:8000'
        ];

        if ($request->slug != $anggota->slug) {
            $rules['slug'] = 'required|unique:anggotas';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['bidang_id'] = auth()->user()->id;

        $anggota->update($validatedData);

        $message = "Anggota has been updated successfully!";

        return redirect('dashboard/anggota-kabinet')->with('success', $message);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Anggota $anggota)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        $messages = 'Anggota has been deleted!';

        return redirect('dashboard/anggota-kabinet')->with('success', $messages);
    }

}
