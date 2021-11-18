@extends('master')

@section('title', 'Apoios')

@section('content')
<body>
<link rel="stylesheet" type="text/css" href="{{asset('css/contactos.css')}}">    

    <div class="container">

        <div class="espaco"></div>

        <img src="fotos/cao1.jpg" alt="img" class="img1">

        <div class="espaco"></div>

        <h1>Sobre Nós</h1>

        <div class="espaco"></div>


        <p class="p1">
            A nossa Instituição é uma associação de proteção animal dedicada aos nossos animais que facilita a adoção de todo o tipo de animais
            como cães, gatos e pássaros ou entregar os seus, em caso de necessidades e falta de condições para manter o animal.
            <ul class="ul1">
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

            <ul class="ul1">
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
                        <img src="fotos/cao2.jpg" alt="imgpessoa" id="imgcara">
                    </div>
                    <div class="nome">
                        Diogo Ferreira
                    </div>
                    <div class="despatro">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cartao">
                    <div class="equipa2">
                        <img src="fotos/cao2.jpg" alt="imgpessoa" id="imgcara">
                    </div>
                    <div class="nome">
                        Joao Domingos
                    </div>
                    <div class="despatro">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cartao">
                    <div class="equipa3">
                        <img src="fotos/cao2.jpg" alt="imgpessoa" id="imgcara">
                    </div>
                    <div class="nome">
                        Mario Jorge
                    </div>
                    <div class="despatro">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="cartao">
                    <div class="equipa4">
                        <img src="fotos/cao2.jpg" alt="imgpessoa" id="imgcara">
                    </div>
                    <div class="nome">
                        Catarina Veloso
                    </div>
                    <div class="despatro">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="cartao">
                    <div class="equipa5">
                        <img src="fotos/cao2.jpg" alt="imgpessoa" id="imgcara">
                    </div>
                    <div class="nome">
                        Damiao Granada
                    </div>
                    <div class="despatro">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
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

                <img class="img3" src="fotos/cao3.png">
            </div>
        </div>

        <div class="espaco"></div>


        <form>
            <div class="form-group">
                <label class="p1" for="exampleFormControlInput1">Email:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
            </div>

            <div class="form-group">
                <label  class="p1" for="exampleFormControlTextarea1">Comentario:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Deixe aqui o seu comentario"></textarea>
            </div>
        </form>

    </div>


    <div class="espaco"></div>


</body>

@endsection