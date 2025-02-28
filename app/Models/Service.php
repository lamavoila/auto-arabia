<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";

    protected $appends = ['title', 'sub_title','content'];

    public function getTitleAttribute()
    {
        if (App::isLocale('en')) {
            return $this->title_en;
        } else {
            return $this->title_ar;
        }
    }

    public function getSubTitleAttribute()
    {
        if (App::isLocale('en')) {
            return $this->sub_title_en;
        } else {
            return $this->sub_title_ar;
        }
    }

    public function getContentAttribute()
    {
        if (App::isLocale('en')) {
            return $this->content_en;
        } else {
            return $this->content_ar;
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
