<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    protected $table = "contact_requests";

    public $timestamps = true;
    protected $fillable = ["name", "email", "message", "active"];
    public static function boot()
    {
        parent::boot();
        static::addGlobalScope('active', function (Builder $builder) {
            $builder->where('active', 1);
            $builder->where('deleted_at', null);
        });
    }
}
