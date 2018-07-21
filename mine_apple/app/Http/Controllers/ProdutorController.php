<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mine_apple\Assinatura;
use mine_apple\Assinatura_Produto;
use mine_apple\Avaliacao;
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

    /*const LOG_ID_CADASTRO = 1;
    const LOG_ID_ALTERACAO_CADASTRO = 2;
    const LOG_ID_CADASTRO_PRODUTO = 6;
    const LOG_ID_ALTERACAO_PRODUTO = 7;*/

    /**
    * Retorna index
    * @author Rafael
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index(){
        return view('index');
    }

    /**
     * Retorna o formulário de cadastro
     * @author Lucas Alves
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getForm(){
            $bancos = Banco::all(['id', 'nome']);
            $estados = Estado::all(['id', 'nome']);
            return view('cadastro_de_produtor',compact('estados','bancos'));
    }

    /**
     * Cadastra um Produtor
     * @author Lucas Alves
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
        $financas->usuario_id = Auth::user()->id;
        $financas->save();

        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y/m/d');
        $hora = date('H:i');
        $log = new Log;
        $log->usuario_id = Auth::user()->id;
        $log->operacao_id = 1;
        $log->data = $data;
        $log->hora = $hora;
        $log->save();


        return redirect()->route('produtor');



    }

    /**
     * @author Bruno Claudino
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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

        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y/m/d');
        $hora = date('H:i');
        $log = new Log;
        $log->usuario_id = Auth::user()->id;
        $log->operacao_id = LOG_ID_ALTERACAO_CADASTRO;
        $log->data = $data;
        $log->hora = $hora;
        $log->save();

        return view('dados_cadastrais_de_produtor', compact('endereco', 'contas','bancos', 'cidades', 'estados'));
    }

    /**
     * Retorna a tela dados cadastrais com todos os dados
     * @author Lucas Alves
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
     * Cadastra um produto
     * @author Sesaque Oliveira
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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

        if($request->imagem1 != null) {
            $nomeImagem = $produto->nome . '_' . $produto->id . '.' . $request->imagem1->getClientOriginalExtension();
            $request->imagem1->storeAs('produto_imagens', $nomeImagem);
            $categoria = Categoria::where('id', '=', $produto->categoria_id)->first();

            $foto = new Foto();
            $foto->produto_id = $produto->id;
            $foto->path = "images/" . $categoria->nome . "/" . $nomeImagem;
            $foto->save();

            $tmpName = $_FILES['imagem1']['tmp_name']; // Recebe o arquivo temporário.
            move_uploaded_file($tmpName, "images/" . $categoria->nome . "/" . $nomeImagem);
        }
        if($request->imagem2 != null) {
            $nomeImagem = $produto->nome . '_' . $produto->id . '.' . $request->imagem2->getClientOriginalExtension();
            $request->imagem2->storeAs('produto_imagens', $nomeImagem);
            $categoria = Categoria::where('id', '=', $produto->categoria_id)->first();

            $foto = new Foto();
            $foto->produto_id = $produto->id;
            $foto->path = "images/" . $categoria->nome . "/" . $nomeImagem;
            $foto->save();

            $tmpName = $_FILES['imagem2']['tmp_name']; // Recebe o arquivo temporário.
            move_uploaded_file($tmpName, "images/" . $categoria->nome . "/" . $nomeImagem);
        }

        if($request->imagem3 != null) {
            $nomeImagem = $produto->nome . '_' . $produto->id . '.' . $request->imagem3->getClientOriginalExtension();
            $request->imagem3->storeAs('produto_imagens', $nomeImagem);
            $categoria = Categoria::where('id', '=', $produto->categoria_id)->first();

            $foto = new Foto();
            $foto->produto_id = $produto->id;
            $foto->path = "images/" . $categoria->nome . "/" . $nomeImagem;
            $foto->save();

            $tmpName = $_FILES['imagem3']['tmp_name']; // Recebe o arquivo temporário.
            move_uploaded_file($tmpName, "images/" . $categoria->nome . "/" . $nomeImagem);
        }



        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y/m/d');
        $hora = date('H:i');
        $log = new Log;
        $log->usuario_id = Auth::user()->id;
        $log->operacao_id = 6;
        $log->data = $data;
        $log->hora = $hora;
        $log->save();
        return redirect()->route('meusProdutos');
    }

    /**
     * Edita as informações de um produto
     * @author Sesaque Oliveira
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editarProduto(Request $request) {
        $produto = Produto::find($request->id);
        if($produto == null || $produto->produtor_id != Auth::user()->produtor->usuario_id)
            return redirect()->route('index');

        return view('alterar_dados_produtos', compact('produto'));
    }


    /**
     * Alterar as informações relacionadas a um produtor
     * @author Bruno Claudino
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */ 
    public function alterarInfoProduto(Request $request){
        $dados = $request->all();
        $produto = Produto::where('id', '=', $request->id)->first();
        $produto->update(['seg' => 0, 'ter' => 0, 'qua' => 0, 'qui' => 0, 'sex' => 0, 'sab' => 0, 'dom' => 0]);
        foreach ($request->entrega as $dia => $status) {
            $produto[$dia] = true;
        }
        $produto->update($dados);

        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y/m/d');
        $hora = date('H:i');
        $log = new Log;
        $log->usuario_id = Auth::user()->id;
        $log->operacao_id = 7;
        $log->data = $data;
        $log->hora = $hora;
        $log->save();

        return view('alterar_dados_produtos', compact('produto'));

    }

    /**
     * Cadastra um endereço 
     * @author Lucas Alves
     * @param Request $request
     * @return int
     *
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
     * 
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

    /**
     * Retorna a tela reputação de produtor
     * @author Lucas Alves
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function reputacaoProdutor(){
        $avaliacoes = Avaliacao::all();
        return view('reputacao', compact('avaliacoes'));
    }

    /**
     * Retorna a tela relacionada ao resumo do produtor 
     * @author Lucas Alves
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resumoConta() {
        return view('Resumo');
    }

    /**
     * Retorna os produtos relacionados a um determinado produtor
     * @author Victória Gomes
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function meusProdutos() {
        $produtos = Produto::where('produtor_id', '=', Auth::user()->id)->get();
        $embalagens = Embalagem::all();
        $categorias = Categoria::all();
        return view('produtos_cadastrados', compact('produtos', 'embalagens', 'categorias'));
    }


    /**
     * Retorna os assinaturas relacionados a um determinado produtor
     * @author Victória Gomes
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function assinaturas() {
        $assinaturas = Assinatura::where('produtor_id', '=', Auth::user()->id)->get();
        $assProdutos = Assinatura_Produto::all();
        $prodInfo = Produto::all();
        return view('assinaturas_produtor_deve_atender', compact('assinaturas', 'assProdutos', 'prodInfo'));
    }
}
