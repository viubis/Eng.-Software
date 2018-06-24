<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsumidorController extends Controller
{
    //Métodos para manipular as views visíveis somente para consumidores

    /**
     * @author O nome do desenvolvedor
     * @param Request $request
     * @return string
     */
    public function exemplo(Request $request) {
        return Auth::user()->email . ' é consumidor';
    }

    /**
     * @author Rafael Brito
     * @param Request $request
     * @return string
     */
    public function cadastrarConsumidor(Request $request) {

    }

    /**
     * @author Rafael Brito
     * @param Request $request
     * @return string
     */
    public function alterarConsumidor(Request $request) {

    }

    /**
     * @author Lucas Alves
     * @param Request $request
     * @return string
     */
    public function adicionarCartao(Request $request) {

    }

    /**
     * @author Edcarlos
     * @param Request $request
     * @return string
     */
    public function cadastrarEndereco(Request $request) {

    }
}
