
@extends('layout.admin')

@section('content')


<div class="container-fluid">

<div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação Comentarios
        </div>
		<div class="card-body">
        

 		<div><strong>Nome:</strong> {{$contacto->nome_comentario}} </div>
 		<div><strong>Email:</strong> {{$contacto->email_comentario}} </div>
		 <div><strong>Comentario:</strong> {{$contacto->mensagem}} </div>

</div>
</div>
</div>



@endsection
