@extends('master')

@section('title', 'Perguntas Frequentes')

@section('content')
<body>
<link rel="stylesheet" href="{{asset('css/faq.css')}}">

<!-- ======= BANNER ======= -->

<div class="position-relative" >
<img id="banner" src="{{ asset('fotos/header-faq.jpg') }}" alt="">

<h1 id="title" class=" position-absolute rounded-pill" > Perguntas Frequentes</h1>
</div>
<!-- ======= END BANNER ======= -->

 <!-- ======= F.A.Q ======= -->
 <section id="faq" class="faq">
        <div class="container">

            
            @foreach( $faq as $faqs )
            <ul class="faq-list">

               
                <li>
                    <div data-toggle="collapse" class="collapsed question" href="#faq{{$faqs->id }}">{{$faqs->titulo }} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq{{$faqs->id }}" class="collapse" data-bs-parent=".faq-list">
                        <p>
                        {{$faqs->titulo}} - {{$faqs->conteudo}}
                    
    
                        </p>
                    </div>
                </li>
                

            </ul>
            @endforeach
        </div>
    </section>
    <!-- ======= END F.A.Q ======= -->

</body>

@endsection