<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicoController extends Controller
{
    //Métodos para manipular as views públicas

    /**
     * @author O nome do desenvolvedor
     * @param Request $request
     * @return string
     */
    public function exemplo(Request $request) {
        return  'Você ...';
    }

    public function index() {
        return view('index');
    }

    public function getTipoCadastro(){
        return view('tipo_de_cadastro_a_realizar');
    }
}
