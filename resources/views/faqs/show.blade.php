
@extends('layout.admin')

@section('content')


<div class="container-fluid">

<div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação Comentarios
        </div>
		<div class="card-body">

 		<div><strong>Titulo:</strong>{{$faqs->titulo}}</div>
 		<div><strong>Conteudo:</strong>{{$faqs->conteudo}}</div>
</div>
</div>
</div>



@endsection
