<link href="{{asset('css/navbar.css')}}" rel="stylesheet">



<nav>
    <ul>
    <li class="logo bar @if ($menuOption=='E') active @endif"> <a href="{{route('gm.Home')}}"><img id="navimg" src="img/Logotipo_Final.png"></a></li>
        <li class="@if ($menuOption=='O') active @endif"><a href="{{route('gm.contactos')}}"> PetStars </a></li>
        <li class="@if ($menuOption=='B') active @endif"><a href="{{route('gm.adocao')}}"> Adoção </a></li>
        <li class="@if ($menuOption=='D') active @endif"><a href="{{route('gm.faq')}}"> Faqs </a></li>
        <li class="@if ($menuOption=='C') active @endif"><a href="{{route('gm.apoios')}}"> Apoios </a></li>
        <li><a href="https://lojapetstars.g2.dwm22.space/2021/11/03/hello-world/"> Loja </a></li>
        <li><a href="{{route('login')}}"> Login </a></li>
        
    </ul>
</nav>