<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FaqsCategoryRequest;

class FaqsControllers extends Controller
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
            $faq = Faq::query();
            if ($request->filled('titulo')) {
                $faq->where('titulo', 'like', '%' . $request->titulo . '%');
            }
            if ($request->filled('conteudo')) {
                $faq->where('conteudo', 'like', '%' . $request->conteudo . '%');
            }
            

            $faq->save();
            
        }
        return view('faqs.list', compact('faq'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faq = new Faq;
        return view('faqs.add', compact('faqs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faq= new Faq();
        $faq->id =$request->input('id');
        $faq->titulo =$request->input('titulo');
        $faq->Conteudo =$request->input('conteudo');

        $faqs->save();
        return view('faq')->with('faq',$faq);
    }

    public function display()
    {
        $faq= Faq::all();
        return view('gm/faq')->with('faq',$faq)->with('menuOption', 'JJ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        return view('faqs.show',compact("faq"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $post
     * @return \Illuminate\Http\Response
     */
    public function update(FaqsCategoryRequest $request, Faq $faq)
    {
        $fields = $request->validated();
        $faq->fill($fields);
        $faq->save();
        return redirect()->route('faq.index')->with('success', 'Atualização feita!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq.index')->with('success', 'Mensagem removida!');
    }
}