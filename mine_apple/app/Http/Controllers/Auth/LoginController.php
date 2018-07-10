<?php

namespace mine_apple\Http\Controllers\Auth;

use mine_apple\Consumidor;
use mine_apple\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use mine_apple\User;
use mine_apple\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Hash;
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
        if($achaUsuario){
            Auth::loginUsingId($achaUsuario->id);
            return view('index')->with("Conta acessada");
        }else{
            $usuario = User::create([
                'email' => $user->email,
                'password' => Hash::make("mpiansesawpoprlde"),
            ]);
            $vetor = explode(" ", $user->name);
            $sobrenome = "";

            $consumidor_endereco = new ConsumidorEndereco;
            $endereco = new Endereco();
            $endereco->rua = "";
            $endereco->numero = null;
            $endereco->complemento = "";
            $endereco->bairro = "";
            $endereco->numero_cep = "";
            $endereco->cidade_id = "";
            $endereco->save();

            for($i = 1; i<count($vetor);$i++){
                $sobrenome = $vetor[$i];
            }
            $costumer = new Consumidor();
            $costumer->nome = $vetor[0];
            $costumer->sobrenome = $sobrenome;
            $costumer->usuario_id = $usuario->id;
            if($user->gender == 'male'){
                $costumer->sexo = 'm';
            }else{
                $costumer->sexo = 'f';
            }
            $costumer->acesso = 1;
            $costumer->save();
            Auth::login($costumer);

            $consumidor_endereco->endereco_id = $endereco->id;
            $consumidor_endereco->consumidor_id = Auth::user()->id;

            $cartao = new Cartao;
            $cartao->consumidor_id = Auth::user()->id;
            $cartao->numero = "";
            $cartao->titular = "";
            $cartao->validade = "";
            $cartao->codigo = "";

            $consumidor_endereco->save();

            $cartao->save();
            return view('index')->with('Cadastro realizado!');
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

        //return $user->name;
        $achaUsuario = User::where('email', $user->email)->first();
        if($achaUsuario){
            Auth::login($user->email);
            return view('index')->with("Conta acessada");
        }else{
            $usuario = new User();
            $usuario->email = $user->email;
            $usuario->senha = "mpiansesawpoprlde";
            $user->save();

            $costumer = new Consumidor();
            $costumer->nome = $user->first_name;
            $costumer->sobrenome = $user->last_name;
            $costumer->usuario_id = Auth::user()->id;
            if($user->gender == 'male'){
                $costumer->sexo = 'm';
            }else{
                $costumer->sexo = 'f';
            }
            $costumer->acesso = 1;
            $costumer->save();
            Auth::login($costumer);
            return view('index')->with('Cadastro realizado!');
        }

        // $user->token;
    }
}
