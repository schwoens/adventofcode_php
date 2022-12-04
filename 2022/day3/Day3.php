<?php

require_once("resources/Day.php");

class Day3 implements Day {

    public function __construct(string $puzzle_input) {
        $this->PUZZLE_INPUT = $puzzle_input;    
    }

    public function part1() {
        $rucksacks = $this->getRucksacks();
        return $this->getPrioritySum($this->getDuplicateItemList($rucksacks));
    }

    public function part2() {
        $groups = $this->generateGroups($this->getRucksacks());
        return $this->getPrioritySum($this->getGroupBadges($groups));
    }

    private function findDuplicateItem(string $rucksack): string {
        $compartments = str_split($rucksack, strlen($rucksack)/2);

        foreach (str_split($compartments[0]) as $char) {
            if (str_contains($compartments[1], $char)) {
                return $char;
            }
        }
    }

    private function getDuplicateItemList(array $rucksacks): array {
        foreach ($rucksacks as $rucksack) {
            $duplicateItemList[] = $this->findDuplicateItem($rucksack);
        }
        return $duplicateItemList;
    } 

    private function getPriority(string $char): int {
        $asciiCode = ord($char);

        if ($char === strtolower($char)) {
            return $asciiCode - 96;
        } else {
            return $asciiCode - 64 + 26;
        }
    }

    private function getPrioritySum(array $chars) {
        $prioritySum = 0;
        foreach ($chars as $char) {
            $prioritySum += $this->getPriority($char);
        }
        return $prioritySum;
    }

    private function getRucksacks(): array {
        return explode("\n", $this->PUZZLE_INPUT);
    }

    private function generateGroups(array $rucksacks): array {
        $group = [];
        for ($i = 0; $i < count($rucksacks); $i++) {

            if ($i % 3 === 0 and $i !== 0) {
                $groups[] = $group;
                $group = []; 
            }

            $group[] = $rucksacks[$i];
        }
        $groups[] = $group;
        return $groups;
    }

    private function findGroupBadge(array $group): string {
        foreach (str_split($group[0]) as $char) {
            if (str_contains($group[1], $char) and str_contains($group[2], $char)) {
                return $char;
            } 
        }
    }

    private function getGroupBadges(array $groups): array {
        foreach ($groups as $group) {
            $groupBadges[] = $this->findGroupBadge($group);
        }
        return $groupBadges;
    }
}