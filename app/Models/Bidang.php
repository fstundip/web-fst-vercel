<?php

namespace App\Models;

use App\Traits\ConvertContentImageBase64ToUrl;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;
    use ConvertContentImageBase64ToUrl;
    protected $guarded = ['id'];
    protected $contentName = 'description';

    public function anggota()
    {
        return $this->hasMany(Anggota::class);
    }
}
