<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FizzBuzz extends Model
{

    private $dictionary = 
    [
        3 => "Fizz",
        5 => "Buzz",
        7 => "Rarr"
    ];

  
    public function forNumber(int $num) : string
    {
        $result ='';

        foreach($this->dictionary as $val => $str )
        {
        if ( $num%$val === 0)
        {
            $result.= $str;
        }
    }
   if ($result)
        { return $result;}
   return "{$num}";
    }
}
