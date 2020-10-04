<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;

    protected $table = 'aspirasis';
    protected $fillable = [
        'id_penduduk',
        'id_kategori_aspirasi',
        'isi',
        'status',
    ];
}
