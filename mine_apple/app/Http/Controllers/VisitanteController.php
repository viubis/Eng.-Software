<?php

namespace App\Http\Controllers;

use App\Visitante;
use Illuminate\Http\Request;

class VisitanteController extends Controller
{
   /*public function getInicio()
   {
        return redirect()->route('home');
   }

   public function getProdutos()
   {
        return redirect()->route('produtos');
   }

   public function getSobre()
   {
        return redirect()->route('sobre');
   }

   public function getContato()
   {
        return redirect()->route('contato');
   }

   public function getLogin()
   {
        return redirect()->route('login');
   }

   public function getCadastro()
   {
        return redirect()->route('cadastro');
   }*/

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visitante  $visitante
     * @return \Illuminate\Http\Response
     */
    public function show(Visitante $visitante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visitante  $visitante
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitante $visitante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visitante  $visitante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitante $visitante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visitante  $visitante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitante $visitante)
    {
        //
    }
}
