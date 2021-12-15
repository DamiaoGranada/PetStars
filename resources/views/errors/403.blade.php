<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="{{asset('css/403.css')}}">
<div class="container error-container">
	<div class="row  d-flex align-items-center justify-content-center">
		<div class="col-md-12 text-center">
			<h1 class="big-text">Oops!</h1>
			<h2 class="small-text">404 - PAGE NOT FOUND</h2>

		</div>
		<div class="col-md-6  text-center">
			<p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>


			<form class="example" action="action_page.php">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search.." name="search">
					<button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
				</div>

			</form>
			 <h2 class="small-text">OR</h2>

			<a href="{{route('gm.Home')}}" class="button button-dark-blue iq-mt-15 text-center">GOTO HOME PAGE</a>

		</div>

	</div>


</div>

