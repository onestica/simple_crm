<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $guarded = ['id','created_at','updated_at'];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->family_name}";
    }

    public function getInputDateAttribute()
    {
        return $this->created_at->format('M d, Y');
    }

    public function contract()
    {
        return $this->belongsTo('App\Contract');
    }
}
