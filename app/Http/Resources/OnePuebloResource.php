<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OnePuebloResource extends JsonResource
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
            'fiesta'=>$this->fiesta,
            'latitud'=>$this-> latitud,
            'longitud'=>$this->longitud,
            'clima'=>$this->clima,
            'historia'=>$this->historia,
            'ubicacionText'=>$this->ubicacionText,
            'poblacion'=>$this->poblacion,
        ];
    }
    public function with($request)
    {
        return [
            'res'=>true
        ];
    }
}
