
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Category Information
        </div>
        <div class="card-body">

			<div><strong>Name:</strong> {{$category->name}} </div>
			<div><strong>Description:</strong> {{$category->description}} < </div>
		</div>
	</div>
</div>
@endsection