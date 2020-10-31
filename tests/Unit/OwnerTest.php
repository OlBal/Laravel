<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Owner;

class OwnerTest extends TestCase

{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */

    private $owner;

    public function testNewOwner()
    {
        Owner::create([
            "first_name" => "Skittles",
            "last_name" => "Mcgriff",
            "telephone" => "42069696969",
            "email" => "flavour@country.io",
            "address_1" => "20 Under the Bed",
            "address_2" => "Downtown",
            "town" => "Bristol",
            "postcode" => "des 340"
        ]);

            $newOwner = Owner::all()->first();
        
            $this->assertSame("Skittles", $newOwner->first_name);
          
            

    }





}

