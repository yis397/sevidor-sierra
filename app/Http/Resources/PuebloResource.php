<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;

class PuebloResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
          'id'=>$this->id,
          'nombre'=>$this->nombre,
          'completo'=>ucwords($this->completo),
          'descripcion'=>$this->descripcion,
          'img'=>$this->img,

        ];
    }
    public function with($request)
    {
        return [
            'res'=>true
        ];
    }
}

/* 'id'=>$this->id,
          'nombre'=>$this->nombre,
          'completo'=>ucwords($this->completo),
          'descripcion'=>$this->descripcion,
          'fiesta'=>$this->fiesta,
          'latitud'=>$this-> latitud,
          'longitud'=>$this->longitud,
          'clima'=>$this->clima,
          'img'=>$this->img,
          'historia'=>$this->historia,
          'ubicacionText'=>$this->ubicacionText, */
