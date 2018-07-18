<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mine_apple\Categoria;
use mine_apple\Embalagem;
use mine_apple\Financa;
use mine_apple\Foto;
use mine_apple\Produto;
use mine_apple\Estado;
use mine_apple\Cidade;
use mine_apple\Conta;
use mine_apple\Banco;
use mine_apple\Log;
use mine_apple\Produtor;
use mine_apple\Endereco;
use mine_apple\Http\Requests\FormProdutor;

class ProdutorController extends Controller
{
    //Métodos para manipular as views visíveis somente para produtores
    /**
     * @author O nome do desenvolvedor
     * @param Request $request
     * @return string
     */
    public function exemplo(Request $request) {
        return Auth::user()->email . ' é produtor';
    }

    public function index(){
        return view('index');
    }

    /**
     * @author Lucas Alves
     * @return string
     */

    public function getForm(){
            $bancos = Banco::all(['id', 'nome']);
            $estados = Estado::all(['id', 'nome']);
            return view('cadastro_de_produtor',compact('estados','bancos'));
    }

    /**
     * @author Lucas Alves
     * @param Request $request
     * @return string
     */
    public function cadastrarProdutor(FormProdutor $request) {



        //dd($request->all());
        //Informações Produtor
        $produtor = new Produtor;
        $produtor->usuario_id = Auth::user()->id;
        $produtor->cnpj = $request->cnpj;
        $produtor->nomeFantasia = $request->nomeFantasia;
        $produtor->razaoSocial = $request->razaoSocial;
        $produtor->telefone = $request->telefone;
        $produtor->raioEntrega = $request->raioEntrega;
        $produtor->avaliacao = 0;


        $produtor->endereco_id = $this->cadastrarEndereco($request);
        $produtor->acesso = 1;
        //$this->cadastrarConta($request, $produtor);
        $produtor->save();

        $conta = new Conta;
        $conta->produtor_id = Auth::user()->id;
        $conta->banco_id = $request->banco;
        $conta->numero = $request->numeroConta;
        $conta->agencia = $request->agencia;
        $conta->digito = $request->digito;
        $conta->save();

        $financas = new Financa();
        $financas->produtor_id = $produtor->usuario_id;
        $financas->save();

        $log = new Log;
        $log->usuario_id = Auth::user()->id;
        $log->operacao_id = 1;
        $log->data = $data->toDateString();
        $log->hora = $data->toTimeString();
        $log->save();


        return redirect()->route('produtor');



    }

    /**
     * @author Bruno Claudino
     * @param Request $request
     * @return string
     */
    public function alterarProdutor(Request $request) {
//        dd($request->all());
        $dados = $request->all();
        Auth::user()->produtor->update($dados);
        $endereco = Endereco::where('id', '=', Auth::user()->produtor->endereco_id)->first();
        $cidades = Cidade::all();
        $estados = Estado::all();
        $contas = Conta::where('produtor_id', '=', Auth::user()->id);
        $bancos = Banco::all();

        $log = new Log;
        $log->usuario_id = Auth::user()->id;
        $log->operacao_id = 2;
        $log->data = $data->toDateString();
        $log->hora = $data->toTimeString();
        $log->save();

        return view('dados_cadastrais_de_produtor', compact('endereco', 'contas','bancos', 'cidades', 'estados'));
    }

    /**
     * @author Lucas Alves
     * @return string
     */
    public function dadosCadastrais(){
        $produtor = Produtor::where('usuario_id', '=', Auth::user()->id)->first();
        $endereco = Endereco::where('id', '=', $produtor->endereco_id)->first();
        $cidades = Cidade::all();
        $estados = Estado::all();
        $contas = Conta::where('produtor_id', '=', Auth::user()->id);
        $bancos = Banco::all();
        return view('dados_cadastrais_de_produtor', compact('produtor', 'endereco', 'contas','bancos', 'cidades', 'estados'));
    }

    /**
     * @author Sesaque Oliveira
     * @param Request $request
     * @return string
     */
    public function cadastrarProduto(Request $request) {
        //Busca dependências
        $produtor = Auth::user()->produtor;
        $categoria = Categoria::where('nome', $request->categoria)->first();
        $embalagem = Embalagem::where('tipo', $request->embalagem)->first();


        //Criar e salva o produto
        $produto = new Produto(['seg'=>false, 'ter'=>false, 'qua'=>false, 'qui'=>false, 'sex'=>false, 'sab'=>false, 'dom'=>false,]);
        $produto->produtor_id = $produtor->usuario_id;
        $produto->categoria_id = $categoria->id;
        $produto->embalagem_id = $embalagem->id;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->valor = $request->valor;
        $produto->minPorAssinatura = $request->minPorAssinatura;
        $produto->maxPorDia = $request->maxPorDia;
        $produto->freteMax = $request->freteMax;

        foreach ($request->entrega as $dia => $status) {
            $produto[$dia] = true;
        }

        if($request->id != null)
            $produto->id = $request->id;

        $produto->save();


        //Salva a imagem
        Foto::where('produto_id', $produto->id)->delete();

        $nomeImagem = $produto->produtor_id . '_' . $produto->id . '.' . $request->imagem->getClientOriginalExtension();
        $request->imagem->storeAs('produto_imagens', $nomeImagem);

        $foto = new Foto();
        $foto->produto_id = $produto->id;
        $foto->path = "storage/produto_imagens/" . $nomeImagem;
        $foto->save();

        $log = new Log;
        $log->usuario_id = Auth::user()->id;
        $log->operacao_id = 6;
        $log->data = $data->toDateString();
        $log->hora = $data->toTimeString();
        $log->save();


        return redirect()->route('produto.cadastrar');
    }

    /**
     * @author Sesaque Oliveira
     * @param Request $request
     * @return string
     */
    public function editarProduto(Request $request) {
        $produto = Produto::find($request->id);

        if($produto == null || $produto->produtor_id != Auth::user()->produtor->usuario_id)
            return redirect()->route('index');

        $log = new Log;
        $log->usuario_id = Auth::user()->id;
        $log->operacao_id = 7;
        $log->data = $data->toDateString();
        $log->hora = $data->toTimeString();
        $log->save();


        return redirect()->route('produto.cadastrar');


        return view('alterar_dados_produtos')->with('produto', $produto);
    }

    /**
     * @author Lucas Alves
     * @param Request $request
     * @return int
     */
    public function cadastrarEndereco(Request $request) {
        $endereco = new Endereco;
        $endereco->cidade_id = $request->cidade;
        $endereco->rua = $request->rua;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->numero_cep = $request->cep;
        $endereco->save();
        return $endereco->id;
    }

    /**
     * @author Lucas Alves
     * @param Request $request
     * @return string
     */
    public function cadastrarConta(Request $request) {
        $conta = new Conta;
        $conta->produtor_id = Auth::user()->id;
        $conta->banco_id = $request->banco;
        $conta->numero = $request->numeroConta;
        $conta->agencia = $request->agencia;
        $conta->digito = $request->digito;
        $conta->save();
    }

    public function reputacaoProdutor(){
        return view('reputacao');
    }
}
