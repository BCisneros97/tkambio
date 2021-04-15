<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificarApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->route('apiKey') !== 'AbCd123') {
            return response()->json(['info' => 'El api key no es válido.'], 401);
        }

        return $next($request);
    }
}
