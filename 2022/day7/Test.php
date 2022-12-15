<?php

use PHPUnit\Framework\TestCase;
require_once('Day7.php');

final class Test extends TestCase 
{
    public function testPart1() 
    {
        $PUZZLE = new Day7("mjqjpqmgbljsphdztnvjfqwrcgsmlb");

        $this->assertEquals(
            7,
            $PUZZLE->part1(),
        );
    }
}