@extends('master')

@section ('title')

Home

@endsection

@section ('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
<div class="position-relative" >
<img id="banner" src="../fotos/Banner.png" alt="">

<h1 id="title" class=" position-absolute rounded-pill" > ELES PRECISAM DE TI</h1>
</div>

<div class="vazio"></div>

<div class="conteiner">

<h2 class="text-center title2">Já Adotados</h2>

</div>

<div class="vazio"></div>

 <div class=" container-fluid">

    <div class="row">
      
        <div class="  col-4 text-center">

        <img  class="border border-dark imagens rounded-circle align-middle" src="fotos/cat.jpg" alt="">

        <p class=" texto ">ja foram adotados</p>

        <h3 class=" title3 ">36 Gatos</h3>

     

        </div>

        <div class="  col-4 text-center">

        <img  class="border border-dark imagens rounded-circle align-middle" src="fotos/cao.jpg" alt="">
        
        <p  class=" texto ">ja foram adotados</p>

        <h3 class=" title3 ">24 Cães</h3>
  
   
      

        </div>

        <div class="   col-4 text-center">

        <img  class="border border-dark imagens rounded-circle align-middle" src="fotos/bird.jpg" alt="">
        
        <p class=" texto ">ja foram adotados</p>

        <h3 class=" title3 ">20 Aves</h3>

        

        </div>

    </div>

 </div>

 <div class="vazio"></div>

 <div class="conteiner">
     
<h2 class="text-center title2">Eventos</h2>

</div>
<div class="vazio"></div>


<div class="border border-dark w-75 mx-auto bg-orange rounded">

 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">

  @foreach($evento as $eventos)

    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" @if($loop->first)  class="active" @endif ></li>

    @endforeach

  </ol>
  <div class="carousel-inner">

  @foreach($evento as $eventos)

  <div class="carousel-item @if ($loop->first) active @endif">
     <div class=" d-block w-100 container-fluid">

      <div class="row">

       <div class="  col-12 col-md-6 ">

        <h3  class=" title3 " >{{ $eventos->nome_evento }}</h3>
        <p class=" texto ">{{ $eventos->descri_evento }}</p>
        <p class=" texto ">{{ $eventos->data_evento }} | {{ $eventos->local_evento }}  </p>
        <p class=" texto ">{{ $eventos->tipo_evento }}</p>
     
       </div>
  
       <div class="  col-12 col-md-6 text-center ">
        <img  class=" imagens-evento align-middle" src="{{ asset($eventos->foto->first()->caminho) }}" alt="">
  
       </div>

      </div>

     </div>
  </div>
  @endforeach

 
</div>

</div>

</div>


<div class="vazio"></div>

@endsection