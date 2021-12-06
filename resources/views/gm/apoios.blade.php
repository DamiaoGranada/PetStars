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
            <div class="col-md-4">
                <div class="cartao">
                    <div class="imgpatro_arcana">
                        <img src="{{ asset($apoio->first()->caminho_apoio) }}" alt="Patrocinio">
                    </div>
                    <div class="nomepatro">
                    {{ $apoio->nome_apoio }}
                    </div>
                    <div class="despatro">
                    A marca Acana está sob o patrocínio da Champions Petfoods, uma fabricante canadense premiada e de grande reputação. Fabrica ração biologicamente adequada com Ingredientes Regionais Frescos.
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