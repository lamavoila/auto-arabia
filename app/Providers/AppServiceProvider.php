<?php
namespace App\Providers;

use Illuminate\Support\Facades\App;
use App\Models\Service;
use App\Models\Solution;
use App\Models\Project;
use App\Models\Menu;
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
        $services  = Service::all();
        $solutions_menu = Solution::where("parent_id",null)->with("child_solutions")->get();
        $projects = Project::all();
        $headerMenu = Menu::where("type","header")->get();
        View::share([
            'headerMenu'  => $headerMenu,
            'services'  => $services,
            'solutions_menu' => $solutions_menu,
            'projects' => $projects,
        ]);
    }
}
