<?php

//Rotas púlblicas ----------------------------------------------------------------------------------
Route::middleware(['auth.publico'])->group(function () {
    Route::get('/', 'PublicoController@index')->name('index');
    Route::post('/', 'PublicoController@getPesquisaCategoriasNome')->name('pesquisa');

    Route::post('/adicionar_carrinho', 'ConsumidorController@adicionarCarrinho');
    Route::post('/remover_carrinho', 'ConsumidorController@removerDoCarrinho')->name('remover_carrinho');
    Route::get('/carrinho_de_compras','ConsumidorController@getCarrinhoCompras')->name('carrinho_compras');
    Route::post('/carrinho_de_compras','ConsumidorController@atualizarCarrinho')->name('atualizar_carrinho');

    Route::get('/sobre', 'PublicoController@sobre');

    Route::get('/fale_conosco', 'PublicoController@faleConosco');

    Route::post('/enviar', 'FaleConoscoController@enviar')->name('enviarMensagem');

    Route::get('/produto/{id}', 'PublicoController@getDetalhesProduto');

    Route::get('/pesquisa_produtos', 'PublicoController@getPesquisaTodosProdutos');

    Route::get('/pesquisa_produtos/{categoria}', 'PublicoController@getPesquisaCategoriasProdutos')->where('categoria', '[0-7]+');


    //Rotas de cadastro e recuperação de senha ---------------------------------------------------------
    Auth::routes();


    //Rotas para facebook socialite -----------------------------------------------------------
    Route::get('/login/facebook', 'Auth\LoginController@redirectToProvider');
    Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallback');


    //Rotas para google socialite -----------------------------------------------------------
    Route::get('/login/google', 'Auth\LoginController@redirectToProvider1');
    Route::get('/login/google/callback', 'Auth\LoginController@handleProviderCallback1');
});

//Rotas para usuários cadastrados ------------------------------------------------------------------
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'PublicoController@index');


    //Rotas para administadores --------------------------------------------------------------------
    Route::middleware(['auth.administrador'])->group(function () {
        Route::get('/administrador', 'AdministradorController@index')->name('administrador');

        Route::get('/gerenciamento/consumidor', 'AdministradorController@getGerenciamentoConsumidores');

        Route::get('/gerenciamento/produtor', 'AdministradorController@getGerenciamentoProdutores');

        Route::get('/gerenciamento/sistema', 'AdministradorController@getGerenciamentoSistema')->name('gerenciamento_sistema');

        Route::post('/gerenciamento/produtor', 'AdministradorController@banirProdutor');


        Route::post('/gerenciamento/consumidor', 'AdministradorController@banirConsumidor');

        Route::get('/relatorio/geral', 'AdministradorController@getRelatorioGeral');

        Route::post('/backup/sistema', 'AdministradorController@dadosBackup')->name('backup');

        Route::get('/backup/deletar/{nomeArquivo}', 'AdministradorController@deletarBackup')->name('backup.deletar');


    });



    //Rotas para consumidores ----------------------------------------------------------------------
    Route::middleware(['auth.consumidor'])->group(function () {
        Route::get('/consumidor', 'ConsumidorController@index')->name('consumidor');

        Route::get('/consumidor/adicionar_cartao', 'ConsumidorController@adicionarCartao')->name('consumidor.adicionar.cartao');

        Route::get('/consumidor/cadastrar_endereco', 'ConsumidorController@getCadastrarEndereco');

        Route::get('/consumidor/cadastrar_endereco', 'ConsumidorController@cadastrarEndereco');

        Route::post('/consumidor/cadastrar_endereco', 'ConsumidorController@cadastrarEndereco')->name('consumidor.cadastrar.endereco');

        Route::get('/meusDados', 'ConsumidorController@viewAlterarDadosConsumidor');

        Route::post('/consumidor/alterar', 'ConsumidorController@alterarConsumidor')->name('consumidor.alterar');

        Route::get('/avaliacao_assinatura', 'ConsumidorController@getAvaliacaoAssinatura');

        Route::get('/realizacao_assinatura', 'ConsumidorController@getRealizacaoAssinatura');

        Route::post('/realizacao_assinatura', 'ConsumidorController@finalizaCompra');

        Route::get('/desativar_assinatura/{id}', 'ConsumidorController@desativarAssinatura')->where('id', '[0-9]+');

        Route::get('/ativar_assinatura/{id}', 'ConsumidorController@ativarAssinatura')->where('id', '[0-9]+');

        Route::post('/valida_cartao', 'ConsumidorController@validaCartao');

        Route::get('/minhasCompras/detalhesCompras/{id}', 'ConsumidorController@detalheCompra')->where('id', '[0-9]+');

        Route::get('/minhascompras', 'ConsumidorController@minhasCompras');
    });


    //Rotas para produtores -----------------------------------------------------------------------
    Route::middleware(['auth.produtor'])->group(function () {
        Route::get('/produtor', 'ProdutorController@index')->name('produtor');

        Route::post('/produtor/alterar', 'ProdutorController@alterarProdutor')->name('produtor.alterar');

        Route::view('/produtor/cadastrar_produto', 'cadastro_de_produtos')->name('produto.cadastrar');
        Route::post('/produtor/cadastrar_produto', 'ProdutorController@cadastrarProduto');

        Route::get('/produtor/alterar_produto/{id}', 'ProdutorController@editarProduto')->where('id', '[0-9]+')->name('produto.alterar');
        Route::get('/produtor/infos_produto/{id}', 'ProdutorController@alterarInfosProdutos')->where('id', '[0-9]+')->name('produto.alterarInfo');
        Route::post('/produtor/alterar_produto/{id}', 'ProdutorController@cadastrarProduto');

        Route::get('/dados_cadastrais', 'ProdutorController@dadosCadastrais');

        Route::post('meusProdutos/editarProduto', 'ProdutorController@alterarInfoProduto')->name('alterarProdutos');

        Route::get('/produtor/reputacao', 'ProdutorController@reputacaoProdutor');

        Route::get('/resumo/conta', 'ProdutorController@resumoConta');

        Route::get('/meusProdutos', 'ProdutorController@meusProdutos')->name('meusProdutos');

        Route::get('/assinaturas', 'ProdutorController@assinaturas');

        //Route::get('/produtor/cadastrar_endereco', 'ProdutorController@cadastrarEndereco')->name('produtor.endereco.cadastrar');
    });


    //Rotas para usuários que não definiram o tipo de conta ----------------------------------------
    Route::middleware(['auth.usuario'])->group(function () {
        Route::view('/tipo_cadastro', 'tipo_de_cadastro_a_realizar')->name('tipo_cadastro');
        Route::view('/home', 'tipo_de_cadastro_a_realizar');

        Route::get('/cadastro_produtor', 'ProdutorController@getForm');
        Route::post('/cadastro_produtor', 'ProdutorController@cadastrarProdutor')->name('cadastrarProdutor');

        Route::get('/cadastro_consumidor', 'ConsumidorController@getForm');
        Route::post('/cadastro_consumidor', 'ConsumidorController@cadastrarConsumidor')->name('cadastrarConsumidor');
    });
});

Route::post('/retorna_cidades', 'CidadeController@retornaCidades')->name('retornaCidades');
