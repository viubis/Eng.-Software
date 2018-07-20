<?php
/**
 * Created by PhpStorm.
 * User: Victória Gomes
 * Date: 08/07/2018
 * Time: 23:05
 */

namespace mine_apple\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use mine_apple\Mail\envioEmail;


class FaleConoscoController
{
    /**
     * Envia uma mensagem para o email do site, provinda de um consumidor
     * @author Victória Gomes
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function enviar(Request $request){

        Mail::to('mineapple.organicstore@gmail.com')->send(new envioEmail($request));
        return view('fale_conosco')->with('Email enviado com sucesso!');
    }

}
