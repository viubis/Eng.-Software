<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    //Métodos para manipular as views visíveis para todos os usuários

    /**
     * @author O nome do desenvolvedor
     * @param Request $request
     * @return string
     */
    public function exemplo(Request $request) {
        return Auth::user()->email . ' é usuário';
    }

    public function home() {
        return view('home');
    }
    public function minhasCompras(){
        return view('minhas_compras');
    }
}
