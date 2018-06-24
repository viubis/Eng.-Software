<?php

namespace mine_apple\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUsuario
{
    //Verifica se o usuário não definiu o tipo da conta
    public function handle($request, Closure $next)
    {
        if(Auth::user()->administrador != null || Auth::user()->consumidor != null ||
            Auth::user()->produtor != null) {
            return redirect()->route('index');
        }

        return $next($request);
    }
}
