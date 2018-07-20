<?php

namespace mine_apple\Console\Commands;

use Illuminate\Console\Command;
use Artisan;

class AgendaBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'verifica:backup'; //comando personalizado que pode ser usado no terminal

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verifica a cada minuto se é o momento certo para o backup';// descrição do comando

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
     * @author Rafael
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

        date_default_timezone_set('America/Sao_Paulo'); //configura fuso horário padrão
        $dados = file('public/backup_dados.txt'); //recebe os dados presentes no arquivo
        foreach ($dados as $linha) {
            $linha = trim($linha);  //retira os espaços em branco de ambos os lados da string
            $valor = explode(',', $linha); //separa cada string delimitada pelo vírgula e armazena num array

            $hora = $valor[0]; //recebe o valor armazenado na primeira posição do array
            $frequencia = $valor[1]; //recebe o valor armazenado na segunda posição do array
            $data = $valor[2]; //recebe o valor armazenado na terceira posição do array
        }

        //Compara o valor armazenado na frequencia 
        if(strcmp($frequencia,'Uma vez por semana') == 0){
            $timestamp = strtotime($data); //converte a data em um número
            $dataAtual = strtotime(date('Y/m/d')); //recebe a data atual
            $horaAtual = strtotime(date('H:i:s')); //recebe o horário atual, e converte para um número
            $horaConvertida = strtotime($hora); //converte a hora que estava no arqquivo em um número

            echo 'Entou no if Uma vez por semana';
            echo $timestamp.' '.$dataAtual;
            //compara se a das datas são iguais, e se o horário que foi definido no backup é menor ou igual ao atual
            if($timestamp == $dataAtual && $horaAtual <= $horaConvertida){
                try{
                    Artisan::call('backup:run', ['--only-db' => true]); // gera uma pasta com um arquivo .zip que contem o bakup do banco de dados 

                    $dat = date('Y/m/d'); //recebe data atual para que se possa comparar com a data que foi definida o bakup
                    $arquivo = fopen('public/backup_dados.txt','w'); // abre ou gera o arquivo
                    fwrite($arquivo, $hora.','.$frequencia.','.$dat); //armazena os mesmos valores de (frequencia e horario) e armazena a data atual
                    fclose($arquivo); //fecha o arquivo

                }catch(Exception $exc){
                    echo 'Entrou na Exceção';
                }
            }
    
        //Compara o valor armazenado na frequencia 
        }elseif(strcmp($frequencia,'Uma vez por mês') == 0){
            $timestamp = strtotime($data); //converte a data em um número
            $dataAtual = strtotime(date('Y/m/d')); //recebe a data atual
            $horaAtual = strtotime(date('H:i:s')); //recebe o horário atual, e converte para um número
            $horaConvertida = strtotime($hora); //converte a hora que estava no arquivo em um número

            //compara se a das datas são iguais, e se o horário que foi definido no backup é menor ou igual ao atual
            if($timestamp == $dataAtual && $horaAtual <= $horaConvertida){
                try{
                    Artisan::call('backup:run', ['--only-db' => true]); //gera uma pasta com um arquivo .zip que contem o bakup do banco de dados 

                    $dat = date('Y/m/d'); //recebe data atual para que se possa comparar com a data que foi definida o bakup
                    $arquivo = fopen('public/backup_dados.txt','w'); // abre ou gera o arquivo
                    fwrite($arquivo, $hora.','.$frequencia.','.$dat); //armazena os mesmos valores de (frequencia e horario) e armazena a data atual
                    fclose($arquivo); //fecha o arquivo
                    
                }catch(Exception $exc){
                    echo 'Entrou na Exceção';
                }
            }

        //Compara o valor armazenado na frequencia 
        }elseif(strcmp($frequencia,'Uma vez por ano') == 0){
            $timestamp = strtotime($data); //converte a data em um número
            $dataAtual = strtotime(date('Y/m/d')); //recebe a data atual
            $horaAtual = strtotime(date('H:i:s')); //recebe o horário atual, e converte para um número
            $horaConvertida = strtotime($hora); //converte a hora que estava no arquivo em um número

            //compara se a das datas são iguais, e se o horário que foi definido no backup é menor ou igual ao atual
            if($timestamp == $dataAtual && $horaAtual <= $horaConvertida){
                try{
                    Artisan::call('backup:run', ['--only-db' => true]); //gera uma pasta com um arquivo .zip que contem o bakup do banco de dados

                    $dat = date('Y/m/d'); //recebe data atual para que se possa comparar com a data que foi definida o bakup
                    $arquivo = fopen('public/backup_dados.txt','w'); // abre ou gera o arquivo
                    fwrite($arquivo, $hora.','.$frequencia.','.$dat); //armazena os mesmos valores de (frequencia e horario) e armazena a data atual
                    fclose($arquivo); //fecha o arquivo

                }catch(Exception $exc){
                    echo 'Entrou na Exceção';
                }
            }

        }else{
            echo 'Nenhuma ação';
        }
    }
}
