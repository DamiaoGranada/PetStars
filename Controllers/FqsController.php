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
        
   
            $faqs = Faq::all();
        
        return view('gm.faq', compact('faqs'));

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
        $faqs->Conteudo =$request->input('conteudo');

        $faqs->save();
        return view('faq')->with('faq',$faqs);
    }

    public function display()
    {
        $faqs = Faq::all();
        return view('gm/faq')->with('faq',$faqs)->with('menuOption', 'AJ');
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
