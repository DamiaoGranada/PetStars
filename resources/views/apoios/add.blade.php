@extends('layout.admin')


@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Adicionar novo apoio
        </div>
        <div class="card-body">
		
		<form method="POST" action="{{route('apoios.store')}}" class="form-group" enctype="multipart/form-data">
			@csrf
			@include('apoios.partials.add-edit')

			<div class="form-group">
				<button type="submit" class="btn btn-success" name="ok">Adicionar</button>
				<a href="{{route('apoios.index')}}" class="btn btn-default">Cancelar</a>
			</div>
		</form>
		</div>
	</div>
</div>
@endsection


