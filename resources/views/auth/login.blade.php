<html>

 
<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}"> 
<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
             <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<body class="cor">
    
<div id="login">
    <div>
    <a  href="{{route('gm.Home')}}">
        <img src="{{asset('img/logo.png')}}" alt="logo" id="logo"></div>
</a>
<div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
            <div id="login-box" class="col-md-12">
                <form id="login-form" class="form" action="{{ route('login') }}" method="post">
                @csrf
                    <h3 class="text-center texto">Login</h3>
                    <div class="form-group">
                            <label for="email" class="col-md-4 col-form-label text-mdT-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-mdT-right">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-light"  >
                                    {{ __('Login') }}
                                    
                                </button>
                                <button type="submit" class="btn btn-light"  >
                                    {{ __('Register') }}
                                    
                                </button>

                                
                            </div>

                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>

                        
                        
            </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>