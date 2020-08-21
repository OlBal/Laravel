<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Animal;

class Treatment extends Model
{
    public $timestamps = false;

    public function treatments()
    {
        return $this->belongsToMany(Animal::class); 
    }

    protected $fillable = ["name"];

    static public function fromString(string $string) : Treatment 
    {
        return $treatment ? $treatment : Treatment::create(["name" => $string]);
    }

}
