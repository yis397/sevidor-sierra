<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoadPueblo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        'nombre'=>'required',
        'completo'=>'required',
        'descripcion'=>'required',
        'fiesta'=>'required',
        'latitud'=>'required',
        'longitud'=>'required',
        'clima'=>'required',
        'img'=>'required',
        'historia'=>'required',
        'ubicacionText'=>'required',
        ];
    }
}
