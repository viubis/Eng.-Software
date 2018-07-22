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
USE Carbon\Carbon;

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

        $disco = Storage::disk(config('backup.backup.destination.disks')[0]);
        //var_dump($disco);
        $arquivo = $disco->files(config('backup.backup.name'));
        //var_dump($arquivo);
        $backups = [];

        foreach ($arquivo as $arq) {
            if(substr($arq, -4) == '.zip' && $disco->exists($arq)){
                $backups[] = [
                    'file_path' => $arq,
                    'file_name' => str_replace(config('backup.backup.name'). '/', '', $arq),
                    'file_size' => $this->converterTamanho($disco->size($arq)),
                    'last_modified' => $this->converterData($disco->lastModified($arq)),
                ];
            }
        }
        //var_dump($backups);
        $backups = array_reverse($backups);
    	return view('gerenciamento_do_sistema', compact('usuarios', 'logs', 'operacoes', 'backups'));
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
     * Armazena os dados de frequencia e hora do backup em um arquivo 
     *
     * @author Rafael
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 
     */
    public function dadosBackup(Request $request){
        date_default_timezone_set('America/Sao_Paulo');//configura fuso horário padrão
        $data = date('Y/m/d');//pega a data atual
        $tiraSegundos = substr($request->horas, 0, 5); 

        $arquivo = fopen('backup_dados.txt','w');//Abre ou cria um arquivo para escrita
        fwrite($arquivo, $tiraSegundos.','.$request->frequencia.','.$data); //escreve os dados vindos da view no arquivo
        fclose($arquivo);//fecha o arquivo
        return redirect()->back();//redireciona para a mesma view
    }

    /**
     * Esse método não está sendo usado aqui, ele foi duplicado em outra
     * classe que está em app/Console/Commands/AgendaBakup.php e quem executa 
     * o mesmo é um método existente no Kernel.php que chama um comando personalizado
     * 'verifica:backup'
     * @author Rafael
     */ 
    public function iniciarBackup(){
        date_default_timezone_set('America/Sao_Paulo'); //configura fuso horário padrão
        $dados = file('backup_dados.txt'); //recebe os dados presentes no arquivo
        foreach ($dados as $linha) {
            $linha = trim($linha); //retira os espaços em branco de ambos os lados da string
            $valor = explode(',', $linha); //separa cada string delimitada pelo vírgula e armazena num array

            $hora = $valor[0]; //recebe o valor armazenado na primeira posição do array
            $frequencia = $valor[1]; //recebe o valor armazenado na segunda posição do array
            $data = $valor[2]; //recebe o valor armazenado na terceira posição do array
        }

        //Compara o valor armazenado na frequencia 
        if(strcmp($frequencia,'Uma vez por semana') == 0){
            $timestamp = strtotime($data . "+7 days"); //converte a data em um número e incrementa 7 a data armazenada (7 dias)
            $dataAtual = date('Y/m/d'); //recebe a data atual
            $horaAtual = strtotime(date('H:i')); //recebe o horário atual, e converte para um número
            $horaConvertida = strtotime($hora); //converte a hora que estava no arquivo em um número

            //compara se passou 1 semana, e se o horário é maior ou igual ao que foi definido no backup
            if($timestamp == $dataAtual && $horaConvertida == $horaAtual){
                try{
                    Artisan::call('backup:run', ['--only-db' => true]);// gera uma pasta com um arquivo .zip cque contem o bakup do banco de dados 

                    $dat = date('Y/m/d'); //recebe data atual para que se possa verificar se passou 7 dias para o proximo backup
                    $arquiv = fopen('public/backup_dados.txt','w'); // abre ou gera o arquivo
                    fwrite($arquiv, $hora.','.$frequencia.','.$dat); //armazena os mesmos valores de (frequencia e horario) e armazena a data atual
                    fclose($arquiv); //fecha o arquivo

                }catch(Exception $exc){

                }
            }

        //Compara o valor armazenado na frequencia 
        }elseif(strcmp($frequencia,'Uma vez por mês') == 0){
            $timestamp = strtotime($data . "+31 days"); //converte a data em um número e incrementa 31 a data armazenada (31 dias)
            $dataAtual = strtotime(date('Y/m/d')); //recebe a data atual
            $horaAtual = strtotime(date('H:i')); //recebe o horário atual, e converte para um número
            $horaConvertida = strtotime($hora); //converte a hora que estava no arquivo em um número

            //compara se passou 1 mês, e se o horário é maior ou igual ao que foi definido no backup
            if($timestamp == $dataAtual && $horaConvertida == $horaAtual){
                try{
                    Artisan::call('backup:run', ['--only-db' => true]); // gera uma pasta com um arquivo .zip cque contem o bakup do banco de dados 

                    $dat = date('Y/m/d'); //recebe data atual para que se possa verificar se passou 7 dias para o proximo backup
                    $arquiv = fopen('public/backup_dados.txt','w'); // abre ou gera o arquivo
                    fwrite($arquiv, $hora.','.$frequencia.','.$dat); //armazena os mesmos valores de (frequencia e horario) e armazena a data atual
                    fclose($arquiv); //fecha o arquivo

                }catch(Exception $exc){

                }
            }

        //Compara o valor armazenado na frequencia 
        }elseif(strcmp($frequencia,'Uma vez por ano') == 0){
            $timestamp = strtotime($data . "+365 days"); //converte a data em um número e incrementa 365 a data armazenada (365 dias)
            $dataAtual = strtotime(date('Y/m/d')); //recebe a data atual
            $horaAtual = strtotime(date('H:i')); //recebe o horário atual, e converte para um número
            $horaConvertida = strtotime($hora); //converte a hora que estava no arquivo em um número
            
            //compara se passou 1 ano, e se o horário é maior ou igual ao que foi definido no backup
            if($timestamp == $dataAtual && $horaConvertida == $horaAtual){
                try{
                    Artisan::call('backup:run', ['--only-db' => true]); // gera uma pasta com um arquivo .zip cque contem o bakup do banco de dados 

                    $dat = date('Y/m/d'); //recebe data atual para que se possa verificar se passou 7 dias para o proximo backup
                    $arquiv = fopen('public/backup_dados.txt','w'); // abre ou gera o arquivo
                    fwrite($arquiv, $hora.','.$frequencia.','.$dat); //armazena os mesmos valores de (frequencia e horario) e armazena a data atual
                    fclose($arquiv); //fecha o arquivo

                }catch(Exception $exc){

                }
            }

        }else{
            
        }
    }


    /**
     * Deleta arquivo de backup
     *
     * @author Rafael
     * @param $nomeArquiv
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 
     */
    public function deletarBackup($nomeArquivo){
        $disco = Storage::disk(config('backup.backup.destination.disks')[0]);
        if($disco->exists(config('backup.backup.name') . '/' . $nomeArquivo)){
            $disco->delete(config('backup.backup.name') . '/' . $nomeArquivo);
            return redirect()->route('gerenciamento_sistema');
        } else {
            abort(404, "O arquivo de backup não existe");
        }
    }


    /**
     * Converte o tamanho do arquivo de deimal para o formato
     * convencional
     *
     * @author Rafael
     * @param $bytes e $decimal
     * @return string
     * 
     */
    public function converterTamanho($bytes, $decimal = 2){

        if($bytes < 1024){
            return $byte. ' B';
        }

        $fator = floor(log($bytes, 1024));

        return sprintf("%.{$decimal}f", $bytes / pow(2014, $fator)) . ['B', 'KB', 'MB', 'GB', 'TB', 'PB'][$fator];
    }

    /**
     * Converte valor decimal da data para o formato date 
     *
     * @author Rafael
     * @param Request $request
     * 
     */
    public function converterData($data){
        date_default_timezone_set('America/Sao_Paulo');
        return Carbon::createFromTimeStamp($data)->formatLocalized('%d %b %Y %H:%M');
    }
}
