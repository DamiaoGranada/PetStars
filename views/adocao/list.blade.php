@extends('layout.admin')

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">animals</h1>


     <div class="card shadow mb-4">
        <div class="card-header py-3">
			<a class="btn btn-primary" href="{{route('adocao.create')}}">
				<i class="fas fa-plus"></i> Add Animal
			</a>
        </div>
        <div class="card-body">
		@if (count($animals))

			<div class="row">
				<div class="col-md-2" style="border:1px solid #dee2e6;">
					<form method="GET" action="{{route('adocao.index')}}" class="form-group">


						<div class="form-group">
							<label for="inputName">Nome</label>
							<input type="text" class="form-control" name="nome_animal" id="inputName"
								value="{{request()->get('nome_animal')}}" />
						</div>
						<div class="form-group">
							<label for="inputdescricao_animal">Descricão</label>
							<input type="descricao_animal" class="form-control" name="descricao_animal" id="inputEmail"
								value="{{request()->get('descricao_animal')}}" />
						</div>
                        <div class="form-group">
							<label for="inputName">Data Acolhimento</label>
							<input type="text" class="form-control" name="data_acolhimento" id="inputName"
								value="{{request()->get('data_acolhimento')}}" />
						</div>
                        <div class="form-group">
							<label for="inputidade_animal">Idade</label>
							<input type="text" class="form-control" name="idade_animal" id="inputidade_animal"
								value="{{request()->get('idade_animal')}}" />
						</div>

                        <label for="inputRole">Especie</label>
						<select name="especie" id="inputRole" class="form-control">
							<option value="">Todos</option>
							<option {{(request()->get('role')=='G')?"selected":""}} value="G">Gato</option>
							<option {{(request()->get('role')=='C')?"selected":""}} value="C">Cao</option>

						</select>
						<label for="inputRole">Genero</label>
						<select name="genero" id="inputRole" class="form-control">
							<option value="">Todos</option>
							<option {{(request()->get('role')=='F')?"selected":""}} value="F">Femenino</option>
							<option {{(request()->get('role')=='M')?"selected":""}} value="M">Masculino</option>

						</select>

                        <label for="inputRole">Local</label>
						<select name="local_animal" id="inputRole" class="form-control">
							<option value="">Todos</option>
							<option {{(request()->get('role')=='L')?"selected":""}} value="L">Leiria</option>
                            <option {{(request()->get('role')=='P')?"selected":""}} value="P">Peniche</option>
						</select>



						<br>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Pesquisar</button>
						</div>

					</form>
				</div>
				<div class="col-md-10" style="border:1px solid #dee2e6;">


					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						  <thead>
							<tr>
							  <th>Photo</th>
							  <th>Nome</th>
							  <th>Descricão</th>
                              <th>Data Acolhimento</th>
                              <th>Idade</th>
                              <th>Especie</th>
							  <th>Genero</th>
                              <th>Local</th>
							  <th>Actions</th>
							</tr>
						  </thead>
						  <tbody>
						  @foreach($animals as $adocao)
							<tr>
							  <td>
							  @if ($adocao->photo)



							  @else
 								<img src="{{ $adocao->foto->count() > 0 ? asset('/storage/animais_fotos/' . $adocao->foto->first()->caminho) : '/img/no-image.png' }}" class="img-post" alt="adocao photo">
 							  @endif</td>
							   <td>{{$adocao->nome_animal}}</td>
 							   <td>{{$adocao->descricao_animal}}</td>
                                <td>{{$adocao->data_acolhimento}}</td>
                                <td>{{$adocao->idade_animal}}</td>
                                <td>{{$adocao->especie}}</td>
 							   <td>{{$adocao->genero}}</td>
                                <td>{{$adocao->local_animal}}</td>

							  <td nowrap>
								<a class="btn btn-xs btn-primary btn-p" href="{{route('adocao.show',$adocao)}}"><i class="fas fa-eye fa-xs"></i></a>
							  <a class="btn btn-xs btn-warning btn-p" href="{{route('adocao.edit',$adocao)}}"><i class="fas fa-pen fa-xs"></i></a>
								<form method="POST" action="{{route('adocao.destroy',$adocao)}}" role="form" class="inline"
								onsubmit="return confirm('Are you sure you want to delete this record?');">
								@csrf
								@method('DELETE')

									<button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
								</form>
							  </td>

							@endforeach
						  </tbody>

						</table>
					</div>


				</div>
			</div>
			@else
			<h6>No users registered</h6>
 			@endif
		</div>
	</div>
</div>

@endsection

@section("moreScripts")
<script>

$('#dataTable').dataTable( {
  destroy: true,
    "bFilter": false,
    "order": [[ 1, 'asc' ]],
	"columns": [
    { "orderable": false },
    null,
	null,
    null,
	{ "orderable": false }
  ]
} );

  </script>
@endsection
