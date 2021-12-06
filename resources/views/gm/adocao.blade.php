
@extends('master')

@section('title', 'Apoios')

@section('content')


<body>
<link rel="stylesheet" type="text/css" href="{{asset('css/adocao.css')}}">    



<div class="position-relative" >
<img id="banner" src="{{ asset('fotos/fotocapa.jpg') }}" alt="">

<h1 id="title" class=" position-absolute rounded-pill" > ADOÇÃO DE ANIMAIS </h1>
</div>

    



<div class="vazio"></div>
<section class="container">
@foreach( $animals as $animal )
    <div class="img-container">
        <img src="{{ asset($animal->foto->first()->caminho) }}" alt="" id="blur" >
        <p >{{ $animal->nome_animal }} -  {{ $animal->idade_animal }} </p>
    </div>
@endforeach
    </section>
   





<div class="espacamento"></div>


</body>


<div class="vazio"></div>

<!-- Footer-->


</html>
@endsection