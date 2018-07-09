<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mine_apple\Produtor;
use mine_apple\Consumidor;
use mine_apple\Usuario;
use mine_apple\Produto;
use mine_apple\ConsumidorEndereco;
use mine_apple\Endereco;
use mine_apple\Cidade;
use mine_apple\Estado;

class AdministradorController extends Controller
{
    //Métodos para manipular as views visíveis somente para administradores

    /**
     * @author O nome do desenvolvedor
     * @param Request $request
     * @return string
     */
    public function exemplo(Request $request) {
        return Auth::user()->email . ' é administrador';
    }

    public function getGerenciamentoConsumidores(){
    	$consumidores = Consumidor::all();
        $enderecos = Endereco::all();
        $consumidor_enderecos = ConsumidorEndereco::all();
        $cidades = Cidade::all();
        $estados = Estado::all();
    	return view('gerenciamento_de_usuario_consumidor', compact('consumidores', 'enderecos','consumidor_enderecos', 'cidades', 'estados'));
    }

    public function getGerenciamentoProdutores(){
    	$produtores = Produtor::all();
        $produtos = Produto::all();
        $enderecos = Endereco::all();
        $cidades = Cidade::all();
        $estados = Estado::all();
    	return view('gerenciamento_usuario_produtor', compact('produtores', 'produtos', 'enderecos', 'cidades', 'estados'));
    }

    public function getGerenciamentoSistema(){
    	$usuarios = Usuario::all();
    	return view('gerenciamento_do_sistema', compact('usuarios'));
    }
}
