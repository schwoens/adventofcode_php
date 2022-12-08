<?php

use PhpParser\Node\Expr\FuncCall;

require_once("resources/Day.php");

class Day6 implements Day
{
    public function __construct($puzzleInput)
    {
        $this->PUZZLE_INPUT = $puzzleInput;
        $this->queue = [];
        $this->currentIndex = 0;
    }

    public function part1()
    {
        $this->queueLength = 4;
        return $this->getFirstMarkerPosition();
    }

    public function part2()
    {
        $this->queueLength = 14;
        return $this->getFirstMarkerPosition();
    }

    private function getFirstMarkerPosition(): int
    {
        $this->currentIndex = 0;
        $characterBuffer = str_split($this->PUZZLE_INPUT);
        foreach(array_values($characterBuffer) as $character) {
            $this->addToQueue($character);

            if ($this->currentIndex === 4635) {
                var_dump($this->queue);
            }

            if ($this->hasUniqueQueue()) {
                return $this->currentIndex;
            }
        }
        
    }

    private function addToQueue(string $character): void
    {
        $this->queue[] = $character;
        $this->currentIndex++;

        if (count($this->queue) > $this->queueLength) {
            unset($this->queue[0]);
            $this->queue = array_values($this->queue);
        }
    }

    private function hasUniqueQueue(): bool
    {
        return $this->queue === array_unique($this->queue) and count($this->queue) === $this->queueLength;
    }
}