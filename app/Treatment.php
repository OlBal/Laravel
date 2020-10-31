<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Animal;

class Treatment extends Model
{
    protected $fillable = ["name"];

    static public function fromStrings(array $strings) : Collection
    {
        return collect($strings)->map([Tag::class, "fromString"])->unique("name");
    }

    static public function fromString(string $string) : Tag
    {
        $string = trim($string);
        $tag = Tag::where("name", $string)->first();
        return $tag ? $tag : Tag::create(["name" => $string]);
    }

    public $timestamps = false;

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
    public function animals()
    {
        return $this->belongsToMany(Animal::class); 
    }

    protected $fillable = ["name"];

    static public function fromStrings(array $strings) : Collection
    {
        return collect($strings)->map([Tag::class, "fromString"])->unique("name");
    }

    static public function fromString(string $string) : Tag
    {
        $string = trim($string);
        $tag = Tag::where("name", $string)->first();
        return $tag ? $tag : Tag::create(["name" => $string]);
    }

    public $timestamps = false;

   
