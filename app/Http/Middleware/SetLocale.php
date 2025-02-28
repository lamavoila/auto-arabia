<?php
namespace App\Http\Middleware;

use App;
use Closure;

class SetLocale
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
        $locale = session('locale');
        if ($locale) {
            $locale = session()->put('locale', config('app.locale'));
        }
        $direction = session("locale") == "ar" ? "rtl" : "ltr";
        session()->put("direction", $direction);

        App::setLocale($locale);
        return $next($request);
    }
}
