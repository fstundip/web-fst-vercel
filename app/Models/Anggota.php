<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
    public function angkatan()
    {
        return $this->belongsTo(Angkatan::class);
    }
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
