<?php

use PHPUnit\Framework\TestCase;
require_once('Day3.php');

final class Test extends TestCase {

    public function testPart1() {
        $PUZZLE = new Day3("vJrwpWtwJgWrhcsFMMfFFhFp\n" .
        "jqHRNqRjqzjGDLGLrsFMfFZSrLrFZsSL\n" .
        "PmmdzqPrVvPwwTWBwg\n" .
        "wMqvLMZHhHMvwLHjbvcjnnSBnvTQFn\n" .
        "ttgJtRGJQctTZtZT\n" .
        "CrZsJsPPZsGzwwsLwLmpwMDw");

        $this->assertEquals(
            157,
            $PUZZLE->part1()
        );
    }

    public function testPart2() {
        $PUZZLE = new Day3("vJrwpWtwJgWrhcsFMMfFFhFp\n" .
        "jqHRNqRjqzjGDLGLrsFMfFZSrLrFZsSL\n" .
        "PmmdzqPrVvPwwTWBwg\n" .
        "wMqvLMZHhHMvwLHjbvcjnnSBnvTQFn\n" .
        "ttgJtRGJQctTZtZT\n" .
        "CrZsJsPPZsGzwwsLwLmpwMDw");

        $this->assertEquals(
            70,
            $PUZZLE->part2()
        );
    }
}
