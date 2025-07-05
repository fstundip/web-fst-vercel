<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Anggota;

class BidangController extends Controller
{
    public function show($slug)
    {
        $bidang = Bidang::where('slug', $slug)->firstOrFail();

        $anggota = Anggota::where('bidang_id', $bidang->id)
            ->with(['jabatan', 'jurusan', 'angkatan', 'bidang'])
            ->join('jabatans', 'anggotas.jabatan_id', '=', 'jabatans.id')
            ->orderBy('jabatans.level')
            ->select('anggotas.*')
            ->get();

        // Kelompokkan anggota ke dalam baris berdasarkan selisih level dari anggota pertama pada baris
        $anggotaByRows = [];
        $tempRow = [];
        $firstLevelInRow = null;

        foreach ($anggota as $anggotaItem) {
            $currentLevel = $anggotaItem->jabatan->level;

            if ($firstLevelInRow === null) {
                // Baris pertama
                $tempRow[] = $anggotaItem;
                $firstLevelInRow = $currentLevel;
            } elseif (abs($currentLevel - $firstLevelInRow) <= 1) {
                // Masih dalam satu baris
                $tempRow[] = $anggotaItem;
            } else {
                // Pindah baris baru
                $anggotaByRows[] = collect($tempRow);
                $tempRow = [$anggotaItem];
                $firstLevelInRow = $currentLevel;
            }
        }

        // Simpan baris terakhir
        if (!empty($tempRow)) {
            $anggotaByRows[] = collect($tempRow);
        }

        return view('bidang', [
            'title' => $bidang->name,
            'bidang' => $bidang,
            'anggotaByRows' => $anggotaByRows
        ]);
    }
}
