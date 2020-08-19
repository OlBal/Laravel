<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cracker extends Model
{

private $dictionary = 

[   " " => " ",
    "!" => "a",
    ")" => "b",
    "#" => "c",
    "(" => "d",
    "." => "e",
    "*" => "f",
    "%" => "g",
    "&" => "h",
    ">" => "i",
    "<" => "j",
    "@" => "k",
    "a" => "l",
    "b" => "m",
    "c" => "n",
    "d" => "o",
    "e" => "p",
    "f" => "q",
    "g" => "r",
    "h" => "s",
    "i" => "t",
    "j" => "u",
    "k" => "v",
    "l" => "w",
    "m" => "x",
    "n" => "y",
    "o" => "z",
   
];

public function decrypt($code)
{
    $result='';
    $arr = str_split($code);
    
    foreach($arr as $arrVal)
    {
    foreach ($this->dictionary as $val => $str)
    {
            if ($val === $arrVal)
            {
                $result.=$str;
            }
        }
    }
    return $result;
}


}


