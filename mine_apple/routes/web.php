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

//Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('register', 'Auth\RegisterController@register');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

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
	'usuario'		=> 'UsuarioController',
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
