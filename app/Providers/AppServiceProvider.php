<?php
namespace App\Providers;

use App;
use App\Models\Service;
use App\Models\Solution;
use Illuminate\Support\ServiceProvider;
use Schema;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // dd(session()->all());
        $services  = Service::all();
        $solutions = Solution::all();
        View::share([
            'lang'      => App::getLocale(),
            'direction' => (App::getLocale() == "en" ? "ltr" : "rtl"),
            'services'  => $services,
            'solutions' => $solutions,
        ]);
    }
}
