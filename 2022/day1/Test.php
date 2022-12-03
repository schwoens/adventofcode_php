<?php

use PHPUnit\Framework\TestCase;
require_once('Day1.php');

final class Test extends TestCase {

    public function testPart1() {
        $PUZZLE = new Day1("1000\n2000\n3000\n\n4000\n\n5000\n6000\n\n7000\n8000\n9000\n\n10000");

        $this->assertEquals(
            24000,
            $PUZZLE->part1()
        );
    }

    public function testPart2() {
        $PUZZLE = new Day1("1000\n2000\n3000\n\n4000\n\n5000\n6000\n\n7000\n8000\n9000\n\n10000");

        $this->assertEquals(
            45000,
            $PUZZLE->part2()
        );
    }
}