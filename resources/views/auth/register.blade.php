
<html>
<head>
	<title>Registo</title>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/registar1.css')}}">
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


</head>


<body>


		<div id="login">
            <img src="{{asset('img/logo.png')}}" alt="logo" id="logo"></div>
        <div class="container">
          
        @dump($errors)


        <form action="{{route('register')}}" method="post" class="form">

            @csrf
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

					<h3 class="text-center text-info" id="titulo">Registar</h3>
                    <div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">

									<label for="name" class="text-info">Nome:</label><br>

			               			<input type="text" name="name" id="first_name" class="form-control input-sm @error('name') is-valid @enderror" value="{{old('name')}}" required autocomplete="name" autofocus placeholder="Insira o primeiro nome">

                                       @error("name")

                                        <span class="text-danger" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                </div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
									<label for="apelido" class="text-info">Apelido:</label><br>
			    					<input type="text" name="apelido" id="last_name" class="form-control input-sm @error('apelido') is-valid @enderror" value="{{old('apelido')}}" required autocomplete="apelido" autofocus placeholder="Insira a Apelido">
                                    @error("apelido")

                                    <span class="text-danger" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
			    					</div>
			    				</div>
			    			</div>
                            <div class="form-group">
								<label for="localidade" class="text-info">Localidade:</label><br>
			    				<input type="text" name="localidade" id="localidade" class="form-control input-sm @error('localidade') is-valid @enderror" value="{{old('localidade')}}" required autocomplete="localidade" autofocus placeholder="Insira a sua localidade">
                                @error("localidade")

                                <span class="text-danger" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
							<div class="form-group">
									<label for="rua" class="text-info">Rua:</label><br>
			    				    <input type="text" name="rua" id="rua" class="form-control input-sm @error('rua') is-valid @enderror" value="{{old('rua')}}" required autocomplete="rua" autofocus placeholder="Insira a rua">
                                    @error("rua")

                                    <span class="text-danger" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                            </div>



							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
										<label for="nif" class="text-info">Nif:</label><br>
			    						<input type="text" name="nif" id="nif" class="form-control input-sm @error('nif') is-valid @enderror" value="{{old('nif')}}" required autocomplete="nif" autofocus placeholder="Insira o nif">
                                        @error("nif")

                                        <span class="text-danger" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
										</div>
								</div>



							</div>
                            <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
										 <div class="form-group">
										 <label for="telefone" class="text-info">Telefone:</label><br>
			    				<input type="number" name="telefone" id="telefone" class="form-control input-sm @error('telefone') is-valid @enderror" value="{{old('telefone')}}" required autocomplete="telefone" autofocus placeholder="Ex: Pedro">
                                @error("telefone")

                                <span class="text-danger" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
			    			</div>


                                 </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
										<label for="cod_postl" class="text-info">Codigo Postal:</label><br>
			    				        <input type="text" name="cod_postal" id="cod_postal" class="form-control input-sm @error('cod_postal') is-valid @enderror" value="{{old('cod_postal')}}" required autocomplete="cod_postal" autofocus placeholder="Ex: Pedro">
                                        @error("cod_postal")

                                        <span class="text-danger" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

			    			</div>


			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
										<label for="email" class="text-info">Email:</label><br>
			    						<input type="text" name="email" id="login" class="form-control input-sm @error('email') is-valid @enderror" value="{{old('email')}}" required autocomplete="email" autofocus placeholder="Ex: Pedro">
                                        @error("email")

                                        <span class="text-danger" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
			    					</div>
			    				</div>
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
									<label for="password" class="text-info">Password:</label><br>
			    						<input type="password" name="password" id="password" class="form-control input-sm @error('password') is-valid @enderror">
                                        @error("password")

                                        <span class="text-danger" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
			    					</div>
			    				</div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
									<label for="password_confirmation" class="text-info">Password:</label><br>
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm @error('password_confirmation') is-valid @enderror" >
                                       
			    					</div>
			    				</div>

                                
			    			</div>






							<div class="row">
							<div class="form-group"  id="register">
                               <br>
                                <input type="submit" name="register" class="btn btn-info btn-md" value="Registar">
                            </div>

							<div class="form-group" id="apagar">
                               <br>
                                <input type="reset" name="reset" class="btn btn-info btn-md" value="Apagar">
							</div>
							<div class="Voltar" style="margin-left:46%;">
                               <br>
							   <button onclick="window.location.href={{route('login')}}" class="btn btn-light">Voltar</button>
                            </div>
							</div>


                    </div>
                </div>
            </div>


        </div>
    </div>
</form>


</body>

</html>
