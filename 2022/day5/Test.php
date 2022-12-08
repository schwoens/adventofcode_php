<?php

use PHPUnit\Framework\TestCase;
require_once('Day5.php');

final class Test extends TestCase 
{

    public function testPart1() 
    {
        $puzzle = new Day5("    [D]    \n[N] [C]    \n[Z] [M] [P]\n 1   2   3 \n\n" .
            "move 1 from 2 to 1\nmove 3 from 1 to 3\nmove 2 from 2 to 1\nmove 1 from 1 to 2");

        $this->assertEquals(
            "CMZ",
            $puzzle->part1()
        );
    }

    public function testPart2()
    {
        $puzzle = new Day5("    [D]    \n[N] [C]    \n[Z] [M] [P]\n 1   2   3 \n\n" .
            "move 1 from 2 to 1\nmove 3 from 1 to 3\nmove 2 from 2 to 1\nmove 1 from 1 to 2");

        $this->assertEquals(
            "MCD",
            $puzzle->part2()
        );
    }

    public function testGetCratesFromDrawing() 
    {
        $puzzle = new Day5("");
        $puzzle->translateCratesFromDrawing("    [D]    \n[N] [C]    \n[Z] [M] [P]\n 1   2   3 ");

        $this->assertEquals(
            [["Z", "N"], ["M", "C", "D"], ["P"]],
            $puzzle->crates,
        );
    }

    public function testExecuteInstructionOld()
    {
        $puzzle = new Day5("");
        $puzzle->translateCratesFromDrawing("    [D]    \n[N] [C]    \n[Z] [M] [P]\n 1   2   3 ");
        $puzzle->executeInstruction("move 1 from 2 to 1", Model::Old);
        
        $this->assertEquals(
            [["Z", "N", "D"], ["M", "C"], ["P"]],
            $puzzle->crates,
        );
    }

    public function testExecuteInstructionNew()
    {
        $puzzle = new Day5("");
        $puzzle->translateCratesFromDrawing("    [D]    \n[N] [C]    \n[Z] [M] [P]\n 1   2   3 ");
        $puzzle->executeInstruction("move 2 from 2 to 1", Model::New);
        
        $this->assertEquals(
            [["Z", "N", "C", "D"], ["M"], ["P"]],
            $puzzle->crates,
        );
    }
}