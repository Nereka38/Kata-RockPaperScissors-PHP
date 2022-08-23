<?php

namespace Tests;

use App\Models\Player;
use App\Models\Rock;
use App\Models\Scissors;
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    /** @test */
    public function test_player_chose_rock()
    {
        $player = new Player;
        $rock = new Rock;
        
        $player->chose("Rock");

        $this->assertEquals($rock, $player->getFigure());
    }

    /** @test */
    public function test_player_chose_scissors()
    {
        $player = new Player;
        $scissors = new Scissors;

        $player->chose("Scissors");

        $this->assertEquals($scissors, $player->getFigure());
    }
    


    
}