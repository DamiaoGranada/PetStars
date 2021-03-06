<!doctype html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="João Domingos">
        <meta name="keyword" content="games,multimedia">
        <meta name="description" content="Landing Page">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
             <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}">

        <link href="{{asset('css/navbar.css')}}" rel="stylesheet">



            <title>
            @yield('title')

            </title>


            <script type="text/javascript">
			function abrir(){
				document.getElementById('popup').style.display = 'block';
			}
			function fechar(){
				document.getElementById('popup').style.display =  'none';
			}
		</script>
    </head>

<!--NAVBAR-->
<body>


@include('layout.partials.navbar')

<!--Começo do Body-->



@yield('content')




<!-- Footer-->
@include('layout.partials.footer')
</body>


</html>
