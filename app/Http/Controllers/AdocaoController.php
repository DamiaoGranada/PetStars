<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Animal;
use App\Models\Pessoas_animal;
use Illuminate\Http\Request;

class AdocaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("animal");
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
        $animal= new Animal();
        $animal->nome_animal =$request->input('nome_animal');
        $animal->descricao_animal =$request->input('descricao_animal');
        $animal->data_acolhimento =$request->input('data_acolhimento');
        $animal->idade_animal =$request->input('idade_animal');
        $animal->especie =$request->input('especie');
        $animal->genero =$request->input('genero');
        $animal->local_animal =$request->input('local_animal');

        $animal->save();
        return view('animal')->with('animal',$animal);
    }

    public function display()
    {
        $animals = Animal::all();
        return view('gm/adocao')->with('animals',$animals)->with('menuOption', 'AA');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $post)
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
    public function update(Request $request, Animal $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $post)
    {
        //
    }
}
