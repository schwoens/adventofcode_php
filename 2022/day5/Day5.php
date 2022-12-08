<?php

use PhpParser\Node\Expr\FuncCall;

require_once("resources/Day.php");
require_once("2022/day5/Model.php");

class Day5 implements Day
{

    public function __construct($puzzleInput)
    {
        $this->PUZZLE_INPUT = $puzzleInput;
        $this->crates = [];
    }

    public function part1()
    {
        $this->arrangeCrates(Model::Old);
        return $this->getTopCrateString();
    }

    public function part2()
    {
        $this->arrangeCrates(Model::New);
        return $this->getTopCrateString();
    }

    public function translateCratesFromDrawing(string $drawing): void
    {
        $crates = [];

        $lines = explode("\n", $drawing);

        // pop off unecessary index line from drawing
        array_pop($lines);

        foreach ($lines as $line) {
            $lineSplits = str_split($line, 4);

            foreach (range(0, count($lineSplits) - 1) as $i) {
                // crate name is always the second character in the split
                $crateName = str_split($lineSplits[$i])[1];

                if ($crateName !== " ") {
                    $crates[$i][] = $crateName;
                }
            }
        }
        $this->crates = array_map("array_reverse", $crates);
    }

    public function executeInstruction(string $instruction, Model $model): void
    {
        $splits = explode(" ", $instruction);

        $moveAmount = (int) $splits[1];
        $moveFrom = (int) $splits[3];
        $moveTo = (int) $splits[5];

        if ($model === Model::Old) {
            foreach (range(0, $moveAmount - 1) as $i) {
                $this->crates[$moveTo - 1][] = array_pop($this->crates[$moveFrom - 1]);
            }
        } elseif ($model === Model::New) {
            foreach (range(0, $moveAmount - 1) as $i) {
                $movingCrates[] = array_pop($this->crates[$moveFrom - 1]);
            }

            while (count($movingCrates) > 0) {
                $this->crates[$moveTo - 1][] = array_pop($movingCrates);
            } 
        }
    }

    private function arrangeCrates(Model $model): void
    {
        $split = explode("\n\n", $this->PUZZLE_INPUT);
        $drawing = $split[0];
        $instructions = $split[1];

        $this->translateCratesFromDrawing($drawing);
        
        foreach (explode("\n", $instructions) as $instruction) {
            $this->executeInstruction($instruction, $model);
        }
    }

    private function getTopCrateString(): string
    {
        $string = "";

        foreach (range(0, count($this->crates) - 1) as $i) {
            $string .= $this->crates[$i][count($this->crates[$i]) - 1];
        }
        return $string;
    }
}