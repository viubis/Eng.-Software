<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mine_apple\Produtor;
use mine_apple\Consumidor;
use mine_apple\User;
use mine_apple\Produto;
use mine_apple\ConsumidorEndereco;
use mine_apple\Endereco;
use mine_apple\Cidade;
use mine_apple\Estado;
use mine_apple\Log;
use mine_apple\Operacao;
use PDF;

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

    /**
     * @author Lucas Alves
     * @return string
     */
    public function getGerenciamentoConsumidores(){
    	$consumidores = Consumidor::all();
        $enderecos = Endereco::all();
        $consumidor_enderecos = ConsumidorEndereco::all();
        $cidades = Cidade::all();
        $estados = Estado::all();
    	return view('gerenciamento_de_usuario_consumidor', compact('consumidores', 'enderecos','consumidor_enderecos', 'cidades', 'estados'));
    }

    /**
     * @author Lucas Alves
     * @return string
     */
    public function getGerenciamentoProdutores(){
    	$produtores = Produtor::all();
        $produtos = Produto::all();
        $enderecos = Endereco::all();
        $cidades = Cidade::all();
        $estados = Estado::all();
    	return view('gerenciamento_usuario_produtor', compact('produtores', 'produtos', 'enderecos', 'cidades', 'estados'));
    }

    /**
     * @author Lucas Alves
     * @return string
     */
    public function getGerenciamentoSistema(){
        $logs = Log::all();
    	$usuarios = User::all();
        $operacoes = Operacao::all();
    	return view('gerenciamento_do_sistema', compact('usuarios', 'logs', 'operacoes'));
    }

    /**
     * @author Lucas Alves
     * @param request
     * @return string
     */
    public function banirProdutor(Request $request){
        $id = $request->id;
        $produtor = Produtor::where('usuario_id', '=', $id);
        $produtor->acesso = 0;
        $this.getGerenciamentoProdutores();
    }

    public function banirConsumidor(Request $request){
        $id = $request->id;
        $consumidor = Consumidor::where('usuario_id', '=', $id);
        $consumidor->acesso = 0;
        $this.getGerenciamentoConsumidores();
    }

    public function getRelatorioGeral(){
    PDF::setOptions(['isPhpEnabled' => true]);
      $logs = Log::all();
      $pdf = PDF::loadView('relatorio_1', compact('logs'));
      return $pdf->download('relatorio_geral.pdf');
    }
}
