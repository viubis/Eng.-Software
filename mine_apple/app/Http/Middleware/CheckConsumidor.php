<?php

namespace mine_apple\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckConsumidor
{
    //Verifica se o usuário é consumidor;
    public function handle($request, Closure $next)
    {
        if(Auth::user()->consumidor == null) {
            return redirect()->route('index');
        }

        return $next($request);
    }
}
