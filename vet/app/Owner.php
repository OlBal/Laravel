<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Animal;

class Owner extends Model
{

    protected $fillable = [
        "first_name",
        "last_name",
        "telephone",
        "address_1",
        "address_2",
        "town",
        "postcode",
        "email"
    ];
    
    public function fullName()
    {
        return $this->first_name.' '.$this->last_name;
    }

    public function fullAddress()
    {
        $address = $this->address_1.", ";
        if ($this->address_2 != ''){
            $address .= $this->address_2.", ";
        }
        $address .= $this->town.", ";
        $address .= $this->postcode;

        return $address;
    }

    public static function haveWeBananas($number)
    {
        if ($number < 1) {
            return "No we have no bananas";
        }elseif ($number === 1){
            return "Yes we have {$number} banana";
        }

        return "Yes we have {$number} bananas";
    }

    public static function findEmail($email)
    {
        $matches = Owner::where('email', $email)->get();

        if (count($matches) > 0){
            return true;
        }

        return false;
    }

    public function animals() 
    {
        return $this->hasMany(Animal::class); 
    }

    

}