<link href="{{asset('css/navbar.css')}}" rel="stylesheet">

<div class="logobar @if ($menuOption=='E') active @endif">
    <a href="{{route('gm.Home')}}"><img id="navimg" src="img/Logotipo_Final.png"></a>
</div>

<nav>
    <ul>
        <div class="navesq @if ($menuOption=='I') active @endif">
        <li><a href="#"> PetStars </a></li>
        <li class="@if ($menuOption=='B') active @endif"><a href="{{route('gm.adocao')}}"> Adoção </a></li>
        <li><a href=""> Faqs </a></li>
        <li class="@if ($menuOption=='C') active @endif"><a href="{{route('gm.apoios')}}"> Apoios </a></li>
        <li><a href="#"> Loja </a></li>
        </div>
    </ul>
</nav>