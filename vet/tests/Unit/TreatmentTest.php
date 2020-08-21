<?php

namespace Tests\Unit;
namespace App;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use App\Treatment;


class TreatmentTest extends TestCase
{


    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testFromString1()
    {
        $result = Treatment::fromString("Test");
        $this->assertInstanceOf(Treatment::class, $result);
        $this->assertSame("Test", $result->name); 
    }

    public function testFromString2()
    {
        $result = Treatment::fromString("Hammock"); 
        $this->assertInstanceOf(Treatment::class, $result); 
        $this->assertSame("Hammock", $result->name);
    }

    public function testFromString3()
    {
        $result = Treatment::fromString("name"); 
        $treatment = Treatment::all()->first();
        $this->assertInstanceOf(Treatment::class,$treatment);
        $this->assertSame("name", $treatment->name);
    }

    public function testFromString4()
    {
        $result = Treatment::fromString("name"); 
        $allTreatments = Treatment::where("name", "Test"); $this->assertSame(1, $allTreatments->count());
    }
}

