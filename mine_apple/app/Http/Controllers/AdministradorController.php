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
use mine_apple\Avaliacao;
use mine_apple\Assinatura;
use PDF;
use Artisan;
use Storage;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class AdministradorController extends Controller
{
    //Métodos para manipular as views visíveis somente para administradores

    /**
     * Retorna a tela gerenciamento consumidores com todos os dados
     * 
     * 
     * @author Lucas Alves
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
     * Retorna a tela gerenciamento produtores com todos os dados
     * 
     * 
     * @author Lucas Alves
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
     * Retorna a tela gerenciamento do sistema com os logs
     * 
     * @author Lucas Alves
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getGerenciamentoSistema(){
        $logs = Log::all();
    	$usuarios = User::all();
        $operacoes = Operacao::all();
    	return view('gerenciamento_do_sistema', compact('usuarios', 'logs', 'operacoes'));
    }

    /**
     * Realiza o banimento de um produtor através do id
     * 
     * @author Lucas Alves
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function banirProdutor(Request $request){
        $id = $request->id;
        $produtor = Produtor::where('usuario_id', '=', $id);
        $produtor->acesso = 0;
        $this.getGerenciamentoProdutores();
    }

    /**
     * Realiza o banimento de um produtor através do id
     * 
     * @author Lucas Alves 
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function banirConsumidor(Request $request){
        $id = $request->id;
        $consumidor = Consumidor::where('usuario_id', '=', $id);
        $consumidor->acesso = 0;
        $this.getGerenciamentoConsumidores();
    }

    /**
     * Gera o relatório geral para o administrador
     * 
     * @author Lucas Alves
     * @return Barryvdh\DomPDF\PDF
     */
    public function getRelatorioGeral(){
    PDF::setOptions(['isPhpEnabled' => true]);
      $logs = Log::all();
      $avaliacoes = Avaliacao::all();
      $assinaturas = Assinatura::all();
      $pdf = PDF::loadView('relatorio_1', compact('logs', 'avaliacoes', 'assinaturas'));
      return $pdf->download('relatorio_geral.pdf');
    }

    /**
     * 
     * @author Rafael
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 
     */
    public function dadosBackup(Request $request){
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y/m/d');

        $arquivo = fopen('backup_dados.txt','w');
        fwrite($arquivo, $request->horas.','.$request->frequencia.','.$data); 
        fclose($arquivo);
        return redirect()->back();
    }

    /**
     * @author Rafael
     */
    public function iniciarBackup(){
        date_default_timezone_set('America/Sao_Paulo');
        $dados = file('backup_dados.txt');
        foreach ($dados as $linha) {
            $linha = trim($linha);
            $valor = explode(',', $linha);

            $hora = $valor[0];
            $frequencia = $valor[1];
            $data = $valor[2];
        }

        if(strcmp($frequencia,'Uma vez por semana') == 0){
            $timestamp = strtotime($data . "+7 days");
            $dataAtual = date('Y/m/d');
            $horaAtual = strtotime(date('H:i:s'));
            $horaConvertida = strtotime($hora);

            if($timestamp == $dataAtual && $horaConvertida >= $horaAtual){
                try{
                    Artisan::call('backup:run', ['--only-db' => true]);
                }catch(Exception $exc){

                }
            }
    
        }elseif(strcmp($frequencia,'Uma vez por mês') == 0){
            $timestamp = strtotime($data . "+31 days");
            $dataAtual = strtotime(date('Y/m/d'));
            $horaAtual = strtotime(date('H:i:s'));
            $horaConvertida = strtotime($hora);

            if($timestamp == $dataAtual && $horaConvertida >= $horaAtual){
                try{
                    Artisan::call('backup:run', ['--only-db' => true]);
                }catch(Exception $exc){

                }
            }

        }elseif(strcmp($frequencia,'Uma vez por ano') == 0){
            $timestamp = strtotime($data . "+365 days");
            $dataAtual = strtotime(date('Y/m/d'));
            $horaAtual = strtotime(date('H:i:s'));
            $horaConvertida = strtotime($hora);
            
            if($timestamp == $dataAtual && $horaConvertida >= $horaAtual){
                try{
                    Artisan::call('backup:run', ['--only-db' => true]);
                }catch(Exception $exc){

                }
            }

        }else{
            
        }
    }
}
