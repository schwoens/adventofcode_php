<?php

require_once('resources/Day.php');

class Day8 implements Day 
{

    public function __construct(string $puzzle_input) 
    {
        $this->PUZZLE_INPUT = $puzzle_input;
    }

    public function part1()
    {
        return $this->countVisableTrees();
    }

    public function part2() 
    {

    }

    private function countVisableTrees(): int
    {
        $treeGrid = $this->getTreeGrid();
        $count = 0;

        for ($y = 0; $y < count($treeGrid); $y++) {
            for ($x = 0; $x < count($treeGrid[$y]); $x++) {
                if ($this->isTreeVisable($x, $y, $treeGrid)) {
                    $count++;
                }
            }
        }
        return $count;
    }

    private function isTreeVisable($x, $y, $treeGrid): bool
    {
        $treeHeight = $treeGrid[$y][$x];

        // right
        $xray = $x+1;
        $visable = true;
        while ($xray < count($treeGrid[$y]) and $visable) {
            if ($treeGrid[$y][$xray] >= $treeHeight) {
                $visable = false;
            }
            $xray++;
        }

        if ($visable) {
            return true;
        }


        // left
        $xray = $x-1;
        $visable = true;
        while ($xray >= 0 and $visable) {
            if ($treeGrid[$y][$xray] >= $treeHeight) {
                $visable = false;
            }
            $xray--;
        }

        if ($visable) {
            return true;
        }

        // up
        $yray = $y-1;
        $visable = true;
        while ($yray >= 0 and $visable) {
            if ($treeGrid[$yray][$x] >= $treeHeight) {
                $visable = false;
            }
            $yray--;
        }

        if ($visable) {
            return true;
        }

        // down
        $yray = $y+1;
        $visable = true;
        while ($yray < count($treeGrid) and $visable) {
            if ($treeGrid[$yray][$x] >= $treeHeight) {
                $visable = false;
            }
            $yray++;
        }

        if ($visable) {
            return true;
        }

        return false;
    }

    private function getTreeGrid(): array
    {
        $treeGrid = [];
        foreach (explode("\n", $this->PUZZLE_INPUT) as $line) {
            $row = [];
            foreach (str_split($line) as $character) {
                $row[] = (int) $character;
            }
            $treeGrid[] = $row;
        }
        return $treeGrid;
    }

}