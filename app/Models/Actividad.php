<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    protected $fillable=[
        'pueblo_id',
        'nombre',
        'latitud',
        'longitud',
        'img',
        'actividad',
    ];
    protected $hidden=[
        'created_at',
        'updated_at',
      ];
}
