<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendudukTetap extends Model
{
    use HasFactory;

    protected $table = 'penduduk_tetaps';
    protected $fillable = [
        'id_keluarga',
        'id_penduduk'
    ];
}
