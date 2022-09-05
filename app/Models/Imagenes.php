<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    use HasFactory;
    protected $fillable=[
        'pueblo_id',
        'nombre',
        'img',
    ];
    protected $hidden=[
        'created_at',
        'updated_at',
      ];
}
