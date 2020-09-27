<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumumen';
    protected $fillable = [
        'title',
        'slug',
        'date',
        'author',
        'content',
        'image',
    ];
}
