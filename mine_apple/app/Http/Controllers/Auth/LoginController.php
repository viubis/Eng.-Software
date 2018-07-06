<?php

namespace mine_apple\Http\Controllers\Auth;

use mine_apple\Consumidor;
use mine_apple\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use mine_apple\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        //return $user->name;
        $achaUsuario = User::where('email', $user->email)->first();
        if($achaUsuario){
            Auth::login($user->email);
            return view('index')->with("Conta acessada");
        }else{
            $usuario = new User();
            $usuario->email = $user->email;
            $usuario->senha = null;
            $user->save();

            $costumer = new Consumidor();
            $costumer->nome = $user->first_name;
            $costumer->sobrenome = $user->last_name;
            $costumer->usuario_id = $usuario->id;
            $costumer->save();
            Auth::login($costumer);
            return view('index')->with('Cadastro realizado');
        }

        // $user->token;
    }

    //aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider1()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback1()
    {
        $user = Socialite::driver('google')->user();

        return $user->name;
//        $achaUsuario = User::where('email', $user->email)->first();
//        if($achaUsuario){
//            Auth::login($user->email);
//            return view('index')->with("Conta acessada");
//        }else{
//            $usuario = new User();
//            $usuario->email = $user->email;
//            $usuario->senha = null;
//            $user->save();
//
//            $costumer = new Consumidor();
//            $costumer->nome = $user->first_name;
//            $costumer->sobrenome = $user->last_name;
//            $costumer->usuario_id = $usuario->id;
//            $costumer->save();
//            Auth::login($costumer);
//            return view('index')->with('Cadastro realizado');
//        }

        // $user->token;
    }
}
