<?php

use PHPUnit\Framework\TestCase;
require_once('Day8.php');

final class Test extends TestCase 
{
    public function testPart1() 
    {
        $PUZZLE = new Day8("30373\n25512\n65332\n33549\n35390");

        $this->assertEquals(
            21,
            $PUZZLE->part1(),
        );
    }

}