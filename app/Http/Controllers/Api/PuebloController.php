<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoadPueblo;
use App\Http\Resources\OnePuebloResource;
use App\Http\Resources\PuebloResource;
use App\Models\Actividad;
use App\Models\Imagenes;
use App\Models\Pueblo;
use Illuminate\Http\Request;

class PuebloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  PuebloResource::collection(Pueblo::all())->additional(['msg'=>'tus pueblos'])->response()->setStatusCode(202);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoadPueblo $request)
    {
        Pueblo::create($request->all());
        return response()->json([
            'res'=>true
        ]);
    }
    public function storeI(Request $request)
    {
        $this->validate($request,[

            'pueblo_id'=>'required',
            'nombre'=>'required',
            'img'=>'required',
            'clave'=>'required',
        ]);
        if ($request->clave!=24680) {
            return response()->json([
                'res'=>false
            ]);
        }
        Imagenes::create([
            'pueblo_id'=>$request->pueblo_id,
            'nombre'=>$request->nombre,
            'img'=>$request->img,
        ]);
        return response()->json([
            'res'=>true
        ]);
    }
    public function storeA(Request $request)
    {
        $this->validate($request,[

            'pueblo_id'=>'required',
            'nombre'=>'required',
            'latitud'=>'required',
            'longitud'=>'required',
            'img'=>'required',
            'actividad'=>'required',
            'clave'=>'required',
        ]);
        if ($request->clave!=24680) {
            return response()->json([
                'res'=>false,
                'msg'=>'datos faltantes'
            ]);
        }
        Actividad::create([
            'pueblo_id'=> $request->pueblo_id,
            'nombre'=>    $request->nombre,
            'latitud'=>   $request->latitud,
            'longitud'=>  $request->longitud,
            'img'=>       $request->img,
            'actividad'=> $request->actividad,
        ]);
        return response()->json([
            'res'=>true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pueblo $pueblo)
    {
        //

       // return new OnePuebloResource($pueblo);
        return response()->json([
            'pueblo'=>new OnePuebloResource($pueblo),
            'imgs'=>$pueblo->imagenes,
            'act'=>$pueblo->actividades
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
