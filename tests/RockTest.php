<?php

namespace Tests;

use App\Models\Rock;
use PHPUnit\Framework\TestCase;

class RockTest extends TestCase
{
    /** @test */
    public function test_is_a_rock()
    {
        // Given
        $rock = new Rock();
        // When
        $result = $rock->getType();
        // Then
        $this->assertEquals("Rock",$result);
    }
    
}