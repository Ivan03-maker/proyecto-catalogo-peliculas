<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Esto permite que Laravel acepte los datos que enviamos desde Angular
    protected $fillable = [
        'title',
        'synopsis',
        'year',
        'cover'
    ];
}