<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function master(){
        return view ('master')->with('menuOption', 'I');
    }

    public function Home(){
        return view ('gm.Home')->with('menuOption', 'E');
    }

    public function apoios(){
        return view('gm.apoios')->with('menuOption', 'C');
    }

    public function adocao(){
        return view('gm.adocao')->with('menuOption', 'B');
    }

    public function faq(){
        return view('gm.faq')->with('menuOption', 'D');
    }

    public function contactos(){
        return view('gm.contactos')->with('menuOption', 'O');
    }

    public function login(){
        return view('login')->with('menuOption', 'L');
    }

    public function registar(){
        return view('register');
    }



}
