<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mine_apple\Categoria;
use mine_apple\Embalagem;
use mine_apple\Foto;
use mine_apple\Produto;
use mine_apple\Estado;
use mine_apple\Cidade;
use mine_apple\Conta;
use mine_apple\Banco;

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
    public function cadastrarProdutor(Request $request) {




        //Informações Produtor
        $produtor = new Produtor();
        $produtor->usuario_id = Auth::user()->id;
        $produtor->cnpj = $request->cnpj;
        $produtor->nomeFantasia = $request->nomeFantasia;
        $produtor->razaoSocial = $request->razaoSocial;
        $produtor->telefone = $request->telefone;
        $produtor->raioEntrega = $request->raioEntrega;
        $produtor->avaliacao = 0;
        

        $produtor->endereco_id = cadastrarEndereco($request);
        cadastrarBanco($request);

        $produtor->save();

    }

    /**
     * @author Bruno Claudino
     * @param Request $request
     * @return string
     */
    public function alterarProdutor(Request $request) {
        $produtor = Auth::user();
        $produtor->fill($request->all()->save());

        return view('dados_cadastrais_de_produtor', $produtor->id)->with('info', 'Dados alterados com sucesso!');
    }

    /**
     * @author Sesaque Oliveira
     * @param Request $request
     * @return string
     */
    public function cadastrarProduto(Request $request) {
        //Obs. O log e o tratamento de erros serão implementados junto com o método alterarProduto e editarProduto dia 28/06


        //Busca dependências
        $produtor = Auth::user()->produtor;
        $categoria = Categoria::where('nome', $request['categoria'])->first();
        $embalagem = Embalagem::where('tipo', $request['embalagem'])->first();


        //Criar e salva o novo produto
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

        $produto->save();


        //Salva a imagem
        $nomeImagem = $produto->produtor_id . '_' . $produto->id . '.' . $request->imagem->getClientOriginalExtension();
        $request->imagem->storeAs('produto_imagens', $nomeImagem);

        $foto = new Foto();
        $foto->produto_id = $produto->id;
        $foto->path = "storage/produto_imagens/" . $nomeImagem;
        $foto->save();


        return redirect()->route('produtor.produto.cadastrar');
    }

    /**
     * @author Sesaque Oliveira
     * @param Request $request
     * @return string
     */
    public function editarProduto(Request $request) {

    }

    /**
     * @author Sesaque Oliveira
     * @param Request $request
     * @return string
     */
    public function alterarProduto(Request $request) {

    }

    /**
     * @author Lucas Alves
     * @param Request $request
     * @return int
     */
    public function cadastrarEndereco(Request $request) {
        $endereco = new Endereco();
        $endereco->rua = $request->rua;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        return $endereco->id;
    }

    /**
     * @author Lucas Alves
     * @param Request $request
     * @return string
     */
    public function cadastrarConta(Request $request) {
        $conta = new Conta();
        $conta->produtor_id = Auth::user()->id;
        $conta->idBanco = $request->idBanco;
        $conta->numeroConta = $request->numeroConta;
        $conta->agencia = $request->agencia;
        $conta->digito = $request->digito;
    }
}
