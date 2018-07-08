<?php

//Rotas púlblicas ----------------------------------------------------------------------------------

Route::get('/', 'PublicoController@index')->name('index');

Route::get('/sobre', 'PublicoController@sobre');

Route::get('/fale_conosco', 'PublicoController@faleConosco');

Route::get('/carrinho', 'PublicoController@carrinho');

Route::get('tipo_cadastro', 'PublicoController@getTipoCadastro');

//Rotas para facebook socialite -----------------------------------------------------------

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

//Rotas para google socialite -----------------------------------------------------------

Route::get('login/google', 'Auth\LoginController@redirectToProvider1');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback1');

//Rotas de cadastro e recuperação de senha ---------------------------------------------------------
Auth::routes();

Route::get('cadastro_produtor', 'ProdutorController@getForm');

Route::get('cadastro_consumidor', 'ConsumidorController@getForm');

Route::post('/cadastro_produtor', 'ProdutorController@cadastrarProdutor')->name('cadastrarProdutor');

Route::post('/cadastro_consumidor', 'ConsumidorController@cadastrarConsumidor')->name('cadastrarConsumidor');

Route::post('/retorna_cidades', 'CidadeController@retornaCidades')->name('retornaCidades');


//Rotas para usuários cadastrados ------------------------------------------------------------------
Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'UsuarioController@home')->name('home');
    Route::get('/minhascompras', 'UsuarioController@minhasCompras');


    //Rotas para usuários que não definiram o tipo de conta ----------------------------------------
    Route::middleware(['auth.usuario'])->group(function () {

        Route::get('/usuario', function () {
            return Auth::user()->email . ' é usuário';
        });

        Route::get('/produto/{id}', 'PublicoController@getDetalhesProduto');

    });




    //Rotas para administadores --------------------------------------------------------------------
    Route::middleware(['auth.administrador'])->group(function () {

        // Route::get('/administrador', 'AdministradorController@exemplo')->name('administrador');
        Route::get('/administrador', 'AdministradorController@index')->name('administrador');

        Route::get('/gerenciamento/consumidor', 'AdministradorController@getGerenciamentoConsumidores');

        Route::get('/gerenciamento/produtor', 'AdministradorController@getGerenciamentoProdutores');

        Route::get('/gerenciamento/sistema', 'AdministradorController@getGerenciamentoSistema');

    });




    //Rotas para consumidores ----------------------------------------------------------------------
    Route::middleware(['auth.consumidor'])->group(function () {

        // Route::get('/consumidor', 'ConsumidorController@exemplo')->name('consumidor');

        Route::get('/consumidor', 'ConsumidorController@index')->name('consumidor');

        Route::get('/consumidor/adicionar_cartao', 'ConsumidorController@adicionarCartao')->name('consumidor.adicionar.cartao');

        Route::get('/consumidor/cadastrar_endereco', 'ConsumidorController@getCadastrarEndereco');

        Route::post('/consumidor/cadastrar_endereco', 'ConsumidorController@cadastrarEndereco')->name('consumidor.cadastrar.endereco');

        //Route::get('/consumidor/cadastrar', 'ConsumidorController@cadastrarConsumidor')->name('consumidor.cadastrar');
        //Route::get('/consumidor/alterar', 'ConsumidorController@alterarConsumidor')->name('consumidor.alterar');
        //Route::get('/consumidor/adicionar_cartao', 'ConsumidorController@adicionarCartao')->name('comsumidor.cartao.cadastrar');

        Route::post('/adicionar_carrinho', 'ConsumidorController@adicionarCarrinho');

        Route::get('/carrinho_de_compras','ConsumidorController@getCarrinhoCompras');

        Route::get('/consumidor/cadastrar_endereco', 'ConsumidorController@cadastrarEndereco');

        //Pesquisa por categorias

        Route::get('/pesquisa_produtos', 'ConsumidorController@getPesquisaTodosProdutos');

        /*Route::get('/pesquisa_produtos/{categoria}', 'ConsumidorController@getPesquisaTodosProdutos')->where('categoria', '[0-7]+');*/

        Route::get('/avaliacao_assinatura', 'ConsumidorController@getAvaliacaoAssinatura');

    });




    //Rotas para produtores -----------------------------------------------------------------------
    Route::middleware(['auth.produtor'])->group(function () {

        // Route::get('/produtor', 'ProdutorController@exemplo')->name('produtor');

        Route::get('/produtor', 'ProdutorController@index')->name('produtor');

        //Route::get('/produtor/cadastrar', 'ProdutorController@cadastrarProdutor')->name('produtor.cadastrar');
        Route::get('/produtor/alterar', 'ProdutorController@alterarProdutor')->name('produtor.alterar');

        Route::view('/produtor/cadastrar_produto', 'produtor.produto_cadastrar')->name('produto.cadastrar');
        Route::post('/produtor/cadastrar_produto', 'ProdutorController@cadastrarProduto');

        Route::get('/produtor/alterar_produto/{id}', 'ProdutorController@editarProduto')->where('id', '[0-9]+')->name('produto.alterar');
        Route::post('/produtor/alterar_produto/{id}', 'ProdutorController@cadastrarProduto');

        //Route::get('/produtor/cadastrar_endereco', 'ProdutorController@cadastrarEndereco')->name('produtor.endereco.cadastrar');

    });

});