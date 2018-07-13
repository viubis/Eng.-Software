<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mine_apple\Estado;
use mine_apple\Cidade;
use mine_apple\Cartao;
use mine_apple\ConsumidorEndereco;
use mine_apple\Conta;
use mine_apple\Compra;
use mine_apple\Endereco;
use mine_apple\Consumidor;
use mine_apple\Produto;
use mine_apple\Produtor;
use mine_apple\Embalagem;
use mine_apple\Foto;
use Gloudemans\Shoppingcart\Facades\Cart;
use Carbon\Carbon;
use mine_apple\Http\Requests\FormConsumidor;


class ConsumidorController extends Controller
{
    //Métodos para manipular as views visíveis somente para consumidores

    /*public function _construct(){
        $this->middleware(middleware:'auth.consumidor')
    }*/
    /**
     * @author O nome do desenvolvedor
     * @param Request $request
     * @return string
     */
    public function exemplo(Request $request) {
        return Auth::user()->email . ' é consumidor';
    }

    /**
     * @author Rafael Brito
     * @return string
     */
    public function index(){
        return view('index');
    }

    /**
     * @author Lucas Alves
     * @return string
     */

    public function getForm(){
        $estados = Estado::all(['id', 'nome']);
        return view('cadastro_de_consumidor',compact('estados'));

    }

    /**
     * @author Rafael Brito
     * @param Request $request
     * @return string
     */
    public function cadastrarConsumidor(FormConsumidor $request) {

        //dd($request->all());
        $consumidor = new Consumidor;
        $consumidor->usuario_id = Auth::user()->id;
        $consumidor->nome = $request->nome;
        $consumidor->sobrenome = $request->sobrenome;
        $consumidor->sexo = $request->sexo;
        $consumidor->cpf = $request->cpf;
        $consumidor->telefone = $request->telefone;
        $consumidor->acesso = 1;



        //$this->adicionarCartao($request);
        //$this->cadastrarEndereco($request);

        $consumidor_endereco = new ConsumidorEndereco;
        $endereco = new Endereco();
        $endereco->rua = $request->rua;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->numero_cep = $request->cep;
        $endereco->cidade_id = $request->cidade;
        $endereco->save();

        $consumidor->save();

        $consumidor_endereco->endereco_id = $endereco->id;
        $consumidor_endereco->consumidor_id = Auth::user()->id;

        $cartao = new Cartao;
        $cartao->consumidor_id = Auth::user()->id;
        $cartao->numero = $request->numero_cartao;
        $cartao->titular = $request->titular;
        $cartao->validade = $request->validade;
        $cartao->codigo = $request->codigo;




        $consumidor_endereco->save();

        $cartao->save();

        return redirect()->route('consumidor');

    }

    /**
     * @author Rafael Brito
     * @param Request $request
     * @return string
     */
    public function alterarConsumidor(Request $request) {
       $consumidor = Auth::user();//Recupera dados do usuário logado
       $consumidor->fill($request->all()->save());//Salva os dados

       /*return redirect()->route('alterar_consumidor', $consumidor->id)->with('info', 'Dados Alterados com sucesso');*/
   }

    /**
     * @author Lucas Alves
     * @param Request $request
     * @return string
     */
    public function adicionarCartao(Request $request) {

        $cartao = new Cartao();
        $cartao->consumidor_id = Auth::user()->id;
        $cartao->numero = $request->numero;
        $cartao->titular = $request->titular;
        $cartao->validade = $request->validade;
        $cartao->codigo = $request->codigo;
        $cartao->tipo = $request->tipo;

    }

    /**
     * @author Lucas Alves
     * @param Request $request
     * @return string
     */
    public function adicionarCarrinho(Request $request){
        if(is_null($request->quantidade)) {
            Cart::add($request->id, $request->nome, 1, $request->preco, ['embalagem' => $request->embalagem]);
        }
        else{
            Cart::add($request->id, $request->nome, $request->quantidade, $request->preco, ['embalagem' => $request->embalagem]);
        }
    }

    /**
     * @author Victória Oliveira
     * @param Request $request
     * @return string
     */
    public function removerDoCarrinho(Request $request){
        dd($request->all());
        Cart::remove($request->rowId);
    }

    /**
     * @author Lucas Alves
     * @return string
     */
    public function getCadastrarEndereco(){
        $estados = Estado::all(['id', 'nome']);
        return view('adicionar_endereco',compact('estados'));
    }

    /**
 * @author Felipe Braz
 * @website https://www.braz.pro.br/blog
 * @param int $cartao
 * @param int $cvc
 * @return array
 */
    function validaCartao(Request $request, $cvc=false){
       $cartao = preg_replace("/[^0-9]/", "", $cartao);
       if($cvc) $cvc = preg_replace("/[^0-9]/", "", $cvc);

       $cartoes = array(
        'Visa' => array('len' => array(13,16),    'cvc' => 3),
           'Mastercard' => array('len' => array(16),       'cvc' => 3),
           'Diners' => array('len' => array(14,16),    'cvc' => 3),
           'Elo' => array('len' => array(16),       'cvc' => 3),
           'Amex' => array('len' => array(15),       'cvc' => 4),
           'Discover' => array('len' => array(16),       'cvc' => 4),
           'Aura' => array('len' => array(16),       'cvc' => 3),
           'Jcb' => array('len' => array(16),       'cvc' => 3),
           'Hipercard'  => array('len' => array(13,16,19), 'cvc' => 3),
       );


       switch($cartao){
           case (bool) preg_match('/^(636368|438935|504175|451416|636297)/', $request->cartao) :
           $bandeira = 'elo'; 
           break;

           case (bool) preg_match('/^(606282)/', $request->cartao) :
           $bandeira = 'hipercard'; 
           break;

           case (bool) preg_match('/^(5067|4576|4011)/', $request->cartao) :
           $bandeira = 'elo'; 
           break;

           case (bool) preg_match('/^(3841)/', $request->cartao) :
           $bandeira = 'hipercard'; 
           break;

           case (bool) preg_match('/^(6011)/', $request->cartao) :
           $bandeira = 'discover'; 
           break;

           case (bool) preg_match('/^(622)/', $request->cartao) :
           $bandeira = 'discover'; 
           break;

           case (bool) preg_match('/^(301|305)/', $request->cartao) :
           $bandeira = 'diners'; 
           break;

           case (bool) preg_match('/^(34|37)/', $request->cartao) :
           $bandeira = 'amex'; 
           break;

           case (bool) preg_match('/^(36,38)/', $request->cartao) :
           $bandeira = 'diners'; 
           break;

           case (bool) preg_match('/^(64,65)/', $request->cartao) :
           $bandeira = 'discover'; 
           break;

           case (bool) preg_match('/^(50)/', $request->cartao) :
           $bandeira = 'aura'; 
           break;

           case (bool) preg_match('/^(35)/', $request->cartao) :
           $bandeira = 'jcb'; 
           break;

           case (bool) preg_match('/^(60)/', $request->cartao) :
           $bandeira = 'hipercard'; 
           break;

           case (bool) preg_match('/^(4)/', $request->cartao) :
           $bandeira = 'visa'; 
           break;

           case (bool) preg_match('/^(5)/', $request->cartao) :
           $bandeira = 'mastercard'; 
           break;
       }

       $dados_cartao = $cartoes[$bandeira];
       if(!is_array($dados_cartao)) return array(false, false, false);

       $valid     = true;
       $valid_cvc = false;

       if(!in_array(strlen($request->cartao), $dados_cartao['len'])) $valid = false;
       if($cvc AND strlen($cvc) <= $dados_cartao['cvc'] AND strlen($cvc) !=0) $valid_cvc = true;
       return array($bandeira, $valid, $valid_cvc);
   }

    /**
     * @author Lucas Alves
     * @return string
     */
    public function getRealizacaoAssinatura(){
        $itens = Cart::content();
        $embalagens = Embalagem::all();
        $produtos = Produto::all();
        $enderecos = Endereco::all();
        $cidades = Cidade::all();
        $estados = Estado::all();
        $fotos = Foto::all();
        //$cartoes = Cartao::all();
        $cartoes = Cartao::where('consumidor_id', '=', Auth::user()->id);
        $consumidor_enderecos = ConsumidorEndereco::all();
        return view('realizacao_de_assinatura', compact('itens', 'embalagens', 'produtos', 'enderecos', 'consumidor_enderecos', 'cidades', 'estados', 'fotos', 'cartoes'));

    }


    /**
     * @author Lucas Alves
     * @param Request $request
     * @return string
     */
    public function finalizaCompra(Request $request){
        //Pego o conteudo do carrinho
        $itens = Cart::content();
        $data = Carbon::now();

        //contador

        $assinatura = new Assinatura;

        foreach($itens as $item){
            $produto_assinatura = new Assinatura_Produto;
            $produto = Produto::where('id', '=', $item->id);
            $produto_assinatura->assinatura_id = $assinatura->id;
            $produto_assinatura->produto_id = $produto->id;
            $produto_assinatura->quantidade = $item->qty;
            $produto_assinatura->produto_id = $produto->id;
            $produto_assinatura->frequencia = $request->frequencia;
            $produto_assinatura->seg = $request->seg[$item->id];
            $produto_assinatura->ter = $request->ter[$item->id];
            $produto_assinatura->qua = $request->qua[$item->id];
            $produto_assinatura->qui = $request->qui[$item->id];
            $produto_assinatura->sex = $request->sex[$item->id];
            $produto_assinatura->sab = $request->sab[$item->id];
            $produto_assinatura->dom = $request->dom[$item->id];
            $produto_assinatura->save();
        }

        $compra = new Compra;
        $compra->consumidor_endereco_id = $request->id;
        $compra->valor = $subtotal = Cart::total();
        $compra->data = $data->toDateString();
        $compra->hora = $data->toTimeString();
        $compra->frete = 10;
        $compra->save();

    }


    /**
     * @author Lucas Alves
     * @return string
     */
    public function getAvaliacaoAssinatura(){
        $assinaturas = Assinatura::all();
        $produtores = Produtor::all();
        return view('avaliacao_assinatura', compact('assinaturas'));
    }



    /**
     * @author Lucas Alves
     * @param Request $request
     * @return string
     */
    public function cadastrarEndereco(Request $request) {
        $consumidor_endereco = new ConsumidorEndereco;
        $endereco = new Endereco;
        $endereco->rua = $request->rua;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->numero_cep = $request->cep;
        $endereco->cidade_id = $request->cidade;
        $endereco->save();

        $consumidor_endereco->endereco_id = $endereco->id;
        $consumidor_endereco->consumidor_id = Auth::user()->id;
    }

     public function getCarrinhoCompras(){

        //retorna todos os itens do carrinho
        $itens = Cart::content();
        //retorna o preço total
        $subtotal = Cart::total();
        return view('carrinho_de_compras', compact('itens', 'subtotal'));
    }

}
