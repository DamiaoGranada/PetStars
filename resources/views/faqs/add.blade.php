@extends('layout.admin')


@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Adicionar nova mensagem
        </div>
        <div class="card-body">
		
		<form method="POST" action="{{route('faq.store')}}" class="form-group" enctype="multipart/form-data">
			@csrf
			@include('faqs.partials.add-edit')

			<div class="form-group">
				<button type="submit" class="btn btn-success" name="ok">Adicionar</button>
				<a href="{{route('faq.index.index')}}" class="btn btn-default">Cancelar</a>
			</div>
		</form>
		</div>
	</div>
</div>
@endsection


