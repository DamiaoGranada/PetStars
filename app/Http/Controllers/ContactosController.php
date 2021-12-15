<?php

namespace App\Http\Controllers;

use App\Models\Contactos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
                if (count($request->all()) == 0) {
            $contactos = Contactos::all();
        } else {
            $contactos = Apoios::query();
            if ($request->filled('nome_mensagem')) {
                $contactos->where('nome_mensagem', 'like', '%' . $request->nome_mensagem . '%');
            }
            if ($request->filled('email_mensagem')) {
                $contactos->where('email_mensagem', 'like', '%' . $request->email_mensagem . '%');
            }
            if ($request->filled('mensagem')) {
                $contactos->where('mensagem', 'like', '%' . $request->mensagem . '%');
            }

       
            $contactos=$contactos->get();
        }
        return view('contact.receberbd', compact('contactos'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function show(Contactos $contactos)
    {
                return view('contact.show',compact("contactos"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactos $contactos)
    {
               return view('contact.edit', compact('contactos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contactos $contactos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contactos $contactos)
    {
        //
    }
}