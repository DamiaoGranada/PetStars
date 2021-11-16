<!doctype html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="João Domingos">
        <meta name="keyword" content="games,multimedia">
        <meta name="description" content="Landing Page">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}">
        <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
         <link href="{{asset('css/navbar.css')}}" rel="stylesheet">

            <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
             <script src="{{asset('js/jquery/jquery-3.5.1.min.js')}}"></script>

            <title>
            @yield('title')
            Home
            </title>
    </head>

<!--NAVBAR-->
<body>
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">

@include('layout.partials.navbar')

<!--Começo do Body-->  



<div class="vazio"></div>

@yield('content')




<!-- Footer-->
@include('layout.partials.footer')
</body>


</html>