<?php

namespace mine_apple\Http\Controllers;

use mine_apple\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro_de_produtos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

	if ($request->hasFile('filename'))
	{
		$file = $request->file('filename');
		$name = time().$file->getClientOriginalName();
		$file->move(public_path().'images/, $name');
	}
        $produto = new Produto;
	$dias_semana = [];
	
	$produto->nome = $request->get('nome');
	$produto->descricao = $request->get('descricao');
	$produto->valor = $request->get('valor');
	$produto->minPorAssinatura = $request->get('minPorAssinatura');
	$produto->maxPorDia = $request->get('maxPorDia');
	$produto->freteMax = $request->get('freteMax');
	$produto->categoria = $request->get('categoria');
	$produto->unidade =  $request->get('unidade');
	if ( null !==  $request->get('week.seg'))
		$produto->seg = 'true';
	//$produto->seg = $request->get('seg');
	if ( null !==  $request->get('week.ter'))
		$produto->ter = 'true';
	if ( null !== $request->get('week.qua'))
		$produto->qua = 'true';
	if (null !== $request->get('week.qui'))
		$produto->qui = 'true';
	if (null !== $request->get('week.sex'))
		$produto->sex = 'true';
	if (null !== $request->get('week.sab'))
		$produto->sab = true;
	if (null !== $request->get('week.dom'))
		$produto->dom = true;
	//$produto->ter = $request->get('ter');
	//$produto->qua = $request->get('qua');
	//$produto->qui = $request->get('qui');
	//$produto->sex = $request->get('sex');
	//$produto->sab = $request->get('sab');
	//$produto->dom = $request->get('dom');
	$produto->nome_foto = $name;
	$produto->save();

	return redirect('produto')->with('success', 'Information has been added');
	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
