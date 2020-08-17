<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function animal()
    {
        return $this->belongsTo(Owner::class); 
    }


    // public function dangerous()
    // {
    //     if($this->biteyness >= 3){
    //         return true;
    //     }

    //     else return false;
       
    // }


}
