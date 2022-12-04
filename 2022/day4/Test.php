<?php

use PHPUnit\Framework\TestCase;
require_once('Day4.php');

final class Test extends TestCase {

    public function testPart1() {

        $puzzle = new Day4("2-4,6-8\n2-3,4-5\n5-7,7-9\n2-8,3-7\n6-6,4-6\n2-6,4-8");

        $this->assertEquals(
            2,
            $puzzle->part1()
        );
    }

    public function testPart2() {

        $puzzle = new Day4("2-4,6-8\n2-3,4-5\n5-7,7-9\n2-8,3-7\n6-6,4-6\n2-6,4-8"); 

        $this->assertEquals(
            4,
            $puzzle->part2()
        );
    }
}