@extends('master')

@section('title', 'Apoios')

@section('content')

<?php
    $host="localhost" ;
    $user= "root";
    $pass= "";
    $database= "petstars";

    $conn = new mysqli($host, $user, $pass, $database);
    if ($conn->connect_errno) {$code = $conn->connect_errno;$message = $conn->connect_error;
        printf("<p>Connection error: %d %s</p>", $code, $message);}
       

        $sql = "select * FROM apoio";
        $resultado = $conn->query($sql);
    

        $nome = array();
        $descricao = array();
        $caminho = array();
        
    
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()) { 

                $nome[]=$row["nome_apoio"];
                $descricao[]=$row["descri_apoio"]; 
                $caminho[]=$row["caminho_apoio"];
                
            }
        } else {
            echo "0 results";
        }

       

        ?>

<body>
<link rel="stylesheet" type="text/css" href="{{asset('css/apoios.css')}}">    

<div class="vazio"></div>

<h1>Patrocinadores</h1>

<div class="vazio"></div>



        <?php

    for($x=0; $x < $resultado->num_rows; $x++){

        

        if (($x % 3)==0)
        {
      echo '<div class="container">
      <div class="row">';
      } 
    echo '<div class="col-md-4">
                <div class="cartao">
                    <div class="imgpatro_arcana">
                        <img src="'.$caminho[$x];echo'" alt="Patrocinio">
                    </div>
                    <div class="nomepatro">
                    '.$nome[$x];echo'
                    </div>
                    <div class="despatro">
                    '.$descricao[$x];echo'
                    </div>
                </div>
            </div>';

            if ((2-$x % 3)==0)
            {
          echo '</div></div>
          <div class="espacamento"></div> ';
          } 
         


    };
            ?>


</div>
    <div class="vazio"></div>
    
</body>
@endsection