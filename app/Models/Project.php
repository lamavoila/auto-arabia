<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Project extends Model
{
    protected $table = "projects";

    protected $with = ["solution"];
    /**
     * The accessors to append to the model's array form.
     *
     * @var array<string>
     */
    protected $appends = ['title', 'description', "brands", "services"];

    /**
     * Get Name depending on the current website lang
     *
     * @return string
     */
    public function getTitleAttribute()
    {
        if (App::isLocale('en')) {
            return $this->title_en;
        } else {
            return $this->title_ar;
        }
    }

    /**
     * Get caption depending on the current website lang
     *
     * @return string
     */
    public function getDescriptionAttribute()
    {
        if (App::isLocale('en')) {
            return $this->description_en;
        } else {
            return $this->description_ar;
        }
    }
    public function getBrandsAttribute()
    {
        return Brand::whereIn("id", explode(",", $this->brand_id))->get();
    }
    public function getServicesAttribute()
    {
        return Service::whereIn("id", explode(",", $this->service_id))->get();
    }

    public static function boot()
    {
        parent::boot();
        static::addGlobalScope('active', function (Builder $builder) {
            $builder->where('active', 1);
            $builder->where('deleted_at', null);
            $builder->orderby('sorting');
        });
    }

    public function solution()
    {
        return $this->belongsTo(Solution::class);
    }

}
