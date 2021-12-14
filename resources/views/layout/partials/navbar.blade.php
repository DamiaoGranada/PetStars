

<nav class=" navbar navbar-expand-lg ">
  <a class=" navbar-brand" href="{{route('gm.Home')}}"><img id="navimg" src="img/Logotipo_Final.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><img id="navimg2" src="img/índice.png"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class=" navbar-nav row">
      <li class="col nav-item @if ($menuOption=='O') active @endif">
        <a class="nav-link" href="{{route('gm.contactos')}}">PetStars <span class="sr-only">(current)</span></a>
      </li>
      <li class="col nav-item @if ($menuOption=='B') active @endif">
        <a class="nav-link" href="{{route('gm.adocao')}}">Adoção</a>
      </li>
      <li class="col nav-item @if ($menuOption=='D') active @endif">
        <a class="nav-link" href="{{route('gm.faq')}}">Faqs</a>
      </li>
      <li class="col nav-item @if ($menuOption=='C') active @endif">
        <a class="nav-link" href="{{route('gm.apoios')}}">Apoios</a>
      </li>
      <li class="col nav-item ">
        <a class="nav-link" href="https://lojapetstars.g2.dwm22.space/2021/11/03/hello-world/">Loja</a>
      </li>
      <li class="col nav-item">
        <a class="nav-link" href="{{route('login')}}">Login</a>
      </li>

    </ul>
  </div>
</nav>
</div>
