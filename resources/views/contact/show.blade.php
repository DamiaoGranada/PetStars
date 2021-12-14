
@extends('layout.admin')

@section('content')


<div class="container">

<div class="card-body">

 	<div><strong>nome_mensagem:</strong> {{$contactos->nome_mensagem}} </div>
 	<div><strong>email_mensagem:</strong> {{$contactos->email_mensagem}} </div>
</div>

</div>



@endsection
