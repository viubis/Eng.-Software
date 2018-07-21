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
use mine_apple\Log;
use mine_apple\Produto;
use mine_apple\Produtor;
use mine_apple\Embalagem;
use mine_apple\Foto;
use Gloudemans\Shoppingcart\Facades\Cart;
use Carbon\Carbon;
use mine_apple\Http\Requests\FormConsumidor;
use mine_apple\Assinatura;
use mine_apple\Assinatura_Produto;


class ConsumidorController extends Controller
{
    //Métodos para manipular as views visíveis somente para consumidores

    /**
     * @author Rafael Brito
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('index');
    }

    /**
     * @author Lucas Alves
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getForm(){
        $estados = Estado::all(['id', 'nome']);
        return view('cadastro_de_consumidor',compact('estados'));
    }

    /**
     * Cadastrar um consumidor
     *
     * @author Rafael Brito e Lucas Alves
     * @param FormConsumidor $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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

        $log = new Log;
        $log->usuario_id = Auth::user()->id;
        $log->operacao_id = 1;
        $log->data = $data->toDateString();
        $log->hora = $data->toTimeString();
        $log->save();

        return redirect()->route('consumidor');
    }

    /**
     * Altera dados do consumidor
     *
     * @author Rafael Brito
     * @param Request $request
     * @return string
     */
    public function alterarConsumidor(Request $request) {
       $consumidor = Auth::user();//Recupera dados do usuário logado
       $consumidor->fill($request->all()->save());//Salva os dados

       /*return redirect()->route('alterar_consumidor', $consumidor->id)->with('info', 'Dados Alterados com sucesso');*/

       $log = new Log;
       $log->usuario_id = Auth::user()->id;
       $log->operacao_id = 2;
       $log->data = $data->toDateString();
       $log->hora = $data->toTimeString();
       $log->save();
   }

    /**
     * Adiciona cartão
     *
     * @author Lucas Alves
     * @param Request $request
     *
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
     * @author Lucas Alves e Sesaque Oliveira
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adicionarCarrinho(Request $request) {
        $item = Cart::content()->firstWhere('id', $request->id);

        if(empty($item)) {
            $produto = Produto::find($request->id);
            Cart::add($request->id, $request->nome, 1, $request->preco,
                ['embalagem' => $request->embalagem, 'freteMax' => $produto->freteMax, 'produtor' => $produto->produtor_id]);
        } else
            Cart::update($item->rowId, $item->qty+1);

        return $this->getCarrinhoCompras();
    }

    /**
     * @author Victória Oliveira
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function removerDoCarrinho(Request $request) {
        $item = Cart::content()->firstWhere('id', $request->id);

        if(!empty($item))
            Cart::remove($item->rowId);

        return $this->getCarrinhoCompras();
    }

    /**
     * @author Lucas Alves
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCadastrarEndereco(){
        $estados = Estado::all(['id', 'nome']);
        return view('adicionar_endereco',compact('estados'));
    }

    /**
     * @author Felipe Braz
     * @website https://www.braz.pro.br/blog
     * @param Request $request
     * @param bool $cvc
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getRealizacaoAssinatura(){
        $itens = Cart::content();
        $embalagens = Embalagem::all();
        $produtos = Produto::all();
        $enderecos = Endereco::all();
        $cidades = Cidade::all();
        $estados = Estado::all();
        $fotos = Foto::all();
        $cartoes = Consumidor::find(Auth::user()->id)->cartoes;
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
        $idEnd = ConsumidorEndereco::where('endereco_id', '=', $request->idEndereco)->where('consumidor_id', '=', Auth::user()->id)->first();
        $compra = new Compra;
        $compra->consumidor_endereco_id = $idEnd->id;
        $compra->consumidor_id = Auth::user()->id;
        $compra->valor = $subtotal = Cart::total();
        $compra->data = $data->toDateString();
        $compra->hora = $data->toTimeString();
        $compra->frete = 10;
        $compra->save();

        foreach($itens as $item){
            $produto = Produto::where('id', '=', $item->id)->first(); //pegando id do produto e procurando ele
            $produtor = Produtor::where('usuario_id', '=', $produto->produtor_id)->first();
            $assinatura = Assinatura::where('produtor_id', '=', $produtor->usuario_id)->where('compra_id', '=', $compra->id)->first();
            if($assinatura==null){
                $assinatura = new Assinatura;
                $assinatura->compra_id = $compra->id;
                $assinatura->produtor_id = $produtor->usuario_id;
                $assinatura->valor = Cart::total();
                $assinatura->frete = 10;
                $assinatura->notaFiscal = 'ABC';
                $assinatura->status = 1;
                $assinatura->save();
            }
            $produto_assinatura = new Assinatura_Produto; //ok
            $produto_assinatura->assinatura_id = $assinatura->id; //setando id da assinatura atual
            $produto_assinatura->produto_id = $produto->id; //setando o id do produto
            $produto_assinatura->quantidade = $item->qty; //setando a quantidade da assinatura
            $produto_assinatura->frequencia = $request['freqProd'.$item->id]; //setando a frequencia p esse produto
            $produto_assinatura->seg = false; //
            $produto_assinatura->ter = false;
            $produto_assinatura->qua = false;
            $produto_assinatura->qui = false;
            $produto_assinatura->sex = false;
            $produto_assinatura->sab = false;
            $produto_assinatura->dom = false;
            foreach ($request['entrega'.$item->id] as $dia => $status) {
                $produto_assinatura[$dia] = true;
            }
            $produto_assinatura->save();
            Cart::remove($item->rowId);
        }

        $log = new Log;
        $log->usuario_id = Auth::user()->id;
        $log->operacao_id = 3;
        $log->data = $data->toDateString();
        $log->hora = $data->toTimeString();
        $log->save();
    }


    /**
     * Retorna a tela avaliação de assinaturas
     * @author Lucas Alves
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAvaliacaoAssinatura(){
        $assinaturas = Assinatura::all();
        $produtores = Produtor::all();
        return view('avaliacao_assinatura', compact('assinaturas'));
    }


    /**
     * Cadastra um novo endereço
     * @author Lucas Alves
     * @param Request $request
     *
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

    /**
     * Retorna o carrinho de compras, inicialmente sem contar o frete
     * @author Lucas Alves
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCarrinhoCompras(){
        return $this->carrinhoCompras(0);
    }

    /**
     * @author Sesaque Oliveira
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function carrinhoCompras($frete){
       $itens = Cart::content();
       $subtotal = 0;
       $total = 0;

       if(!empty($itens)) {
           $subtotal = Cart::subtotal();
           $total = $subtotal + $frete;
       }

       return view('carrinho_de_compras', compact('itens', 'subtotal', 'frete', 'total'));
    }

    /**
     * Atualiza o valor do frete de acordo com o cep digitado
     *
     * @author Sesaque Oliveira
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function atualizarCarrinho(Request $request) {
        if(Endereco::validarCep($request->cep) != null) {
            $itens = Cart::content();
            $produtores = [];
            $frete = 0;

            foreach($itens as $item) {
                $id = $item->options->produtor.' ';
                $freteMax = $item->options->freteMax;

                if(!key_exists($id, $produtores)) {
                    $produtores = array_merge($produtores, [$id => [$freteMax, 1]]);
                }else {
                    $produtores[$id][0] += $freteMax;
                    $produtores[$id][1]++;
                }
            }

            foreach($produtores as $id => $itens) {
                $produtor = Produtor::find(trim($id));
                $cepProdutor = $produtor->endereco->numero_cep;
                $raioEntrega = $produtor->raioEntrega;
                $freteMax = $itens[0] / $itens[1];
                $distancia = Endereco::calcularDistancia($request->cep, $cepProdutor);

                if($distancia > -1)
                    $frete += Produtor::frete($raioEntrega, $distancia, $freteMax);
                else
                    return ('Produto indisponível'); //teste
            }

            return $this->carrinhoCompras($frete);
        } else
            return ('Cep inválido'); //teste
    }

    /**
     * Retorna a tela minhas compras
     * @author Sesaque Oliveira
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function minhasCompras(){
        return view('minhas_compras');
    }
}
