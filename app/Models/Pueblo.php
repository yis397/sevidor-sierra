<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pueblo extends Model
{
    use HasFactory;
    protected  $fillable=[
        'nombre',
        'completo',
        'descripcion',
        'fiesta',
        'latitud',
        'longitud',
        'clima',
        'img',
        'historia',
        'ubicacionText',
        'poblacion',

    ];
    protected $hidden=[
      'created_at',
      'updated_at',
    ];
    public function imagenes(){
        return $this->hasMany(Imagenes::class);
    }
    public function actividades(){
        return $this->hasMany(Actividad::class);
    }

}

