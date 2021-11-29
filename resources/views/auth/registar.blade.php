>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('css/registar1.css')}}">	
<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}"> 
<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
             <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<title>Registo</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="registar1.css">



</head>


<body>

		
		<div id="login">
        <img src="logo.png" alt="logo" id="logo">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
					<form action="inserir.php" method="post" class="form">
					<h3 class="text-center text-info" id="titulo">Registar</h3>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
									<label for="nome" class="text-info">Nome:</label><br>
			               			<input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Ex: Pedro" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
									<label for="nome" class="text-info">Apelido:</label><br>
			    					<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Ex: Silva" required>
			    					</div>
			    				</div>
			    			</div>
                            <div class="form-group">
								<label for="nome" class="text-info">Localidade:</label><br>
			    				<input type="text" name="localidade" id="localidade" class="form-control input-sm" placeholder="Ex: Lisboa" required>
                            </div>
							<div class="form-group">
									<label for="nome" class="text-info">Rua:</label><br>
			    				    <input type="text" name="rua" id="rua" class="form-control input-sm" placeholder="Ex: Rua das Montras" required>
                            </div>



							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
										<label for="nome" class="text-info">Nif:</label><br>
			    						<input type="text" name="nif" id="nif" class="form-control input-sm" placeholder="Ex:372819528"  required pattern="^\d{9}$">
										</div>
								</div>
                            	
								
								
							</div>
                            <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
										 <div class="form-group">
										 <label for="nome" class="text-info">Telefone:</label><br>
			    				<input type="number" name="telefone" id="telefone" class="form-control input-sm" placeholder="Ex: 914025167" required> 
			    			</div>

                                       
                                 </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
										<label for="nome" class="text-info">Codigo Postal:</label><br>
			    				        <input type="text" name="cod_postal" id="cod_postal" class="form-control input-sm" placeholder="Ex: 0000-000" required>
                                    </div>
                                </div>
                            
			    			</div>
 
                           
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
										<label for="nome" class="text-info">Email:</label><br>
			    						<input type="text" name="login" id="login" class="form-control input-sm" placeholder="petstars@petstars.pt" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
									<label for="nome" class="text-info">Password:</label><br>
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
			    					</div>
			    				</div>
			    			</div>






							<div class="row">
							<div class="form-group"  id="registar">
                               <br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Registar">
                            </div>

							<div class="form-group" id="apagar">
                               <br>
                                <input type="reset" name="reset" class="btn btn-info btn-md" value="Apagar">
							</div>
							<div class="Voltar" style="margin-left:46%;">
                               <br>
							   <button  type="button" onclick="location.href='loginprinc.php'">Voltar </button>
                            </div>
							</div>
							
			    			
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>