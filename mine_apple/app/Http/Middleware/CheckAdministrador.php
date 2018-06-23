<?php

namespace mine_apple\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdministrador
{
    //Verifica se o usuário é administrador;
    public function handle($request, Closure $next)
    {
        if(Auth::user()->administrador == null) {
            return redirect()->route('index');
        }

        return $next($request);
    }
}
