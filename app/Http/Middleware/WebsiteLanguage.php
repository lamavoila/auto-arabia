<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class WebsiteLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (is_null(session('locale'))) {
            session()->put('locale', 'en');
        }
        App::setLocale(session()->get('locale'));
        View::share('right', session()->get('locale')=="en"?"right":"left");
        return $next($request);
    }
}
