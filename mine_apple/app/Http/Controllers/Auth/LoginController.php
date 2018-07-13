<?php

namespace mine_apple\Http\Controllers\Auth;

use mine_apple\Consumidor;
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
        if($achaUsuario){
            Auth::loginUsingId($achaUsuario->id);
            DD("Usuário id:".$user->id." Consumidor(achado) id:".$achaUsuario->id
                ."\nId recebido da sessão:".Auth::user()->id);

            return view('index')->with("Conta acessada");
        }else{
            $usuario = User::create([
                'email' => $user->email,
                'password' => Hash::make("mpiansesawpoprlde"),
            ]);
            $vetor = explode(" ", $user->name);
            $sobrenome = "";

            $costumer = new Consumidor();
            $costumer->nome = $vetor[0];
            $costumer->sobrenome = $sobrenome;
            $costumer->usuario_id = $usuario->id;
            $costumer->cpf = "";
            $costumer->sexo = 'm';

            $costumer->acesso = 1;
            $costumer->save();
            //Auth::login($costumer);

            $consumidor_endereco = new ConsumidorEndereco;
            $endereco = new Endereco();
            $endereco->rua = "";
            $endereco->numero = 0;
            $endereco->complemento = "";
            $endereco->bairro = "";
            $endereco->numero_cep = "";
            $endereco->cidade_id = 5269;
            $endereco->save();

            $consumidor_endereco->endereco_id = $endereco->id;
            $consumidor_endereco->consumidor_id = $usuario->id;
            $consumidor_endereco->save();

            $nomes = 1;
            //while()
            for(; $nomes<count($vetor);$nomes++){
                $sobrenome = $vetor[$nomes];
            }




            $cartao = new Cartao;
            $cartao->consumidor_id = $usuario->id;
            $cartao->numero = "";
            $cartao->titular = "";
            $cartao->validade = "";
            $cartao->codigo = "";


            $cartao->save();

//            DD("Usuário id:".$user->id." Consumidor id:".$costumer->id
//            ."\nId recebido da sessão:".Auth::user()->id);
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

        $achaUsuario = User::where('email', $user->email)->first();
        if($achaUsuario){
            Auth::loginUsingId($achaUsuario->id);
            DD("Usuário id:".$user->id." Consumidor(achado) id:".$achaUsuario->id
                ."\nId recebido da sessão:".Auth::user()->id);

            return view('index')->with("Conta acessada");
        }else{
            $usuario = User::create([
                'email' => $user->email,
                'password' => Hash::make("mpiansesawpoprlde"),
            ]);
            $vetor = explode(" ", $user->name);
            $sobrenome = "";

            $costumer = new Consumidor();
            $costumer->nome = $vetor[0];
            $costumer->sobrenome = $sobrenome;
            $costumer->usuario_id = $usuario->id;
            $costumer->cpf = "";
            $costumer->sexo = 'm';

            $costumer->acesso = 1;
            $costumer->save();
            //Auth::login($costumer);

            $consumidor_endereco = new ConsumidorEndereco;
            $endereco = new Endereco();
            $endereco->rua = "";
            $endereco->numero = 0;
            $endereco->complemento = "";
            $endereco->bairro = "";
            $endereco->numero_cep = "";
            $endereco->cidade_id = 5269;
            $endereco->save();

            $consumidor_endereco->endereco_id = $endereco->id;
            $consumidor_endereco->consumidor_id = $usuario->id;
            $consumidor_endereco->save();

            $nomes = 1;
            //while()
            for(; $nomes<count($vetor);$nomes++){
                $sobrenome = $vetor[$nomes];
            }




            $cartao = new Cartao;
            $cartao->consumidor_id = $usuario->id;
            $cartao->numero = "";
            $cartao->titular = "";
            $cartao->validade = "";
            $cartao->codigo = "";


            $cartao->save();

//            DD("Usuário id:".$user->id." Consumidor id:".$costumer->id
//            ."\nId recebido da sessão:".Auth::user()->id);
            return view('index')->with('Cadastro realizado!');
        }

        // $user->token;
    }
}
