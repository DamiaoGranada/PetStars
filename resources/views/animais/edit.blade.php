@extends('layout.admin')

@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Edit User
		</div>
		<div class="card-body">

			<form method="POST" action="{{route('adocao.update',$animal)}}" class="form-group" enctype="multipart/form-data">
				@csrf
				@method("PUT")
				@include('animais.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Save</button>

					<a href="#" class="btn btn-default">Cancel</a>

				</div>

			</form>

			
		</div>
	</div>
</div>


@endsection