@extends('master')

@section ('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
<div class="position-relative" >
<img id="banner" src="../fotos/Banner.png" alt="">

<h1 id="title" class=" position-absolute rounded-pill" > ELES PRECISÃO DE TI</h1>
</div>

<div class="vazio"></div>

<div class="conteiner">

<h2 id="title2"class="text-center">Já Adotados</h2>

</div>

<div class="vazio"></div>

 <div class=" container-fluid">

    <div class="row">
      
        <div class="  col-12 col-md-4 text-center">

        <img  class="imagens rounded-circle align-middle" src="fotos/cat.jpg" alt="">

        <p>ja foram adotados</p>

        <h3>36 Gatos</h3>

     

        </div>

        <div class="  col-12 col-md-4 text-center">

        <img  class="imagens rounded-circle align-middle" src="fotos/cao.jpg" alt="">
        
        <p>ja foram adotados</p>

        <h3>24 Cães</h3>
  
   
      

        </div>

        <div class="  col-12 col-md-4 text-center">

        <img  class="imagens rounded-circle align-middle" src="fotos/bird.jpg" alt="">
        
        <p>ja foram adotados</p>

        <h3>20 Aves</h3>

        

        </div>

    </div>

 </div>

 <div class="conteiner">
     
<h2 id="title2"class="text-center">Eventos</h2>

</div>

<div class="border border-dark container-fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">

      <div class=" d-block w-100 container-fluid">

    <div class="row">
      
        <div class="  col-12 col-md-6 ">

        

        <h3>Evento</h3>
        <p>venha conhecer um amigo</p>
        <p>09H - 13H | 12/11/2021 | Campus 2 Morro do Lena, 2411-901, Leiria  </p>
        <p>venha conhecer um amigo</p>
        <p>venha conhecer um amigo</p>

        

        </div>
        
        <div class="  col-12 col-md-6 text-center ">
        <img  class=" imagens-evento align-middle" src="fotos/cao.jpg" alt="">
        


        </div>

    </div>

 </div>

    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="fotos/cao.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="fotos/bird.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>

<div class="vazio"></div>

<div style=" height :2000px;"></div>
@endsection