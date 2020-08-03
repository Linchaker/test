<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use src\games\Game;

class GameTest extends TestCase
{
    public function testGetPrize()
    {
        $prize = Game::getPrize(950);
        $this->assertEquals(665, $prize);

        $prize = Game::getPrize(700);
        $this->assertEquals(350, $prize);

        $prize = Game::getPrize(400);
        $this->assertEquals(120, $prize);

        $prize = Game::getPrize(250);
        $this->assertEquals(25, $prize);
    }
}
