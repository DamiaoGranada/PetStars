<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Animal;
use App\Models\Pessoas_animal;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAdocaoRequest;
use Illuminate\Support\Facades\Storage;

class AdocaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index(Request $request)
    {
        if (count($request->all()) == 0) {
            $animals = Animal::all();
        } else {
            $animals = Animal::query();
            if ($request->filled('nome_animal')) {
                $animals->where('nome_animal', 'like', '%' . $request->nome_animal . '%');
            }
            if ($request->filled('descricao_animal')) {
                $animals->where('descricao_animal', 'like', '%' . $request->descricao_animal . '%');
            }
            if ($request->filled('genero')) {
                $animals->where('genero', $request->genero);
            }
            $animals=$animals->get();
        }
        return view('adocao.list', compact('animals'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adocao = new animal;
        return view('adocao.add', compact('adocao'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adocao= new Animal();
        $adocao->nome_animal =$request->input('nome_animal');
        $adocao->descricao_animal =$request->input('descricao_animal');
        $adocao->data_acolhimento =$request->input('data_acolhimento');
        $adocao->idade_animal =$request->input('idade_animal');
        $adocao->especie =$request->input('especie');
        $adocao->genero =$request->input('genero');
        $adocao->local_animal =$request->input('local_animal');
        $adocao->save();

        $foto = new Foto();
        if ($request->hasFile('foto')) {
            $photo_path = $request->file('foto')->store('public/animais_fotos');
            $foto->caminho = basename($photo_path);
            }
       
        $foto->id_animal = $adocao->id;
        $foto->save();

        return redirect('/admin/adocao');
    }
    

    public function display()
    {
        $animals = Animal::all();
        return view('gm/adocao')->with('animals',$animals)->with('menuOption', 'AA');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal $adocao
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $adocao)
    {
        return view('adocao.show',compact("adocao"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal $adocao
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $adocao)
    {
        return view('adocao.edit', compact('adocao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal $adocao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdocaoRequest $request, Animal $adocao)
    {
        $fields = $request->validated();
        $adocao->fill($fields);
        $foto = new Foto;
        if ($request->hasFile('foto')) {
            $foto = Foto::where('id_animal', $adocao->id)->first();
            if( $foto->count() ) {
                Storage::disk('public')->delete('animais_fotos/' . $foto->caminho);
            }
            $photo_path = $request->file('foto')->store('/public/animais_fotos/');
            $foto->caminho = basename($photo_path);
            $foto->id_animal = $adocao->id;
            $foto->save();
        }
        $adocao->save();
        return redirect()->route('adocao.index')->with('success', 'Atualização feita!');
    }
                
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $adocao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $adocao)
    {
        Foto::where('id_animal', $adocao->id)->delete();
        $adocao->foto()->delete();
        //apagar na storage
        $adocao->delete();
        return redirect()->route('adocao.index')->with('success', 'Anuncio removido!');
    }
}
