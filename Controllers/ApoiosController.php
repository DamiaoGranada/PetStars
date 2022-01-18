<?php

namespace App\Http\Controllers;
use App\Models\Apoios;
use App\Http\Requests\ApoiosRequest;
use App\Http\Requests\UpdateApoiosRequest;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class ApoiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (count($request->all()) == 0) {
            $apoios = Apoios::all();
        } else {
            $apoios = Apoios::query();
            if ($request->filled('id')) {
                $apoios->where('id', 'like', '%' . $request->id . '%');
            }
            if ($request->filled('nome_apoio')) {
                $apoios->where('nome_apoio', 'like', '%' . $request->nome_apoio . '%');
            }
            if ($request->filled('descri_apoio')) {
                $apoios->where('descri_apoio', 'like', '%' . $request->descri_apoio . '%');
            }

            if ($request->filled('caminho_apoio')) {
                $apoios->where('caminho_apoio', 'like', '%' . $request->caminho_apoio . '%');
            }
            $apoios=$apoios->get();
        }
        return view('apoios.list', compact('apoios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apoio = new apoios;
        return view('apoios.add', compact('apoio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApoiosRequest $request)
    {
        $apoio= new Apoios();
        $apoio->nome_apoio =$request->input('nome_apoio');
        $apoio->descri_apoio =$request->input('descri_apoio');
        $apoio->caminho_apoio =$request->input('caminho_apoio');

        if ($request->hasFile('caminho_apoio')) {
            $photo_path = $request->file('caminho_apoio')->store('/public/apoios_fotos/');
            $apoio->caminho_apoio = basename($photo_path);
            }
       
         $apoio->save();

        return view('apoios.add',compact('apoio'));

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
    public function show(Apoios $apoio)
    {
        return view('apoios.show',compact("apoio"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Apoios $apoio)
    {
        return view('apoios.edit', compact('apoio'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApoiosRequest $request, Apoios $apoio)
    {
        $fields = $request->validated();
        $apoio->fill($fields);
        if ($request->hasFile('caminho_apoio')) {
            if (!empty($apoio->caminho_apoio)) {
                Storage::disk('public')->delete('/public/apoios_fotos/' . $apoio->caminho_apoio);
            }
            $photo_path = $request->file('caminho_apoio')->store('/public/apoios_fotos/');
            $apoio->caminho_apoio = basename($photo_path);
        }
        $apoio->save();
        return redirect()->route('apoios.index')->with('success', 'Atualização feita!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apoios $apoio)
    {
        $apoio->delete();
        return redirect()->route('apoios.index')->with('success', 'Apoio removido!');
    }
}
