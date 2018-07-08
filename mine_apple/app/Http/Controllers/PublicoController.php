<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mine_apple\Produto;
use mine_apple\Embalagem;
use mine_apple\Produtor;

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

    public function index() {
        return view('index');
    }

    public function getTipoCadastro(){
        return view('tipo_de_cadastro_a_realizar');
    }
    public function sobre(){
        return view('Sobre');
    }

    public function faleConosco(){
        return view('fale_conosco');
    }
    public function carrinho(){
        return view('Carrinho_de_compras');
    }

    public function getDetalhesProduto($id){
        $produto = Produto::where('id', '=', $id);
        $produtores = Produtor::all();
        $embalagens = Embalagem::all();
        return view('visualização_detalhada_produto', compact('produto', 'produtores', 'embalagem'));
    }
}
