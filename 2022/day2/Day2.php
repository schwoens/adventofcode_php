<?php

class Day2 {

    public function __construct(string $puzzle_input) {
        $this->PUZZLE_INPUT = $puzzle_input;

        /*
        A | X - Rock - 1
        B | Y - Paper - 2
        C | Z - Scissors - 3

        X - Lose
        Y - Draw
        Z - Win
        */

        $this->ruleSet1 = [
            "A X" => 4,
            "A Y" => 8,
            "A Z" => 3,
            "B X" => 1,
            "B Y" => 5,
            "B Z" => 9,
            "C X" => 7,
            "C Y" => 2,
            "C Z" => 6
        ];  
        
        $this->ruleSet2 = [
            "A X" => 3,
            "A Y" => 4,
            "A Z" => 8,
            "B X" => 1,
            "B Y" => 5,
            "B Z" => 9,
            "C X" => 2,
            "C Y" => 6,
            "C Z" => 7
        ];

    }

    public function part1() {
        return $this->playRounds($this->ruleSet1);
    }

    public function part2() {
        return $this->playRounds($this->ruleSet2);
    }

    private function play(string $round, array $ruleset): int {
  
        return $ruleset[$round];
    }

    private function playRounds(array $ruleset): int {
        $rounds = explode("\n", $this->PUZZLE_INPUT);
        $totalScore = 0;
        foreach ($rounds as $round) {
            $totalScore += $this->play($round, $ruleset);
        }
        return $totalScore;
    }
}