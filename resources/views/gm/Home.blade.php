@extends('master')

@section ('title')

Home

@endsection

@section ('content')
<?php
    $host="localhost" ;
    $user= "root";
    $pass= "";
    $database= "petstars";

    $conn = new mysqli($host, $user, $pass, $database);
    if ($conn->connect_errno) {$code = $conn->connect_errno;$message = $conn->connect_error;
        printf("<p>Connection error: %d %s</p>", $code, $message);}
        else{
          echo "correto";
        }

        $sql = "select * FROM eventos INNER JOIN foto on eventos.id=foto.id_eventos";
        $resultado = $conn->query($sql);
    
        $ide = array();
        $nome = array();
        $descricao = array();
        $data = array();
        $tipo = array();
        $localidade = array();
        $caminho = array();
        
    
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {
              $ide[]=$row["id"]; 
              $nome[]=$row["nome_evento"];
                $descricao[]=$row["descri_evento"]; 
                $data[]=$row["data_evento"]; 
                $tipo[]=$row["tipo_evento"];  
                $localidade[]=$row["local_evento"];
                $caminho[]=$row["caminho"];
                
            }
        } else {
            echo "0 results";
        }

       

        ?>

<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
<div class="position-relative" >
<img id="banner" src="../fotos/Banner.png" alt="">

<h1 id="title" class=" position-absolute rounded-pill" > ELES PRECISÃO DE TI</h1>
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
  <?php

  for($x=0; $x < $resultado->num_rows; $x++){

    if ($x == 0){
      $active ="active";
      }else{
        $active ="";
      };

    echo ' <li data-target="#carouselExampleIndicators" data-slide-to="'.$x; echo '" class="'.$active; echo'"></li> ';
  }
    ?>

  </ol>
  <div class="carousel-inner">
    <?php
    
            for($x=0; $x < $resultado->num_rows; $x++){
              if ($x == 0){
              $active ="active";
              }else{
                $active ="";
              };
 
              echo '<div class="carousel-item '.$active;echo '">

              <div class=" d-block w-100 container-fluid">
         
               <div class="row">
               
                 <div class="  col-12 col-md-6 ">
         
                 
         
                 <h3> '.$nome[$x]; echo '</h3>
                 <p>  '.$descricao[$x]; echo'</p>
                 <p> '.$data[$x]; echo'  </p>
                 <p> '.$tipo[$x]; echo'</p>
                 <p>'.$localidade[$x]; echo'</p>
         
                
            
                 </div>
                 
                 <div class="  col-12 col-md-6 text-center ">
                 <img  class=" imagens-evento align-middle" src="'.$caminho[$x];echo'" alt="">
                 
         
         
                 </div>
         
               </div>
         
              </div>
         
           </div>';
            }
    
            ?>
 

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

</div>


<div class="vazio"></div>

@endsection