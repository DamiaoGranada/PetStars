<?php

namespace App\Http\Controllers;
use App\Models\Apoios;

use Illuminate\Http\Request;

class ApoiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("apoio");
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
        $apoio= new Apoio();
        $apoio->nome_apoio =$request->input('nome_apoio');
        $apoio->descri_apoio =$request->input('descri_apoio');
        $apoio->caminho_apoio =$request->input('caminho_apoio');


        $apoio->save();
        return view('apoio')->with('apoio',$apoio);
    }

    public function display()
    {
        $apoios = Apoios::all();
        return view('gm/apoios')->with('apoios',$apoios)->with('menuOption', 'AD');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Apoios $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Apoios $post)
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
    public function update(Request $request, Apoios $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apoios $post)
    {
        //
    }
}
