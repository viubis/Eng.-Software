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
            ['produto_id' => 1, 'path'=>'images/Cereais/Arroz/arroz1.jpg'],
            ['produto_id' => 1, 'path'=>'images/Cereais/Arroz/arroz2.jpg'],
            ['produto_id' => 1, 'path'=>'images/Cereais/Arroz/arroz3.jpg'],

            ['produto_id' => 2, 'path'=>'images/Cereais/Aveia/Aveia1.jpg'],
            ['produto_id' => 2, 'path'=>'images/Cereais/Aveia/Aveia2.jpg'],
            ['produto_id' => 2, 'path'=>'images/Cereais/Aveia/Aveia3.jpg'],

            ['produto_id' => 3, 'path'=>'images/Cereais/Cevada/Cevada1.jpg'],
            ['produto_id' => 3, 'path'=>'images/Cereais/Cevada/Cevada2.jpg'],
            ['produto_id' => 3, 'path'=>'images/Cereais/Cevada/Cevada3.jpg'],

            ['produto_id' => 4, 'path'=>'images/Cereais/Milho/Milho1.jpg'],
            ['produto_id' => 4, 'path'=>'images/Cereais/Milho/Milho2.jpg'],
            ['produto_id' => 4, 'path'=>'images/Cereais/Milho/Milho3.jpg'],

            ['produto_id' => 5, 'path'=>'images/Cereais/Soja/Soja1.jpg'],
            ['produto_id' => 5, 'path'=>'images/Cereais/Soja/Soja2.jpg'],
            ['produto_id' => 5, 'path'=>'images/Cereais/Soja/Soja3.jpg'],

            ['produto_id' => 6, 'path'=>'images/Frutas/Abacaxi/Abacaxi1.png'],
            ['produto_id' => 6, 'path'=>'images/Frutas/Abacaxi/Abacaxi2.jpg'],
            ['produto_id' => 6, 'path'=>'images/Frutas/Abacaxi/Abacaxi3.jpg'],

            ['produto_id' => 7, 'path'=>'images/Frutas/Acerola/Acerola1.jpg'],
            ['produto_id' => 7, 'path'=>'images/Frutas/Acerola/Acerola2.jpg'],
            ['produto_id' => 7, 'path'=>'images/Frutas/Acerola/Acerola3.jpg'],

            ['produto_id' => 8, 'path'=>'images/Frutas/Carambola/Carambola1.jpg'],
            ['produto_id' => 8, 'path'=>'images/Frutas/Carambola/Carambola2.jpg'],
            ['produto_id' => 8, 'path'=>'images/Frutas/Carambola/Carambola3.jpg'],

            ['produto_id' => 9, 'path'=>'images/Frutas/Laranja/Laranja1.jpg'],
            ['produto_id' => 9, 'path'=>'images/Frutas/Laranja/Laranja2.jpg'],
            ['produto_id' => 9, 'path'=>'images/Frutas/Laranja/Laranja3.jpg'],

            ['produto_id' => 10, 'path'=>'images/Frutas/Melancia/Melancia1.jpg'],
            ['produto_id' => 10, 'path'=>'images/Frutas/Melancia/Melancia2.jpg'],
            ['produto_id' => 10, 'path'=>'images/Frutas/Melancia/Melancia3.jpg'],

            ['produto_id' => 11, 'path'=>'images/Legumes/Abobora/Abobora1.jpg'],
            ['produto_id' => 11, 'path'=>'images/Legumes/Abobora/Abobora2.jpg'],
            ['produto_id' => 11, 'path'=>'images/Legumes/Abobora/Abobora3.jpg'],

            ['produto_id' => 12, 'path'=>'images/Legumes/Beringela/Beringela1.jpg'],
            ['produto_id' => 12, 'path'=>'images/Legumes/Beringela/Beringela2.jpg'],
            ['produto_id' => 12, 'path'=>'images/Legumes/Beringela/Beringela3.jpg'],

            ['produto_id' => 13, 'path'=>'images/Legumes/Beterraba/Beterraba1.jpg'],
            ['produto_id' => 13, 'path'=>'images/Legumes/Beterraba/Beterraba2.jpg'],
            ['produto_id' => 13, 'path'=>'images/Legumes/Beterraba/Beterraba3.jpeg'],

            ['produto_id' => 14, 'path'=>'images/Legumes/Chuchu/Chuchu1.jpg'],
            ['produto_id' => 14, 'path'=>'images/Legumes/Chuchu/Chuchu2.jpg'],
            ['produto_id' => 14, 'path'=>'images/Legumes/Chuchu/Chuchu3.jpg'],

            ['produto_id' => 15, 'path'=>'images/Legumes/Pimentao/Pimentao1.jpg'],
            ['produto_id' => 15, 'path'=>'images/Legumes/Pimentao/Pimentao2.jpg'],
            ['produto_id' => 15, 'path'=>'images/Legumes/Pimentao/Pimentao3.jpg'],

            ['produto_id' => 16, 'path'=>'images/Leguminosas/Amendoim/Amendoim1.jpg'],
            ['produto_id' => 16, 'path'=>'images/Leguminosas/Amendoim/Amendoim2.jpeg'],
            ['produto_id' => 16, 'path'=>'images/Leguminosas/Amendoim/Amendoim3.jpg'],

            ['produto_id' => 17, 'path'=>'images/Leguminosas/Ervilha/Ervilha1.jpg'],
            ['produto_id' => 17, 'path'=>'images/Leguminosas/Ervilha/Ervilha2.jpg'],
            ['produto_id' => 17, 'path'=>'images/Leguminosas/Ervilha/Ervilha3.jpg'],

            ['produto_id' => 18, 'path'=>'images/Leguminosas/Feijao/Feijao1.jpg'],
            ['produto_id' => 18, 'path'=>'images/Leguminosas/Feijao/Feijao2.jpg'],
            ['produto_id' => 18, 'path'=>'images/Leguminosas/Feijao/Feijao3.jpg'],

            ['produto_id' => 19, 'path'=>'images/Leguminosas/GraoBico/GraoBico1.jpg'],
            ['produto_id' => 19, 'path'=>'images/Leguminosas/GraoBico/GraoBico2.jpg'],
            ['produto_id' => 19, 'path'=>'images/Leguminosas/GraoBico/GraoBico3.jpg'],

            ['produto_id' => 20, 'path'=>'images/Leguminosas/Lentilha/Lentilha1.jpg'],
            ['produto_id' => 20, 'path'=>'images/Leguminosas/Lentilha/Lentilha2.jpg'],
            ['produto_id' => 20, 'path'=>'images/Leguminosas/Lentilha/Lentilha3.jpg'],

            ['produto_id' => 21, 'path'=>'images/Raizes/BatataDoce/BatataDoce1.jpg'],
            ['produto_id' => 21, 'path'=>'images/Raizes/BatataDoce/BatataDoce2.jpg'],
            ['produto_id' => 21, 'path'=>'images/Raizes/BatataDoce/BatataDoce3.jpg'],

            ['produto_id' => 22, 'path'=>'images/Raizes/BatataYacon/BatataYacon1.jpg'],
            ['produto_id' => 22, 'path'=>'images/Raizes/BatataYacon/BatataYacon2.jpg'],
            ['produto_id' => 22, 'path'=>'images/Raizes/BatataYacon/BatataYacon3.jpg'],

            ['produto_id' => 23, 'path'=>'images/Raizes/Gengibre/Gengibre1.jpg'],
            ['produto_id' => 23, 'path'=>'images/Raizes/Gengibre/Gengibre2.jpg'],
            ['produto_id' => 23, 'path'=>'images/Raizes/Gengibre/Gengibre3.jpg'],

            ['produto_id' => 24, 'path'=>'images/Raizes/Mandioca/Mandioca1.jpg'],
            ['produto_id' => 24, 'path'=>'images/Raizes/Mandioca/Mandioca2.jpg'],
            ['produto_id' => 24, 'path'=>'images/Raizes/Mandioca/Mandioca3.jpg'],

            ['produto_id' => 25, 'path'=>'images/Raizes/Rabanete/Rabanete1.jpg'],
            ['produto_id' => 25, 'path'=>'images/Raizes/Rabanete/Rabanete2.jpg'],
            ['produto_id' => 25, 'path'=>'images/Raizes/Rabanete/Rabanete3.jpg'],

            ['produto_id' => 26, 'path'=>'images/Verduras/Alface/Alface1.jpg'],
            ['produto_id' => 26, 'path'=>'images/Verduras/Alface/Alface2.jpg'],
            ['produto_id' => 26, 'path'=>'images/Verduras/Alface/Alface3.jpg'],

            ['produto_id' => 27, 'path'=>'images/Verduras/Brocolis/Brocolis1.jpg'],
            ['produto_id' => 27, 'path'=>'images/Verduras/Brocolis/Brocolis2.jpg'],
            ['produto_id' => 27, 'path'=>'images/Verduras/Brocolis/Brocolis3.png'],

            ['produto_id' => 28, 'path'=>'images/Verduras/Couve_flor/Couve_flor1.jpeg'],
            ['produto_id' => 28, 'path'=>'images/Verduras/Couve_flor/Couve_flor2.jpg'],
            ['produto_id' => 28, 'path'=>'images/Verduras/Couve_flor/Couve_flor3.jpg'],

            ['produto_id' => 29, 'path'=>'images/Verduras/Espinafre/Espinafre1.jpg'],
            ['produto_id' => 29, 'path'=>'images/Verduras/Espinafre/Espinafre2.jpeg'],
            ['produto_id' => 29, 'path'=>'images/Verduras/Espinafre/Espinafre3.png'],

            ['produto_id' => 30, 'path'=>'images/Verduras/Rucula/Rucula1.jpg'],
            ['produto_id' => 30, 'path'=>'images/Verduras/Rucula/Rucula2.jpg'],
            ['produto_id' => 30, 'path'=>'images/Verduras/Rucula/Rucula3.jpg'],

            ['produto_id' => 31, 'path'=>'images/Tubérculo/Batata_inglesa/Batata_inglesa1.jpg'],
            ['produto_id' => 31, 'path'=>'images/Tubérculo/Batata_inglesa/Batata_inglesa2.jpg'],
            ['produto_id' => 31, 'path'=>'images/Tubérculo/Batata_inglesa/Batata_inglesa3.jpg'],

            ['produto_id' => 32, 'path'=>'images/Legumes/Pimentao_vermelho/Pimentao_vermelho1.jpg'],
            ['produto_id' => 32, 'path'=>'images/Legumes/Pimentao_vermelho/Pimentao_vermelho2.jpg'],
            ['produto_id' => 32, 'path'=>'images/Legumes/Pimentao_vermelho/Pimentao_vermelho3.jpg'],

            ['produto_id' => 33, 'path'=>'images/Raízes/Inhame/Inhame1.jpg'],
            ['produto_id' => 33, 'path'=>'images/Raízes/Inhame/Inhame2.jpg'],
            ['produto_id' => 33, 'path'=>'images/Raízes/Inhame/Inhame3.jpg'],

            ['produto_id' => 34, 'path'=>'images/Frutas/Banana/Banana1.jpg'],
            ['produto_id' => 34, 'path'=>'images/Frutas/Banana/Banana2.jpg'],
            ['produto_id' => 34, 'path'=>'images/Frutas/Banana/Banana3.jpg'],

            ['produto_id' => 35, 'path'=>'images/Frutas/Pera/Pera1.jpg'],
            ['produto_id' => 35, 'path'=>'images/Frutas/Pera/Pera2.jpg'],
            ['produto_id' => 35, 'path'=>'images/Frutas/Pera/Pera3.jpg'],

            ['produto_id' => 36, 'path'=>'images/Frutas/Tomate/Tomate1.jpg'],
            ['produto_id' => 36, 'path'=>'images/Frutas/Tomate/Tomate2.jpg'],
            ['produto_id' => 36, 'path'=>'images/Frutas/Tomate/Tomate3.jpg'],

            ['produto_id' => 37, 'path'=>'images/Frutas/Uva_verde/Uva_verde1.jpg'],
            ['produto_id' => 37, 'path'=>'images/Frutas/Uva_verde/Uva_verde2.jpg'],
            ['produto_id' => 37, 'path'=>'images/Frutas/Uva_verde/Uva_verde3.jpg'],

            ['produto_id' => 38, 'path'=>'images/Frutas/Abacate/Abacate1.png'],
            ['produto_id' => 38, 'path'=>'images/Frutas/Abacate/Abacate2.jpg'],
            ['produto_id' => 38, 'path'=>'images/Frutas/Abacate/Abacate3.jpg'],

            ['produto_id' => 39, 'path'=>'images/Frutas/Morango/Morango1.jpg'],
            ['produto_id' => 39, 'path'=>'images/Frutas/Morango/Morango2.jpg'],
            ['produto_id' => 39, 'path'=>'images/Frutas/Morango/Morango3.jpg'],

            ['produto_id' => 40, 'path'=>'images/Frutas/Amora/Amora1.jpg'],
            ['produto_id' => 40, 'path'=>'images/Frutas/Amora/Amora2.jpg'],
            ['produto_id' => 40, 'path'=>'images/Frutas/Amora/Amora3.jpg'],


        ]);

    }
}
