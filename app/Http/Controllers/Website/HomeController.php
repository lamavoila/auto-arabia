<?
namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Highlight;
use App\Models\Project;
use App\Models\Service;
use App\Models\Solution;
use App\Models\Statics;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Session;

class HomeController extends Controller
{

    public function index()
    {
        $highlights = Highlight::all();
        $brands     = Brand::all();
        $services   = Service::all();
        $projects   = Project::all();
        $statics    = Statics::all();
        $solutions  = Solution::with("parent_solution")->where("parent_id", "<>", "null")->get();
        return view("website.index", compact("highlights", "services", "brands", "solutions", "projects", "statics"));
    }

    public function changeLang()
    {
        if (App::isLocale('en')) {
            session()->put('locale', 'ar');
        } else {
            session()->put('locale', 'en');
        }

        return redirect()->back();
    }

    public function service($slug)
    {
        $service = Service::where("slug", $slug)->first();
        if (! $service) {
            return abort(404);
        }
        $projects = Project::where(DB::raw("CONCAT(',',service_id,',')"), "like", "%," . $service->id . ",%")->get();
        return view("website.innerpages.service", compact("service", "projects"));
    }
    public function services()
    {
        $services = Service::all();
        return view("website.innerpages.services", compact("services"));
    }
    public function solution($slug)
    {
        $solution = Solution::with("parent_solution")->where("slug", $slug)->first();
        if (! $solution) {
            return abort(404);
        }

        $mainSolutions = Solution::where("parent_id", null)->get();
        return view("website.innerpages.solution", compact("solution", "mainSolutions"));
    }
    public function project($slug)
    {
        $project = Project::where("slug", $slug)->first();
        if (! $project) {
            return abort(404);
        }
        return view("website.innerpages.project", compact("project"));
    }
    public function solutions()
    {
        $mainSolutions = Solution::where("parent_id", null)->get();
        $solutions     = Solution::with("parent_solution")->where("parent_id", "<>", null)->get();
        return view("website.innerpages.solutions", compact("solutions", "mainSolutions"));
    }
    public function projects()
    {
        $projects     = Project::all();
        return view("website.innerpages.projects", compact("projects"));
    }
}
