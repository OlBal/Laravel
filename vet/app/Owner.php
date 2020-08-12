<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{

        public static function fullName()
        {
            return $this->first_name." ".$this->last_name;
        }

        public static function fullAddress()
        {
            return Owner::$this->address_1." ".$this->address_2;
        }
}