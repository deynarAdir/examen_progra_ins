<?php

namespace App\Http\Controllers;

use App\Encuesta;
use App\Respuesta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $r = Respuesta::all();
        return view('respuesta.listar',[
            'respuestas' => $r
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $e = Encuesta::all();
        return view('respuesta.crear',[
            'encuestas' => $e
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $r = new Respuesta;
        $r->texto = $request->texto;
        $r->voto = $request->voto;
        $r->id_enc = $request->id_enc;
        $r->save();
        return redirect()->to('respuesta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $r = Respuesta::find($id);
        $e = Encuesta::all();
        return view('respuesta.editar',[
            'respuesta' => $r,
            'encuestas' => $e
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
        $r = Respuesta::find($id);
        $r->texto = $request->texto;
        $r->voto = $request->voto;
        $r->id_enc = $request->id_enc;
        $r->save();
        return redirect()->to('respuesta');
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
