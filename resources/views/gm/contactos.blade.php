@extends('master')

@section('title', 'Apoios')

@section('content')
<body>
<link rel="stylesheet" type="text/css" href="{{asset('css/contactos.css')}}">    
    <div class="container">

        <div class="espaco"></div>

        <video class="img1" controls>
            <source src="fotos/video.mp4" type="video/mp4">       
        </video>

        <div class="espaco"></div>

        <h1>Sobre Nós</h1>

        <div class="espaco"></div>


        <p class="p1">
            A nossa Instituição é uma associação de proteção animal dedicada aos nossos animais que facilita a adoção de todo o tipo de animais
            como cães, gatos e pássaros ou entregar os seus, em caso de necessidades e falta de condições para manter o animal.
            <ul>
                <li>Instituição com fundos não lucrativos;</li>

                <li>Dar conhecimento ao publico;</li>

                <li>Divulgação de servicos para animais;</li>

                <li>Loja para angariação de fundos;</li>
            </ul>
        </p>

        <br><div id="air"></div>


        <h1>Missão e Valores </h1>

        <div class="espaco"></div>

        <p class="p1">
            Providenciar aos poderes nacionais e locais, instituições e comunidades os conhecimentos, os recursos, a capacidade e o desejo para melhorar o bem-estar animal e garantir que as suas necessidades são activamente supridas.

            <ul>
                <li>
                    Solidariedade
                </li>
                <li>
                    Compaixão
                </li>
                <li>
                    Consciencialização
                </li>
                <li>
                    Paixão
                </li>
                <li>
                    Respeito
                </li>
                <li>
                    Transparência
                </li>
                <li>
                    Proximidade
                </li>
                <li>
                    Dedicação
                </li>
                <li>
                    Sensibilização
                </li>
                <li>Partilha</li>

            </ul>
        </p>
        <br><div id="air"></div>

        <h1>Equipa</h1>

        <div class="espaco"></div>

        <div class="row">
            <div class="col-md-4">
                <div class="cartao">
                    <div class="equipa1">
                        <img src="fotos/contactos/diogo.jpg" alt="imgpessoa" id="imgcara">
                    </div>
                    <div class="nome">
                        Diogo Ferreira
                    </div>
                    <div class="despatro">
                        Elemento Super importante que organiza design grafico do website e é a fonte de imaginação e ideias da equipa, exelente a escolher cores e resolver problemas das mesmas, alem disso é Nadador-Salvador e Surfista. 
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cartao">
                    <div class="equipa2">
                        <img src="fotos/contactos/joao.png" alt="imgpessoa" id="imgcara">
                    </div>
                    <div class="nome">
                        Joao Domingos
                    </div>
                    <div class="despatro">
                        Elemento mais importante do grupo, mantem a organização dos documentos e ficheiros, bom na implementação da BD, é tambem um bocado chato , tem atitutes de uma pessoa de idade e é teimoso e tem cabelos brancos.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cartao">
                    <div class="equipa3">
                        <img src="fotos/contactos/mario.jpg" alt="imgpessoa" id="imgcara">
                    </div>
                    <div class="nome">
                        Mario Jorge
                    </div>
                    <div class="despatro">
                        Elemento consistente com bases e conhecimentos gerais de toda a informatica. Exelente a resolver problemas tecnicos e de login.
                    </div>
                </div>
            </div>
            <div class="col-sm-4 offset-sm-2">
                <div class="cartao">
                    <div class="equipa4">
                        <img src="fotos/contactos/cata.jpg" alt="imgpessoa" id="imgcara">
                    </div>
                    <div class="nome">
                        Catarina Veloso
                    </div>
                    <div class="despatro">
                        Moral e vos da equipa, boa no trabalho de design e imagem.
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="cartao">
                    <div class="equipa5">
                        <img src="fotos/contactos/lagarto.jpg" alt="imgpessoa" id="imgcara">
                    </div>
                    <div class="nome">
                        Damiao Granada
                    </div>
                    <div class="despatro">
                        Elemento que trabalha bem nos codigos e ligações do website e ficheiros.
                    </div>
                </div>
            </div>
        </div>


        <div id="air"></div>
        <h1>Contactos</h1>
        <div class="espaco"></div>

        <div class="row">
            <div class="col-sm-6">
                <div class="espaco"></div>

                <p class="p1">
                    Nosso Contacto : 000 000 000
                    <br>
                    <br>
                    Nosso Email : petstars@gmail.com
                </p>
            </div>
            <div class="col-sm-6">

                <img class="img3" src="fotos/contactos/cao3.png">
            </div>
        </div>

        <div class="espaco"></div>


        <form method="POST" action="{{route('contactos.store')}}" class="form-group" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
                <label class="p1" for="exampleFormControlInput1">Nome::</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nome_comentario" placeholder="nome">
         </div>

         <div class="form-group">
                <label class="p1" for="exampleFormControlInput1">Email:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email_comentario"  placeholder="nome@exemplo.com">
         </div>

         <div class="form-group">
                <label class="p1" for="exampleFormControlTextarea1">Comentario:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensagem" placeholder="Deixe aqui o seu comentario"></textarea>
         </div>

         <p id="p2">
                    *É necessario fazer login para realizar um comentario.
        </p>

         <div class="form-group">
                <br>
                <input type="submit" name="submit" class="btn btn-info btn-md"  href="{{route('contactos.index')}}" value="Enviar">
          </div>
        </form>

    </div>


    <div class="espaco"></div>


</body>

@endsection
