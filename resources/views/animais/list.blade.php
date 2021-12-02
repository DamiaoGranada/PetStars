@extends('layout.admin')

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Users</h1>


     <div class="card shadow mb-4">
        <div class="card-header py-3">
			<a class="btn btn-primary" href="{{route('users.create')}}">
				<i class="fas fa-plus"></i> Add User
			</a>
        </div>
        <div class="card-body">
		@if (count($users))
		
			<div class="row">
				<div class="col-md-2" style="border:1px solid #dee2e6;">
					<form method="GET" action="{{route('users.index')}}" class="form-group">


						<div class="form-group">
							<label for="inputName">Name</label>
							<input type="text" class="form-control" name="name" id="inputName"
								value="{{request()->get('name')}}" />
						</div>
						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email address"
								value="{{request()->get('email')}}" />
						</div>
						<label for="inputRole">Role</label>
						<select name="role" id="inputRole" class="form-control">
							<option value="">All</option>
							<option {{(request()->get('role')=='A')?"selected":""}} value="A">Admin</option>
							<option {{(request()->get('role')=='N')?"selected":""}} value="N">Normal</option>

						</select>
					  
						<br>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Search</button>
						</div>

					</form>
				</div>
				<div class="col-md-10" style="border:1px solid #dee2e6;">
				   
					  
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						  <thead>
							<tr>
							  <th>Photo</th>
							  <th>Name</th>
							  <th>Email</th>
							  <th>Role</th>
							  <th>Actions</th>
							</tr>
						  </thead>
						  <tbody>
						  @foreach($users as $user)
							<tr>
							  <td>
							  @if ($user->photo)
 
							  	<img src="{{asset('storage/users_photos/'.$user->photo)}}" class="img-post" alt="User photo">
							  @else
 								<img src="{{asset('img/default_user.jpg')}}" class="img-post" alt="User photo">
 							  @endif</td>
							   <td>{{$user->name}}</td>
 							   <td>{{$user->email}}</td>
 							   <td>{{$user->roleToStr()}}</td>
							  <td nowrap>
								<a class="btn btn-xs btn-primary btn-p" href="{{route('users.show',$user)}}"><i class="fas fa-eye fa-xs"></i></a>
							  <a class="btn btn-xs btn-warning btn-p" href="{{route('users.edit',$user)}}"><i class="fas fa-pen fa-xs"></i></a>
								<form method="POST" action="{{route('users.destroy',$user)}}" role="form" class="inline"
								onsubmit="return confirm('Are you sure you want to delete this record?');">
								@csrf
								@method('DELETE')

									<button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
								</form>
							  </td>
							</tr>
							<tr>
							  <td><img src="img\default_user.jpg" class="img-post" alt="User photo"></td>
							  <td>Joana Marques</td>
							  <td>joana.mar@gmail.com</td>
							  <td>Normal</td>
							  <td nowrap>
								<a class="btn btn-xs btn-primary btn-p" href="#"><i class="fas fa-eye fa-xs"></i></a>
							  <a class="btn btn-xs btn-warning btn-p" href="#"><i class="fas fa-pen fa-xs"></i></a>
								<form method="POST" action="#" role="form" class="inline">
									<button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
								</form>
							  </td>
							</tr>
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