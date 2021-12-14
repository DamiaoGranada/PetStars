
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação Apoios
        </div>
        <div class="card-body">
		
			<div>
				<img alt="Post image" src="{{asset('fotos/apoios/'.$apoio->caminho_apoio)}}">
			</div>

			<div><strong>Apoio:</strong> {{$apoio->nome_apoio}} </div>
			<div><strong>Descrição de Apoio:</strong> {{$apoio->descri_apoio}} </div>
		</div>
	</div>
</div>
@endsection

