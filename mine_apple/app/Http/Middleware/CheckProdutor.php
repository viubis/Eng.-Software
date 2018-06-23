<?php

namespace mine_apple\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckProdutor
{
    //Verifica se o usuário é produtor;
    public function handle($request, Closure $next)
    {
        if(Auth::user()->produtor == null) {
            return redirect()->route('index');
        }

        return $next($request);
    }
}
