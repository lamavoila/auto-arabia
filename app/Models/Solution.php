<?php
namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $table = "solutions";

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<string>
     */
    protected $appends = ['title', 'description'];

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
    public static function boot()
    {
        parent::boot();
        static::addGlobalScope('active', function (Builder $builder) {
            $builder->where('active', 1);
            $builder->where('deleted_at', null);
            $builder->orderby('sorting');
        });
    }

    public function parent_solution()
    {
        return $this->belongsTo(Solution::class, "parent_id");
    }

    public function child_solutions()
    {
        return $this->hasMany(Solution::class, "parent_id");
    }
}
