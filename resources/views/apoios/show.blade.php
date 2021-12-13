
@extends('layout.admin')

@section('content')


<link href="bootstrap.min.css" rel="stylesheet">
<script src="bootstrap.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<div class="container">

<div class="card-body">
 	@if ($apoio->apoio_caminho)
 	<div>
 	<img alt="Post image" src="{{asset('storage/users_photos/'.$user->photo)}}">
 	</div>
 	@endif
 	<div><strong>Apoio:</strong> {{$apoio->nome_apoio}} </div>
 	<div><strong>Descrição do Apoio:</strong> {{$apoio->descri_apoio}} </div>
</div>

</div>



@endsection