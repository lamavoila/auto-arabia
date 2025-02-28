<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    protected $table = "highlights";

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
