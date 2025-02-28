<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $table = "solutions";
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
