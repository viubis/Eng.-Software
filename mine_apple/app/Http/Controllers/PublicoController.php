<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mine_apple\Produto;
use mine_apple\Embalagem;
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
        return view('carrinho_de_compras');
    }

    public function getDetalhesProduto($id){
        $produto = Produto::where('id', '=', $id)->first();
        $produtor = Produtor::where('usuario_id', '=' ,$produto->produtor_id)->first();
        $categoria = Categoria::where('id', '=', $produto->categoria_id)->first();
        $endereco = Endereco::where('id', '=', $produtor->usuario_id)->first();
        $cidade = Cidade::where('id', '=', $endereco->cidade_id)->first();
        $estado = Estado::where('id', '=', $cidade->estado_id)->first();
        $embalagem = Embalagem::all();
        return view('visualização_detalhada_produto', compact('produto', 'produtor', 'embalagem', 'categoria', 'cidade', 'estado'));
    }
}
