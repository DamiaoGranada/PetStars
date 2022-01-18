@extends('master')

@section('title', 'Apoios')

@section('content')
<body>
<link rel="stylesheet" type="text/css" href="{{asset('css/apoios.css')}}">    

<div class="vazio"></div>

<h1>Patrocinadores</h1>

<div class="vazio"></div>


<div class="container">

    <div class="row">
    @foreach($apoios as $apoio)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="cartao">
                    <div class="imgpatro_arcana">
                    <img src="{{ asset('/storage/apoios_fotos/' . $apoio->caminho_apoio) }}" class="img-post" alt="apoios photo">
                    </div>
                    <div class="nomepatro">
                    {{ $apoio->nome_apoio }}
                    </div>
                    <div class="despatro">
                    {{ $apoio->descri_apoio }}
                    </div>
                    
                </div>
                <div class="vazio"></div>
            </div>
           
            @endforeach
    </div>

</div>


<div class="espacamento"></div>


    
    
</body>
@endsection