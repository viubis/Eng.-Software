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
     * @author Lucas Alves
     * @return string
     */
    public function getRealizacaoAssinatura(){
        $itens = Cart::content();
        return view('realizacao_de_assinatura', compact('itens'));

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
        $i = 0;

        $assinatura = new Assinatura;

        foreach($itens as $item){
            $produto_assinatura = new Assinatura_Produto;
            $produto = Produto::where('id', '=', $item->id);
            $produto_assinatura->assinatura_id = $assinatura->id;
            $produto_assinatura->produto_id = $produto->id;
            $produto_assinatura->quantidade = $item->qty;
            $produto_assinatura->produto_id = $produto->id;
            $produto_assinatura->frequencia = $request->frequencia;
            $produto_assinatura->seg = $request->seg[$i];
            $produto_assinatura->ter = $request->ter[$i];
            $produto_assinatura->qua = $request->qua[$i];
            $produto_assinatura->qui = $request->qui[$i];
            $produto_assinatura->sex = $request->sex[$i];
            $produto_assinatura->sab = $request->sab[$i];
            $produto_assinatura->dom = $request->dom[$i];
            $produto_assinatura->save();
            $i++;
        }

        $compra = new Compra;
        $compra->consumidor_endereco_id = $request->id;
        $compra->valor = $subtotal = Cart::total();
        $compra->data = $data->
        $compra->hora =
        $compra->frete =
        $compra->save();

    }


    /**
     * @author Lucas Alves
     * @return string
     */
    public function getAvaliacaoAssinatura(){
        $assinaturas = Assinatura::all();
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
