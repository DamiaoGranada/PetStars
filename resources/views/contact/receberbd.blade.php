@extends('layout.admin')

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Comentarios</h1>


     <div class="card shadow mb-4">
        
        <div class="card-body">

     
                
		
			<div class="row">
		
				<div class="col-md-10" style="border:1px solid #dee2e6;">
				   
					  
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						  <thead>
							<tr>
							  <th>Email</th>
							  <th>Nome</th>
							  <th>Mensagem</th>
							</tr>
						  </thead>
						  <tbody>
						  @foreach($contactos as $contactos)
							<tr>
							
							   <td>{{$contactos->email_comentario}}</td>
 							   <td>{{$contactos->nome_comentario}}</td>
 							   <td>{{$contactos->mensagem}}</td>
							  <td nowrap>
								<a class="btn btn-xs btn-primary btn-p" href="{{route('contactos.show',$contactos)}}"><i class="fas fa-eye fa-xs"></i></a>
								<form method="POST" action="{{route('contactos.destroy',$contactos)}}" role="form" class="inline"
								onsubmit="return confirm('Tem a certeza que pretende remover este comentario ?');">
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
			
		</div>
	</div>
</div>

@endsection

