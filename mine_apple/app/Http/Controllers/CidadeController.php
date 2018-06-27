<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use mine_apple\Estado;
use mine_apple\Cidade;

class CidadeController extends Controller
{
    public function retornaCidades(Request $request){
    	$id = $request->estado;

    	$retorno = null;

    	//$cidades =  DB::table('cidade')->select('id', 'nome', 'estado_id')
    	//								->where('estado_id', '=', $id);

    	$cidades = Cidade::where('estado_id', $id)->get();

    	foreach ($cidades as $cidade) {
    		$retorno .= "<option value='".$cidade->id ."'> ".$cidade->nome." </option>";
    	}

    	return $retorno;

    }
}
