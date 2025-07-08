<?php

namespace App\Models;

use App\Traits\ConvertContentImageBase64ToUrl;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    use ConvertContentImageBase64ToUrl;
    protected $guarded = ['id'];
    protected $contentName = 'body';
}
