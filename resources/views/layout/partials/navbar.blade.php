

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

      @if (!Auth::guest())

      @auth

<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 {{ Auth::user()->name }}
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <form action="{{route('logout')}}" method="post" class="inline d-none" id="logout-form">
                 @csrf
               </form>
               <a class="dropdown-item" href="#" id="logout-link">Logout</a>
               <a class="dropdown-item" href="{{route('admin')}}" id="logout-link">
                 Backoffice</a>

                 {{--  @if(Auth::check() && Auth::user()->funcao == "admin")

               <a class="dropdown-item" href="{{route('admin')}}" id="logout-link">
                 Backoffice</a>
             </div>


         @endif     --}}
 
         @endauth
        
@else
<a class="nav-link" href="{{route('login')}}">Login</a>
@endif
        

      </li>



    </ul>
  </div>
</nav>

<script type="text/javascript">

$("#logout-link").click(function() {
            $("#logout-form").submit();
        });


</script>



</div>
