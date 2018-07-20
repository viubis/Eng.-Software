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
    

    /**
     * Retorna a página principal
     * @author Bruno Claudino
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        return view('index');
    }

    /**
     * Retorna a página sobre
     * @author Bruno Claudino
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sobre(){
        return view('Sobre');
    }

    /**
     * Retorna a página fale conosco
     * @author Bruno Claudino
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function faleConosco(){
        return view('fale_conosco');
    }

    /**
     * Retorna a página carrinho com as informações relacionadas ao carrinho
     * @author Lucas Alves
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCarrinhoCompras(){

        //retorna todos os itens do carrinho
        $itens = Cart::content();
        //retorna o preço total
        $subtotal = Cart::total();
        return view('carrinho_de_compras', compact('itens', 'subtotal'));
    }


    /**
     * Retorna a pesquisa de produtos por categoria
     * @author Lucas Alves
     * @param int $categoria
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPesquisaCategoriasProdutos($categoria){
        $produtos = Produto::where('categoria_id','=', $categoria)->get();
        $cat = Categoria::where('id', '=', $categoria)->first();
        $fotos = Foto::all();

        return view('pesquisa_de_produtos', compact('produtos', 'cat', 'fotos'));
    }

    /**
     * Retorna a pesquisa de todos os produtos
     * @author Lucas Alves
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPesquisaTodosProdutos(){

        $produtos = Produto::all();
        $produtores = Produtor::all();
        $embalagem = Embalagem::all();
        $fotos = Foto::all();
        return view('pesquisa_de_produtos', compact('produtos', 'produtores', 'embalagem', 'fotos'));
    }

    /**
     * Retorna os detalhes referentes a um determinado produto
     * @author Lucas Alves
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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

    /**
     * Retorna a pesquisa de produtos por nome
     * @author Lucas Alves e Victória Gomes
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPesquisaCategoriasNome(Request $request){
        $busca = $request->busca;
        $produtos = Produto::where('nome', 'like', $busca.'%')->get();
        $produtores = Produtor::all();
        $embalagem = Embalagem::all();
        $fotos = Foto::all();
        return view('pesquisa_de_produtos', compact('produtos', 'produtores', 'embalagem', 'fotos', 'busca'));


    }



}
