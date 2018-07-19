<?php

namespace mine_apple\Console\Commands;

use Illuminate\Console\Command;

class AgendaBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'verifica:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verifica a cada minuto se é o momento certo para o backup';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {   //Se quiserem testar essa função descomentem esse trecho
        //de código que testa o cron de agendamento, o mesmo executa a
        //cada minuto e armazena a data e a hora em um arquivo de
        //texto localizado na pasta public 

        // date_default_timezone_set('America/Sao_Paulo');
        // $dataHora = date('d/m/Y h:i:s');
        // $arquivo = fopen('public/conta.txt','a');
        // fwrite($arquivo, $dataHora); 
        // fwrite($arquivo,"\r\n");
        // fclose($arquivo);

        date_default_timezone_set('America/Sao_Paulo');
        $dados = file('public/backup_dados.txt');
        var_dump($dados);
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

        }else{
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

        }
    }
}
