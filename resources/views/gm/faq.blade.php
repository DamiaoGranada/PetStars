@extends('master')

@section('title', 'Perguntas Frequentes')

@section('content')
<body>
<link rel="stylesheet" href="{{asset('css/faq.css')}}">

 <!-- ======= F.A.Q ======= -->
 <section id="faq" class="faq">
        <div class="container">

            <div class="section-title">
                <h2>Perguntas Frequentes</h2>
                <br>
            </div>
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