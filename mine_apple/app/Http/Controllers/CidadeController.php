<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use mine_apple\Estado;
use mine_apple\Cidade;

class CidadeController extends Controller
{
    public function retornaCidades(Request $request){
    	$id = $request->estado;

    	$cidades =  DB::table('cidade')->where('estado_id', '=', $id);

    	return foreach ($cidades as $cidade) {
    		echo '<option value="{{$cidade->id}}">{{$cidade->nome}}</option>'
    	}

    }
}
