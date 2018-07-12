<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mine_apple\Foto;
use mine_apple\Produto;
use mine_apple\Embalagem;
use Gloudemans\Shoppingcart\Facades\Cart;
use mine_apple\Produtor;
use mine_apple\Categoria;
use mine_apple\Endereco;
use mine_apple\Cidade;
use mine_apple\Estado;

class PublicoController extends Controller
{
    //Métodos para manipular as views públicas

    /**
     * @author O nome do desenvolvedor
     * @param Request $request
     * @return string
     */
    public function exemplo(Request $request) {
        return  'Você ...';
    }

    /**
     * @author Bruno Claudino
     * @return string
     */
    public function index() {
        return view('index');
    }

    /**
     * @author Bruno Claudino
     * @return string
     */
    public function getTipoCadastro(){
        return view('tipo_de_cadastro_a_realizar');
    }

    /**
     * @author Bruno Claudino
     * @return string
     */
    public function sobre(){
        return view('Sobre');
    }

    /**
     * @author Bruno Claudino
     * @return string
     */
    public function faleConosco(){
        return view('fale_conosco');
    }

    /**
     * @author Lucas Alves
     * @return string
     */
    public function getCarrinhoCompras(){

        //retorna todos os itens do carrinho
        $itens = Cart::content();
        //retorna o preço total
        $subtotal = Cart::total();
        return view('carrinho_de_compras', compact('itens', 'subtotal'));
    }


    /**
     * @author Lucas Alves
     * @param $categoria - categoria que será pesquisada
     * @return string
     */
    public function getPesquisaCategoriasProdutos($categoria){
        $produtos = Produto::where('categoria_id','=', $categoria)->get();
        $cat = Categoria::where('id', '=', $categoria)->first();
        $fotos = Foto::all();
        
        return view('pesquisa_de_produtos', compact('produtos', 'cat', 'fotos'));
    }

    /**
     * @author Lucas Alves
     * @return string
     */
    public function getPesquisaTodosProdutos(){

        $produtos = Produto::all();
        $produtores = Produtor::all();
        $embalagem = Embalagem::all();
        $fotos = Foto::all();
        return view('pesquisa_de_produtos', compact('produtos', 'produtores', 'embalagem', 'fotos'));
    }

    /**
     * @author Lucas Alves
     * @param $id - id referente ao produto
     * @return string
     */
    public function getDetalhesProduto($id){
        $produto = Produto::where('id', '=', $id)->first();
        $fotos = Foto::where('produto_id', '=', $id)->get();
        $produtor = Produtor::where('usuario_id', '=' ,$produto->produtor_id)->first();
        $categoria = Categoria::where('id', '=', $produto->categoria_id)->first();
        $endereco = Endereco::where('id', '=', $produtor->usuario_id)->first();
        $cidade = Cidade::where('id', '=', $endereco->cidade_id)->first();
        $estado = Estado::where('id', '=', $cidade->estado_id)->first();
        $embalagem = Embalagem::all();
        return view('visualização_detalhada_produto', compact('produto', 'produtor', 'embalagem', 'categoria', 'cidade', 'estado', 'fotos'));
    }
}
