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
            <div class="col-md-4">
                <div class="cartao">
                    <div class="imgpatro_arcana">
                        <img src="fotos/apoios/acana.png" alt="Patrocinio">
                    </div>
                    <div class="nomepatro">
                        Acana
                    </div>
                    <div class="despatro">
                    A marca Acana está sob o patrocínio da Champions Petfoods, uma fabricante canadense premiada e de grande reputação. Fabrica ração biologicamente adequada com Ingredientes Regionais Frescos.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cartao">
                    <div class="imgpatro_pedigree">
                        <img src="fotos/apoios/pedigree.png" alt="Patrocinio">
                    </div>
                    <div class="nomepatro">
                        Pedrigree
                    </div>
                    <div class="despatro">
                    A Pedigree, através de seus alimentos e petiscos, assegura a certeza de que o “melhor amigo do homem” sempre esteja feliz, saudável e em plena forma.   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cartao">
                    <div class="imgpatro_royal">
                        <img src="fotos/apoios/royal.png" alt="Patrocinio">
                    </div>
                    <div class="nomepatro">
                        Royal Canin
                    </div>
                    <div class="despatro">
                    A Royal Canin foi fundada em 1968 por um médico veterinário com uma visão: melhorar a saúde dos gatos e dos cães através da nutrição. 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="espacamento"></div>

<div class="container">
    <div class="row">
            <div class="col-md-4">
                <div class="cartao">
                    <div class="imgpatro_purina">
                        <img src="fotos/apoios/purina.png" alt="Patrocinio">
                    </div>
                    <div class="nomepatro">
                        Purina
                    </div>
                    <div class="despatro">
                        A Purina, há mais de 125 anos, que ajudamos cães e gatos a usufruirem de vidas saudáveis e felizes. Alimentos nutritivos e 100% saudaveis.  
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cartao">
                    <div class="imgpatro_felix">
                        <img src="fotos/apoios/felix.png" alt="Patrocinio">
                    </div>
                    <div class="nomepatro">
                        Felix
                    </div>
                    <div class="despatro">
                    Comida húmida para gatos adultos Felix são receitas com tenros pedaços numa suculenta gelatina para uma deliciosa refeição a que o seu gato vai gostar.
                </div>
            </div>
        </div>
            <div class="col-md-4">
                <div class="cartao">
                    <div class="imgpatro_proplan">
                        <img src="fotos/apoios/proplan.png" alt="Patrocinio">
                    </div>
                    <div class="nomepatro">
                        ProPlan
                    </div>
                    <div class="despatro">
                        A Proplan apresenta a melhor ração de cão que existe no mercado. Com base vegetal a ração Proplan apresenta todos os nutrientes que o seu animo necessita dia-a-dia. 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="vazio"></div>
    
</body>
@endsection