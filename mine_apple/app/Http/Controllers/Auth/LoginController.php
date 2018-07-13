<?php

namespace mine_apple\Http\Controllers\Auth;

use mine_apple\Consumidor;
use mine_apple\Estado;
use mine_apple\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use mine_apple\User;
use mine_apple\ConsumidorEndereco;
use mine_apple\Endereco;
use mine_apple\Cartao;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticable;
use mine_apple\Http\Requests\FormConsumidor;

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
    protected $redirectTo = '/';

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

        //return $user->first_name;
        $achaUsuario = User::where('email', $user->email)->first();
        if ($achaUsuario) {
            Auth::loginUsingId($achaUsuario->id);
            return view('index')->with("Conta acessada");
        } else {
            $usuario = User::create([
                'email' => $user->email,
                'password' => Hash::make("mpiansesawpoprlde"),
            ]);
            $achaUser = User::where('email', $usuario->email)->first();
            Auth::loginUsingId($achaUser->id);
            $vetor = explode(" ", $user->name);
            $nome = $vetor[0];
            for ($nomes = 1; $nomes < count($vetor); $nomes++) {
                $sobrenome = $vetor[$nomes];
            }
            $estados = Estado::all(['id', 'nome']);
            return view('cadastro_de_consumidor', compact('estados', 'nome', 'sobrenome', 'usuario'));

        }

        // $user->token;
    }

    //----- login do google ----

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

        $achaUsuario = User::where('email', $user->email)->first();
        if ($achaUsuario) {
            Auth::loginUsingId($achaUsuario->id);
            return view('index')->with("Conta acessada");
        } else {
            $usuario = User::create([
                'email' => $user->email,
                'password' => Hash::make("mpiansesawpoprlde"),
            ]);
            $achaUser = User::where('email', $usuario->email)->first();
            Auth::loginUsingId($achaUser->id);
            $vetor = explode(" ", $user->name);
            $nome = $vetor[0];
            for ($nomes = 1; $nomes < count($vetor); $nomes++) {
                $sobrenome = $vetor[$nomes];
            }
            $estados = Estado::all(['id', 'nome']);
            return view('cadastro_de_consumidor', compact('estados', 'nome', 'sobrenome', 'usuario'));

        }
    }
}
