<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalasanAspirasi extends Model
{
    use HasFactory;

    protected $table = 'balasan_aspirasis';
    protected $fillable = [
        'id_aspirasi',
        'isi_balasan'
    ];
}
