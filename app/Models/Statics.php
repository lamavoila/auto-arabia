<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Statics extends Model
{
    protected $table = "statics";

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<string>
     */
    protected $appends = ['title'];

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

    public static function boot()
    {
        parent::boot();
        static::addGlobalScope('active', function (Builder $builder) {
            $builder->where('active', 1);
           $builder->where('deleted_at', null);
             $builder->orderby('sorting');
        });
    }
}
