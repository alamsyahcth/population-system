<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriAspirasi extends Model
{
    use HasFactory;
    protected $table = 'kategori_aspirasis';
    protected $fillable = [
        'name_aspirasi',
        'keterangan'
    ];
}
