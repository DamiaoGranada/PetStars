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
            @foreach( $faqs as $faq )
            <ul class="faq-list">

               
                <li>
                    <div data-toggle="collapse" class="collapsed question" href="#faq1">{{$faq->titulo }} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                        {{$faq->conteudo }}
                    
    
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