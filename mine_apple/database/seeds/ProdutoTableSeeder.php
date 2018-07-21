<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produto')->insert([
            ['produtor_id' => 2, 'categoria_id' => 1, 'embalagem_id' => 4, 'nome' => 'Arroz',
                'descricao' => 'O arroz é fonte de energia ao organismo com carboidratos saudáveis. Ele é um alimento rico em carboidratos mas também tem proteínas, vitaminas e minerais.',
                'valor' => 3, 'minPorAssinatura' => 2, 'maxPorDia' => 30,
                'freteMax' => 25, 'seg' => true, 'ter' => true, 'qua' => true,
                'qui' => true, 'sex' => false, 'sab' => false, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 1, 'embalagem_id' =>4, 'nome' => 'Aveia',
                'descricao' => 'Produto não - transgênico que possui o certificado pela ECOCERT. Pode ser consumido com qualquer preparação e é feito basicamente por flocos de aveia.',
                'valor' => 2, 'minPorAssinatura' => 2, 'maxPorDia' => 33,
                'freteMax' => 22, 'seg' => true, 'ter' => false, 'qua' => true,
                'qui' => false, 'sex' => true, 'sab' => false, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 1, 'embalagem_id' =>4, 'nome' => 'Cevada',
                'descricao' => 'Alimento Concentrado de alta qualidade, muito palatável.',
                'valor' => 1.50, 'minPorAssinatura' => 1, 'maxPorDia' => 25,
                'freteMax' => 10, 'seg' => true, 'ter' => true, 'qua' => true,
                'qui' => false, 'sex' => false, 'sab' => false, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 1, 'embalagem_id' =>4, 'nome' => 'Milho',
                'descricao' => 'Milho limpo, seco e estocado em armazém profissional e com um ótimo padrão de qualidade.',
                'valor' => 4, 'minPorAssinatura' => 2, 'maxPorDia' => 15,
                'freteMax' => 14, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => false, 'sex' => false, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 1, 'embalagem_id' =>4, 'nome' => 'Soja',
                'descricao' => 'Produto não transgênico, embalado a vácuo, isento de agrotóxicos e produtos químicos.',
                'valor' => 2.30, 'minPorAssinatura' => 1, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 2, 'embalagem_id' =>4, 'nome' => 'Abacaxi',
                'descricao' => 'Abacaxi de qualidade, cultivado sem agrotóxicos.',
                'valor' => 1.50, 'minPorAssinatura' => 4, 'maxPorDia' => 30,
                'freteMax' => 8, 'seg' => false, 'ter' => true, 'qua' => true,
                'qui' => false, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 2, 'embalagem_id' =>3, 'nome' => 'Acerola',
                'descricao' => 'Produto não transgênico e isento de agrotóxicos.',
                'valor' => 2.10, 'minPorAssinatura' => 1, 'maxPorDia' => 5,
                'freteMax' => 4, 'seg' => false, 'ter' => true, 'qua' => true,
                'qui' => false, 'sex' => false, 'sab' => true, 'dom' => true],

            ['produtor_id' => 2, 'categoria_id' => 2, 'embalagem_id' =>1, 'nome' => 'Carambola',
                'descricao' => 'Produto 100% orgânico e saudável.',
                'valor' => 0.90, 'minPorAssinatura' => 5, 'maxPorDia' => 50,
                'freteMax' => 6, 'seg' => true, 'ter' => false, 'qua' => true,
                'qui' => false, 'sex' => true, 'sab' => false, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 2, 'embalagem_id' =>4, 'nome' => 'Laranja',
                'descricao' => 'Fruta excelente para consumo, docinha e de qualidade.',
                'valor' => 2.90, 'minPorAssinatura' => 1, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 2, 'embalagem_id' =>4, 'nome' => 'Melancia',
                'descricao' => 'Fruta suculenta e refrescante, excelente no período do verão.',
                'valor' => 7, 'minPorAssinatura' => 1, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 3, 'categoria_id' => 3, 'embalagem_id' =>1, 'nome' => 'Abóbora',
                'descricao' => 'Legume saudável, que possui diversas vitaminas para o corpo
                humano.',
                'valor' => 5, 'minPorAssinatura' => 1, 'maxPorDia' => 20,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 3, 'categoria_id' => 3, 'embalagem_id' =>1, 'nome' => 'Beringela',
                'descricao' => 'Fruta suculenta e refrescante, excelente no período do verão.',
                'valor' => 2.50, 'minPorAssinatura' => 1, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 3, 'categoria_id' => 3, 'embalagem_id' =>1, 'nome' => 'Beterraba',
                'descricao' => 'Fruta suculenta e refrescante, excelente no período do verão.',
                'valor' => 3, 'minPorAssinatura' => 1, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 3, 'categoria_id' => 3, 'embalagem_id' =>1, 'nome' => 'Chuchu',
                'descricao' => 'Fruta suculenta e refrescante, excelente no período do verão.',
                'valor' => 2, 'minPorAssinatura' => 1, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 3, 'categoria_id' => 3, 'embalagem_id' =>1, 'nome' => 'Pimentão',
                'descricao' => 'Fruta suculenta e refrescante, excelente no período do verão.',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 3, 'categoria_id' => 4, 'embalagem_id' =>3, 'nome' => 'Amendoim',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 3, 'categoria_id' => 4, 'embalagem_id' =>3, 'nome' => 'Ervilha',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 4, 'embalagem_id' =>3, 'nome' => 'Feijão',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 4, 'embalagem_id' =>3, 'nome' => 'Grão de bico',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 4, 'embalagem_id' =>3, 'nome' => 'Lentilha',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 3, 'categoria_id' => 5, 'embalagem_id' =>3, 'nome' => 'Batata doce',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 3, 'categoria_id' => 5, 'embalagem_id' =>3, 'nome' => 'Batata Yacon',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 3, 'categoria_id' => 5, 'embalagem_id' =>3, 'nome' => 'Gengibre',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 5, 'embalagem_id' =>3, 'nome' => 'Mandioca',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 5, 'embalagem_id' =>3, 'nome' => 'Rabanete',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 7, 'embalagem_id' =>3, 'nome' => 'Alface',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 3, 'categoria_id' => 7, 'embalagem_id' =>3, 'nome' => 'Brócolis',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 7, 'embalagem_id' =>3, 'nome' => 'Couve-flor',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 3, 'categoria_id' => 7, 'embalagem_id' =>3, 'nome' => 'Espinafre',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 3, 'categoria_id' => 7, 'embalagem_id' =>3, 'nome' => 'Rúcula',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 6, 'embalagem_id' =>3, 'nome' => 'Batata inglesa',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 7, 'embalagem_id' =>3, 'nome' => 'Pimentão vermelho',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 7, 'embalagem_id' =>3, 'nome' => 'Cenoura',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 5, 'embalagem_id' =>3, 'nome' => 'Inhame',
                'descricao' => '-',
                'valor' => 2.50, 'minPorAssinatura' => 5, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 2, 'embalagem_id' =>2, 'nome' => 'Banana',
                'descricao' => 'Bem delícia.',
                'valor' => 2.50, 'minPorAssinatura' => 13, 'maxPorDia' => 20,
                'freteMax' => 9, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 2, 'embalagem_id' =>2, 'nome' => 'Pera',
                'descricao' => 'Bem delícia e docinha hein.',
                'valor' => 1.90, 'minPorAssinatura' => 13, 'maxPorDia' => 20,
                'freteMax' => 9, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 2, 'embalagem_id' =>4, 'nome' => 'Tomate',
                'descricao' => 'Fruta excelente para consumo, docinha e de qualidade.',
                'valor' => 2.90, 'minPorAssinatura' => 1, 'maxPorDia' => 10,
                'freteMax' => 10, 'seg' => false, 'ter' => false, 'qua' => true,
                'qui' => true, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 2, 'embalagem_id' =>4, 'nome' => 'Uva verde',
                'descricao' => 'Abacaxi de qualidade, cultivado sem agrotóxicos.',
                'valor' => 1.50, 'minPorAssinatura' => 4, 'maxPorDia' => 30,
                'freteMax' => 8, 'seg' => false, 'ter' => true, 'qua' => true,
                'qui' => false, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 2, 'embalagem_id' =>4, 'nome' => 'Abacate',
                'descricao' => 'Abacaxi de qualidade, cultivado sem agrotóxicos.',
                'valor' => 1.50, 'minPorAssinatura' => 4, 'maxPorDia' => 30,
                'freteMax' => 8, 'seg' => false, 'ter' => true, 'qua' => true,
                'qui' => false, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 2, 'embalagem_id' =>4, 'nome' => 'Morango',
                'descricao' => 'Abacaxi de qualidade, cultivado sem agrotóxicos.',
                'valor' => 1.50, 'minPorAssinatura' => 4, 'maxPorDia' => 30,
                'freteMax' => 8, 'seg' => false, 'ter' => true, 'qua' => true,
                'qui' => false, 'sex' => true, 'sab' => true, 'dom' => false],

            ['produtor_id' => 2, 'categoria_id' => 2, 'embalagem_id' =>4, 'nome' => 'Amora',
                'descricao' => 'Abacaxi de qualidade, cultivado sem agrotóxicos.',
                'valor' => 1.50, 'minPorAssinatura' => 4, 'maxPorDia' => 30,
                'freteMax' => 8, 'seg' => false, 'ter' => true, 'qua' => true,
                'qui' => false, 'sex' => true, 'sab' => true, 'dom' => false],
        ]);


    }
}
