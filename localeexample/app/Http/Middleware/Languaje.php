<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Languaje
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificar si la sesión tiene 'applocale'
        if (Session::has('applocale') && array_key_exists(Session::get('applocale'), config('languages'))) {
            App::setLocale(Session::get('applocale'));
        } else {
            // Si no hay idioma en sesión, usa el fallback
            App::setLocale(config('app.fallback_locale'));
        }

        return $next($request);
    }
}
