<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function animal()
    {
        return $this->belongsTo(Owner::class); 
    }

    public function animals() 
    {
        return $this->hasMany(Treatments::class); 
    }

    
    public function dangerous()
    {
        if($this->biteyness >= 3)
        {
            return true;
        }
        return false;
    }
}