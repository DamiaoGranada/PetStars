@extends('layout.admin')

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Apoios</h1>


     <div class="card shadow mb-4">
        <div class="card-header py-3">
			<a class="btn btn-primary" href="{{route('apoios.create')}}">
				<i class="fas fa-plus"></i> Adicionar Apoios
			</a>
        </div>
        <div class="card-body">
		@if (count($apoios))
		
			<div class="row">
				<div class="col-md-2" style="border:1px solid #dee2e6;">
					<form method="GET" action="{{route('apoios.index')}}" class="form-group">


						<div class="form-group">
							<label for="inputName">Id</label>
							<input type="text" class="form-control" name="id" id="inputName"
								value="{{request()->get('id')}}" />
						</div>
						<div class="form-group">
							<label for="inputEmail">Nome</label>
							<input type="text" class="form-control" name="nome_apoio" id="inputEmail" 
								value="{{request()->get('nome_apoio')}}" />
						</div>
						<div class="form-group">
							<label for="inputEmail">Descricão</label>
							<input type="text" class="form-control" name="descri_apoio" id="inputEmail" 
								value="{{request()->get('descri_apoio')}}" />
						</div>
						
					  
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
							  <th>Foto</th>
							  <th>ID</th>
							  <th>Nome</th>
							  <th>Descrição</th>
							  <th>Ações</th>
							</tr>
						  </thead>
						  <tbody>
						  @foreach($apoios as $apoio)
							<tr>
							  <td>
							  @if ($apoio->photo)
							  	
							  

							  @else
							  <img src="{{ $apoios->caminho_apoio->count() > 0 ? asset('/storage/apoios_fotos/' . $apoios->caminho_apoio->first()->caminho_apoio) : '/img/no-image.png' }}" class="img-post" alt="apoios photo">
 							  @endif</td>
							   <td>{{$apoio->id}}</td>
 							   <td>{{$apoio->nome_apoio}}</td>
 							   <td>{{$apoio->descri_apoio}}</td>
							  <td nowrap>
								<a class="btn btn-xs btn-primary btn-p" href="{{route('apoios.show',$apoio)}}"><i class="fas fa-eye fa-xs"></i></a>
							  <a class="btn btn-xs btn-warning btn-p" href="{{route('apoios.edit',$apoio)}}"><i class="fas fa-pen fa-xs"></i></a>
								<form method="POST" action="{{route('apoios.destroy',$apoio)}}" role="form" class="inline"
								onsubmit="return confirm('Tem a certeza que pretende remover este apoio?');">
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