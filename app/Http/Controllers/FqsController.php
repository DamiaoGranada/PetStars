<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if (count($request->all()) == 0) {
            $faq = Faq::all();
        } else {
            $faq->filled('id');
            $faq = Faq::query();
            if ($request->filled('titulo')) {
                $faq->where('titulo', 'like', '%' . $request->nome_animal . '%');
            }
            if ($request->filled('Conteudo1')) {
                $faq->where('Conteudo', 'like', '%' . $request->descricao_animal . '%');
            }
            if ($request->filled('Conteudo2')) {
                $faq->where('Conteudo', 'like', '%' . $request->descricao_animal . '%');
            }
            if ($request->filled('Conteudo3')) {
                $faq->where('Conteudo', 'like', '%' . $request->descricao_animal . '%');
            }
            if ($request->filled('Conteudo4')) {
                $faq->where('Conteudo', 'like', '%' . $request->descricao_animal . '%');
            }
            if ($request->filled('Conteudo5')) {
                $faq->where('Conteudo', 'like', '%' . $request->descricao_animal . '%');
            }
            if ($request->filled('Conteudo6')) {
                $faq->where('Conteudo', 'like', '%' . $request->descricao_animal . '%');
            }
            if ($request->filled('Conteudo7')) {
                $faq->where('Conteudo', 'like', '%' . $request->descricao_animal . '%');
            }
            if ($request->filled('Conteudo8')) {
                $faq->where('Conteudo', 'like', '%' . $request->descricao_animal . '%');
            }
            $faq=$faq->get();
        }
        return view('faq.list', compact('faq'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faqs = new Faq;
        return view('faq.add', compact('faq'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faqs= new Faq();
        $faqs->id =$request->input('id');
        $faqs->titulo =$request->input('titulo');
        $faqs->Conteudo =$request->input('Conteudo1');
        $faqs->Conteudo =$request->input('Conteudo2');
        $faqs->Conteudo =$request->input('Conteudo3');
        $faqs->Conteudo =$request->input('Conteudo4');
        $faqs->Conteudo =$request->input('Conteudo5');
        $faqs->Conteudo =$request->input('Conteudo6');
        $faqs->Conteudo =$request->input('Conteudo7');
        $faqs->Conteudo =$request->input('Conteudo8');

        $animal->save();
        return view('faq')->with('faq',$animal);
    }

    public function display()
    {
        $faq = Faq::all();
        return view('gm/faq')->with('faq',$faq)->with('menuOption', 'AJ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $post)
    {
        //
    }
}
