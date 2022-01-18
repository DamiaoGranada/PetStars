<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Eventos;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("eventos");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eventos= new Eventos();
        $eventos->nome_evento =$request->input('nome_evento');
        $eventos->descri_evento =$request->input('descri_evento');
        $eventos->data_evento =$request->input('data_evento');
        $eventos->local_evento =$request->input('local_evento');
        $eventos->tipo_evento =$request->input('tipo_evento');


        $eventos->save();
        return view('eventos')->with('eventos',$eventos);
    }

    public function display()
    {
        $evento = Eventos::all();
        return view('gm/Home')->with('evento',$evento)->with('menuOption', 'EE');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Eventos $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventos $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventos $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eventos $post)
    {
        //
    }
}
