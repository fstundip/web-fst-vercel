<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Bidang;
use App\Models\Jabatan;
use App\Models\Jurusan;
use App\Models\Angkatan;
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
            'bidang' => Bidang::all(),
            'jabatan' => Jabatan::all(),
            'jurusan' => Jurusan::all(),
            'angkatan' => Angkatan::all()
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
            'image' => 'required|image|file|max:10000|mimes:jpeg,png,jpg',
            'jabatan_id' => 'required',
            'jurusan_id' => 'required',
            'angkatan_id' => 'required'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/anggota-images', $image->hashName());

        Anggota::create([
            'name' => $request->name,
            'jabatan_id' => $request->jabatan_id,
            'bidang_id' => $request->bidang_id,
            'jurusan_id' => $request->jurusan_id,
            'angkatan_id' => $request->angkatan_id,
            'image' => 'anggota-images/' . $image->hashName(), 
        ]);

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
            'bidang' => Bidang::all(),
            'jabatan' => Jabatan::all(),
            'jurusan' => Jurusan::all(),
            'angkatan' => Angkatan::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $anggota = Anggota::findOrFail($id);

        $rules = [
            'name' => 'required|max:255',
            'bidang_id' => 'required',
            'jabatan_id' => 'required',
            'jurusan_id' => 'required',
            'angkatan_id' => 'required',
            'image' => 'image|file|max:10000|mimes:jpeg,png,jpg',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($anggota->image) {
                Storage::delete('public/' . $anggota->image);
            }

            $image = $request->file('image');
            $image->storeAs('public/anggota-images', $image->hashName());
            $validatedData['image'] = 'anggota-images/' . $image->hashName();
        }

        $anggota->update($validatedData);

        return redirect('dashboard/anggota-kabinet')->with('success', 'Anggota has been updated!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        if ($anggota->image) {
            Storage::delete('public/' . $anggota->image);
        }
        $anggota->delete();

        $messages = 'Anggota has been deleted!';

        return redirect('dashboard/anggota-kabinet')->with('success', $messages);
    }

}
