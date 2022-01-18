@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação Do Animal
        </div>
        <div class="card-body">
		
			<div>
			<img src="{{ $adocao->foto->count() > 0 ? asset('/storage/animais_fotos/' . $adocao->foto->first()->caminho) : '/img/no-image.png' }}" class="img-post" alt="animal photo">
			</div>
			
			<div><strong>Nome:</strong>{{$adocao->nome_animal}}</div>
			<div><strong>Descrição:</strong>{{$adocao->descricao_animal}}</div>
			<div><strong>Data Acolhimento:</strong>{{$adocao->data_acolhimento}}</div>
			<div><strong>Idade:</strong>{{$adocao->idade_animal}}</div>
			<div><strong>Especie:</strong>{{$adocao->especie}}</div>
			<div><strong>Genero:</strong>{{$adocao->genero}}</div>
			<div><strong>Local:</strong>{{$adocao->local_animal}}</div>
		</div>
	</div>
</div>
@endsection



 							   
                                
                               
                             