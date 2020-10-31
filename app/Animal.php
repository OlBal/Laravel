<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    protected $fillable = [
        'name',
        'type',
        'date_of_birth',
        'weight_kg',
        'height_m',
        'biteyness'
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class); 
    }

    public function name()
    {
        return $this->name;
    }

    public function treatments() 
    {
        return $this->hasMany(Treatments::class); 
    }

    
    public function dangerous() : bool
    {
        if($this->biteyness >= 3)
        {
            return true;
        }
        return false;
    }
}