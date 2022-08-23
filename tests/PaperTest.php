<?php

namespace Tests;

use App\Models\Paper;
use PHPUnit\Framework\TestCase;

class PaperTest extends TestCase
{
    /** @test */
    public function test_is_a_Paper()
    {
        // Given
        $paper = new Paper();
        // When
        $result = $paper->getType();
        // Then
        $this->assertEquals("Paper",$result);
    }
    
}