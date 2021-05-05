<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Locale
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
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        else
        {
            $value = $request->cookie('lang_app');
            $lang = array('fr', 'en');
            if(in_array($value, $lang)) {
                session()->put('locale', $value);
                app()->setLocale(session('locale'));
            }
        }
        return $next($request);
    }
}
