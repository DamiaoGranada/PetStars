
@extends('layout.admin')

@section('content')


<link href="bootstrap.min.css" rel="stylesheet">
<script src="bootstrap.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<div class="container">
<form>
	<div class="form-group">
	  <label for="exampleInputApoio1">Nome do Apoio</label>
	  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	</div>
		<div class="form-group">
			<label for="exampleFormControlTextarea1">Descrição do Apoio</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
		</div>
			<div class="form-group">
				<label for="exampleFormControlFile1">Foto do Apoio</label>
				<input type="file" class="form-control-file" id="exampleFormControlFile1">
			</div>
	<button type="submit" class="btn btn-primary ">Enviar</button>
  </form>
</div>



@endsection