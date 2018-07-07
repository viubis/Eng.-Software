<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    	return view('gerenciamento_de_usuario_consumidor', compact('consumidores'));
    }

    public function getGerenciamentoProdutores(){
    	$produtores = Produtor::all();
    	return view('gerenciamento_de_usuario_produtor', compact('produtores'));
    }

    public function getGerenciamentoSistema(){
    	$usuarios = Usuario::all();
    	return view('gerenciamento_do_sistema', compact('usuarios'));
    }
}
