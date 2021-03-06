<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
  
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'apelido' => ['required', 'string', 'max:25'],
            'localidade' => ['required', 'string', 'max:255'],
            'rua' => ['required', 'string', 'max:255'],
            'nif' => ['required', 'string', 'min:9', 'max:9'],
            'telefone' => ['required', 'string', 'min:9', 'max:9'],
            'cod_postal' => ['required', 'string', 'min:8', 'max:8'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:9', 'confirmed'],
            
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'apelido' => $data['apelido'],
            'localidade' => $data['localidade'],
            'rua' => $data['rua'],
            'nif' => $data['nif'],
            'role' => 'N',
            'telefone' => $data['telefone'],
            'cod_postal' => $data['cod_postal'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
    }
}
