<?php

use PHPUnit\Framework\TestCase;
require_once('Day2.php');

final class Test extends TestCase {

    public function testPart1() {
        $PUZZLE = new Day2("A Y\nB X\nC Z");

        $this->assertEquals(
            15,
            $PUZZLE->part1()
        );
    }

    public function testPart2() {
        $PUZZLE = new Day2("A Y\nB X\nC Z");

        $this-> assertEquals(
            12,
            $PUZZLE->part2()
        );
    }
}