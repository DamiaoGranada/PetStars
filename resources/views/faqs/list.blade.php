@extends('layout.admin')

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Faqs</h1>


     <div class="card shadow mb-4">
        
        <div class="card-body">

     
                
		
			<div class="row">
		
				<div class="col-md-10" style="border:1px solid #dee2e6;">
				   
					  
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						  <thead>
							<tr>
							  <th>Titulo</th>
							  <th>Contiudo</th>
							  <th>Mensagem</th>
							</tr>
						  </thead>
						  <tbody>
						  @foreach($faq as $faqs)
							<tr>
							
							   <td>{{$faqs->titulo}}</td>
 							   <td>{{$faqs->conteudo}}</td>
							  <td nowrap>
								<a class="btn btn-xs btn-primary btn-p" href="{{route('faq.show',$faqs)}}"><i class="fas fa-eye fa-xs"></i></a>
								<a class="btn btn-xs btn-warning btn-p" href="{{route('faq.edit',$faqs)}}"><i class="fas fa-pen fa-xs"></i></a>
								<form method="POST" action="{{route('faq.destroy',$faqs)}}" role="form" class="inline"
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
