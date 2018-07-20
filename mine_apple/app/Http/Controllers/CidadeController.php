<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use mine_apple\Estado;
use mine_apple\Cidade;

class CidadeController extends Controller
{
    /**
     * Retorna a lista de cidades pertencentes a determinado estado
     * 
     * @author Lucas Alves
     * @param Request $request
     * @return string
     */
    public function retornaCidades(Request $request){
    	$id = $request->estado;

    	$retorno = null;

    	$cidades = Cidade::where('estado_id', $id)->get();

    	foreach ($cidades as $cidade) {
    		$retorno .= "<option value='".$cidade->id ."'> ".$cidade->nome." </option>";
    	}

    	return $retorno;

    }
}
