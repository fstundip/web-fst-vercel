<?php

namespace App\Http\Controllers;

use App\Models\Bidang;

class BidangController extends Controller
{
    public function show($slug)
    {
        $bidang = Bidang::where('slug', $slug)->firstOrFail();
        $anggota = $bidang->anggota;

        return view('bidang', [
            'title' => 'Bidang ' . $bidang->name, // << kirim title
            'bidang' => $bidang->name,
            'anggota' => $anggota
        ]);
    }
}
