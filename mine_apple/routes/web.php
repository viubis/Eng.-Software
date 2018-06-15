<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
	'admin' 		=> 'AdministradorController',
	'assinatura'	=> 'AssinaturaController',
	'avaliacao' 	=> 'AvaliacaoController',
	'banco'			=> 'BancoController',
	'carrinho'		=> 'CarrinhoController',
	'cartao'		=> 'CartaoController',
	'categoria'		=> 'CategoriaController',
	'cidade'		=> 'CidadeController',
	'compra'		=> 'CompraController',
	'consumidor'	=> 'ConsumidorController',
	'conta'			=> 'ContaController',
	'endereco'		=> 'EnderecoController',
	'entrega'		=> 'EntregaController',
	'estado'		=> 'EstadoController',
	'foto'			=> 'FotoController',
	'local'			=> 'LocalController',
	'log'			=> 'LogController',
	'pagamento'		=> 'PagamentoController',
	'produto'		=> 'ProdutoController',
	'produtor'		=> 'ProdutorController',
	'usuario'		=> 'UsuárioController',
	'visitante'		=> 'VisitanteController'
]);


//Rotas de redirecionamento da tela do Visitante
/*Route::get('index', 'VisitanteController@getInicio')->name('inicio');
Route::get('produtos', 'VisitanteController@getProdutos')->name('produtos');
Route::get('sobre', 'VisitanteController@getSobre')->name('sobre');
Route::get('fale_conosco', 'VisitanteController@getContato')->name('contato');
Route::get('login','VisitanteController@getLogin')->name('login');
Route::get('login','VisitanteController@getCadastro')->name('cadastrar');*/

//Rotas de redirecionamento da tela Consumidor
/*Route::get('index', 'ConsumidorController@getInicio')->name('inicio');
Route::get('produtos', 'VisitanteController@getProdutos')->name('produtos');
Route::get('sobre', 'ConsumidorController@getSobre')->name('sobre');
Route::get('fale_conosco', 'ConsumidorController@getContato')->name('contato');*/
