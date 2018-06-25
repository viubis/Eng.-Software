<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use mine_apple\Estado;
use mine_apple\Cidade;

class CadastroConsumidorController extends Controller
{
    public function getForm(){
    	$estado = Estado::pluck('nome', 'id');
    	return view('cadastro_de_consumidor',compact('estado'));

    }
}
