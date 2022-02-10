
@extends('layout.admin')

@section('content')


<div class="container-fluid">

<div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação Comentarios
        </div>
		<div class="card-body">

 		<div><strong>Titulo:</strong>{{$faq->titulo}}</div>
 		<div><strong>Conteudo:</strong>{{$faq->conteudo}}</div>
</div>
</div>
</div>



@endsection
