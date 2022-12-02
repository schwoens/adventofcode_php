<?php 

class Day1 {

    public function __construct(string $puzzle_input) {
        $this->PUZZLE_INPUT = $puzzle_input;
    }

    public function part1() {
        return max($this->getTotalCalorieList());
    }

    public function part2() {
        $totalCalorieList = $this->getTotalCalorieList();
        return array_sum($this->getTopCalorieTotals($totalCalorieList, 3));
    }

    private function getTotalCalorieList(): array {
        $splits = explode("\n\n", $this->PUZZLE_INPUT);
        foreach ($splits as $elf) {
            $totalCalories = 0;
            foreach (explode("\n", $elf) as $calories) {
                $totalCalories += (int) $calories;
            }
            $totalCalorieList[] = $totalCalories;
        }
        return $totalCalorieList;
    }

    private function getTopCalorieTotals(array $totalCalorieList, int $top): array {
        while ($top > 0) {
            $topCalorieSum = max($totalCalorieList);
            $topList[] = $topCalorieSum;
            array_splice($totalCalorieList, array_search($topCalorieSum, $totalCalorieList), 1);
            $top--;
        }
        return $topList;
    }
}

