<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mine_apple\Estado;
use mine_apple\Cidade;
use mine_apple\Cartao;
use mine_apple\ConsumidorEndereco;
use mine_apple\Conta;
use mine_apple\Endereco;
use mine_apple\Consumidor;
use mine_apple\Produto;
use mine_apple\Produtor;
use mine_apple\Embalagem;


class ConsumidorController extends Controller
{
    //Métodos para manipular as views visíveis somente para consumidores

    /**
     * @author O nome do desenvolvedor
     * @param Request $request
     * @return string
     */
    public function exemplo(Request $request) {
        return Auth::user()->email . ' é consumidor';
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
    public function cadastrarConsumidor(Request $request) {

        //dd($request->all());
        $consumidor = new Consumidor;
        $consumidor->usuario_id = Auth::user()->id;
        $consumidor->nome = $request->nome;
        $consumidor->sobrenome = $request->sobrenome;
        $consumidor->sexo = $request->sexo;
        $consumidor->cpf = $request->cpf;
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

        Cart::add($request->id, $request->nome, $request->quantidade, $request->preco);
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
    public function getPesquisaTodosProdutos(){
        
        $produtos = Produto::all();
        $produtores = Produtor::all();
        $embalagens = Embalagem::all();
        return view('pesquisa_de_produtos', compact('produtos', 'produtores', 'embalagem'));
    }

    /**
     * @author Lucas Alves
     * @return string
     */
    public function getCarrinhoCompras(){

        $itens = Cart::content();
        $subtotal = Cart::total();
        return view('carrinho_de_compras', compact(('itens', 'subtotal')))
    }

    /**
     * @author Lucas Alves
     * @param Request $request
     * @return string
     */
    public function finalizaCompra(Request $request){

    }

    /**
     * @author Lucas Alves
     * @param $categoria - categoria que será pesquisada
     * @return string
     */
    public function getPesquisaCategoriasProdutos($categoria){
        $produtos = null;
        $produtores = null;
        $embalagens = null;
        if ($categoria = 0)
            $produtos = Produto::all();
        else
            $produtos = Produto::where('id', $categoria)->get();

        $produtores = Produtor::all();
        $embalagens = Embalagem::all();

        return view('pesquisa_de_produtos', compact('produtos', 'produtores', 'embalagem'));
    }                         
    /**
     * @author Edcarlos
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
}
