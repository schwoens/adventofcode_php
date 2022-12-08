<?php

use PHPUnit\Framework\TestCase;
require_once('Day6.php');

final class Test extends TestCase 
{
    public function testPart1() 
    {
        $PUZZLE = new Day6("mjqjpqmgbljsphdztnvjfqwrcgsmlb");

        $this->assertEquals(
            7,
            $PUZZLE->part1(),
        );
    }

    public function testPart2() 
    {
        $PUZZLE = new Day6("mjqjpqmgbljsphdztnvjfqwrcgsmlb");

        $this->assertEquals(
            19,
            $PUZZLE->part2(),
        );

        $PUZZLE = new Day6("bvwbjplbgvbhsrlpgdmjqwftvncz");

        $this->assertEquals(
            23,
            $PUZZLE->part2(),
        );

        $PUZZLE = new Day6("nppdvjthqldpwncqszvftbrmjlhg");

        $this->assertEquals(
            23,
            $PUZZLE->part2(),
        );

        $PUZZLE = new Day6("nznrnfrfntjfmvfwmzdfjlvtqnbhcprsg");

        $this->assertEquals(
            29,
            $PUZZLE->part2(),
        );  

        $PUZZLE = new Day6("zcfzfwzzqfrljwzlrfnpqdbhtmscgvjw");

        $this->assertEquals(
            26,
            $PUZZLE->part2(),
        );
    }
}