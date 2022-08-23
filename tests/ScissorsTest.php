<?php

namespace Tests;

use App\Models\Scissors;
use PHPUnit\Framework\TestCase;

class ScissorsTest extends TestCase
{
    /** @test */
    public function test_is_a_scissors()
    {
        // Given
        $scissors = new Scissors();
        // When
        $result = $scissors->getType();
        // Then
        $this->assertEquals("Scissors",$result);
    }
    
}