<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foto')->insert([
            ['produto_id' => 1, 'path'=>'images/Cereais/Arroz/arroz1'],
            ['produto_id' => 1, 'path'=>'images/Cereais/Arroz/arroz2'],
            ['produto_id' => 1, 'path'=>'images/Cereais/Arroz/arroz3'],

            ['produto_id' => 2, 'path'=>'images/Cereais/Aveia/Aveia1'],
            ['produto_id' => 2, 'path'=>'images/Cereais/Aveia/Aveia2'],
            ['produto_id' => 2, 'path'=>'images/Cereais/Aveia/Aveia3'],

            ['produto_id' => 3, 'path'=>'images/Cereais/Cevada/Cevada1'],
            ['produto_id' => 3, 'path'=>'images/Cereais/Cevada/Cevada2'],
            ['produto_id' => 3, 'path'=>'images/Cereais/Cevada/Cevada3'],

            ['produto_id' => 4, 'path'=>'images/Cereais/Milho/Milho1'],
            ['produto_id' => 4, 'path'=>'images/Cereais/Milho/Milho2'],
            ['produto_id' => 4, 'path'=>'images/Cereais/Milho/Milho3'],

            ['produto_id' => 5, 'path'=>'images/Cereais/Soja/Soja1'],
            ['produto_id' => 5, 'path'=>'images/Cereais/Soja/Soja2'],
            ['produto_id' => 5, 'path'=>'images/Cereais/Soja/Soja3'],

            ['produto_id' => 6, 'path'=>'images/Frutas/Abacaxi/Abacaxi1'],
            ['produto_id' => 6, 'path'=>'images/Frutas/Abacaxi/Abacaxi2'],
            ['produto_id' => 6, 'path'=>'images/Frutas/Abacaxi/Abacaxi3'],

            ['produto_id' => 7, 'path'=>'images/Frutas/Acerola/Acerola1'],
            ['produto_id' => 7, 'path'=>'images/Frutas/Acerola/Acerola2'],
            ['produto_id' => 7, 'path'=>'images/Frutas/Acerola/Acerola3'],

            ['produto_id' => 8, 'path'=>'images/Frutas/Carambola/Carambola1'],
            ['produto_id' => 8, 'path'=>'images/Frutas/Carambola/Carambola2'],
            ['produto_id' => 8, 'path'=>'images/Frutas/Carambola/Carambola3'],

            ['produto_id' => 9, 'path'=>'images/Frutas/Laranja/Laranja1'],
            ['produto_id' => 9, 'path'=>'images/Frutas/Laranja/Laranja2'],
            ['produto_id' => 9, 'path'=>'images/Frutas/Laranja/Laranja3'],

            ['produto_id' => 10, 'path'=>'images/Frutas/Melancia/Melancia1'],
            ['produto_id' => 10, 'path'=>'images/Frutas/Melancia/Melancia2'],
            ['produto_id' => 10, 'path'=>'images/Frutas/Melancia/Melancia3'],

            ['produto_id' => 11, 'path'=>'images/Legumes/Abobora/Abobora1'],
            ['produto_id' => 11, 'path'=>'images/Legumes/Abobora/Abobora2'],
            ['produto_id' => 11, 'path'=>'images/Legumes/Abobora/Abobora3'],

            ['produto_id' => 12, 'path'=>'images/Legumes/Beringela/Beringela1'],
            ['produto_id' => 12, 'path'=>'images/Legumes/Beringela/Beringela2'],
            ['produto_id' => 12, 'path'=>'images/Legumes/Beringela/Beringela3'],

            ['produto_id' => 13, 'path'=>'images/Legumes/Beterraba/Beterraba1'],
            ['produto_id' => 13, 'path'=>'images/Legumes/Beterraba/Beterraba2'],
            ['produto_id' => 13, 'path'=>'images/Legumes/Beterraba/Beterraba3'],

            ['produto_id' => 14, 'path'=>'images/Legumes/Chuchu/Chuchu1'],
            ['produto_id' => 14, 'path'=>'images/Legumes/Chuchu/Chuchu2'],
            ['produto_id' => 14, 'path'=>'images/Legumes/Chuchu/Chuchu3'],

            ['produto_id' => 15, 'path'=>'images/Legumes/Pimentao/Pimentao1'],
            ['produto_id' => 15, 'path'=>'images/Legumes/Pimentao/Pimentao2'],
            ['produto_id' => 15, 'path'=>'images/Legumes/Pimentao/Pimentao3'],

            ['produto_id' => 16, 'path'=>'images/Leguminosas/Amendoim/Amendoim1'],
            ['produto_id' => 16, 'path'=>'images/Leguminosas/Amendoim/Amendoim2'],
            ['produto_id' => 16, 'path'=>'images/Leguminosas/Amendoim/Amendoim3'],

            ['produto_id' => 17, 'path'=>'images/Leguminosas/Ervilha/Ervilha1'],
            ['produto_id' => 17, 'path'=>'images/Leguminosas/Ervilha/Ervilha2'],
            ['produto_id' => 17, 'path'=>'images/Leguminosas/Ervilha/Ervilha3'],

            ['produto_id' => 18, 'path'=>'images/Leguminosas/Feijao/Feijao1'],
            ['produto_id' => 18, 'path'=>'images/Leguminosas/Feijao/Feijao2'],
            ['produto_id' => 18, 'path'=>'images/Leguminosas/Feijao/Feijao3'],

            ['produto_id' => 19, 'path'=>'images/Leguminosas/GraoBico/GraoBico1'],
            ['produto_id' => 19, 'path'=>'images/Leguminosas/GraoBico/GraoBico2'],
            ['produto_id' => 19, 'path'=>'images/Leguminosas/GraoBico/GraoBico3'],

            ['produto_id' => 20, 'path'=>'images/Leguminosas/Lentilha/Lentilha1'],
            ['produto_id' => 20, 'path'=>'images/Leguminosas/Lentilha/Lentilha2'],
            ['produto_id' => 20, 'path'=>'images/Leguminosas/Lentilha/Lentilha3'],

            ['produto_id' => 21, 'path'=>'images/Raizes/BatataDoce/BatataDoce1'],
            ['produto_id' => 21, 'path'=>'images/Raizes/BatataDoce/BatataDoce2'],
            ['produto_id' => 21, 'path'=>'images/Raizes/BatataDoce/BatataDoce3'],

            ['produto_id' => 22, 'path'=>'images/Raizes/BatataYacon/BatataYacon1'],
            ['produto_id' => 22, 'path'=>'images/Raizes/BatataYacon/BatataYacon2'],
            ['produto_id' => 22, 'path'=>'images/Raizes/BatataYacon/BatataYacon3'],

            ['produto_id' => 23, 'path'=>'images/Raizes/Gengibre/Gengibre1'],
            ['produto_id' => 23, 'path'=>'images/Raizes/Gengibre/Gengibre2'],
            ['produto_id' => 23, 'path'=>'images/Raizes/Gengibre/Gengibre3'],

            ['produto_id' => 24, 'path'=>'images/Raizes/Mandioca/Mandioca1'],
            ['produto_id' => 24, 'path'=>'images/Raizes/Mandioca/Mandioca2'],
            ['produto_id' => 24, 'path'=>'images/Raizes/Mandioca/Mandioca3'],

            ['produto_id' => 25, 'path'=>'images/Raizes/Rabanete/Rabanete1'],
            ['produto_id' => 25, 'path'=>'images/Raizes/Rabanete/Rabanete2'],
            ['produto_id' => 25, 'path'=>'images/Raizes/Rabanete/Rabanete3'],

            ['produto_id' => 26, 'path'=>'images/Verduras/Alface/Alface1'],
            ['produto_id' => 26, 'path'=>'images/Verduras/Alface/Alface2'],
            ['produto_id' => 26, 'path'=>'images/Verduras/Alface/Alface3'],

            ['produto_id' => 27, 'path'=>'images/Verduras/Brocolis/Brocolis1'],
            ['produto_id' => 27, 'path'=>'images/Verduras/Brocolis/Brocolis2'],
            ['produto_id' => 27, 'path'=>'images/Verduras/Brocolis/Brocolis3'],

            ['produto_id' => 28, 'path'=>'images/Verduras/Couve_flor/Couve_flor1'],
            ['produto_id' => 28, 'path'=>'images/Verduras/Couve_flor/Couve_flor2'],
            ['produto_id' => 28, 'path'=>'images/Verduras/Couve_flor/Couve_flor3'],

            ['produto_id' => 29, 'path'=>'images/Verduras/Espinafre/Espinafre1'],
            ['produto_id' => 29, 'path'=>'images/Verduras/Espinafre/Espinafre2'],
            ['produto_id' => 29, 'path'=>'images/Verduras/Espinafre/Espinafre3'],

            ['produto_id' => 29, 'path'=>'images/Verduras/Rucula/Rucula1'],
            ['produto_id' => 29, 'path'=>'images/Verduras/Rucula/Rucula2'],
            ['produto_id' => 29, 'path'=>'images/Verduras/Rucula/Rucula3'],

        ]);

    }
}
