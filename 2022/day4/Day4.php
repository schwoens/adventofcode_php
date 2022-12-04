<?php

require_once("resources/Day.php");

class Day4 implements Day {

    public function __construct($puzzleInput) {
        $this->PUZZLE_INPUT = $puzzleInput;
    }

    public function part1() {
        return $this->countContainedAssignments($this->getAssignmentPairList());
    }

    public function part2() {
        return $this->countOverlappingAssignments($this->getAssignmentPairList());
    }

    private function countContainedAssignments(array $assignmentPairList): int {
        $count = 0;
        foreach ($assignmentPairList as $assignmentPair) {
            if ($this->isContainedPair($assignmentPair)) {
                $count++;
            }    
        }
        return $count;
    }

    private function countOverlappingAssignments(array $assignmentPairList): int {
        $count = 0;
        foreach ($assignmentPairList as $assignmentPair) {
            if ($this->isOverlappingPair($assignmentPair)) {
                $count++;
            }
        }
        return $count;
    }

    private function getAssignmentPairList(): array {
        $lines = explode("\n", $this->PUZZLE_INPUT);

        foreach ($lines as $line) {
            $assignmentPairList[] = $this->getAssignmentPair($line);
        }
        return $assignmentPairList;

    }

    private function getAssignmentPair(string $line): array {
        $assignments = explode(",", $line);
        foreach ($assignments as $assignment) {
            $assignmentPair[] = array_map("intval", explode("-", $assignment));
        }
        return $assignmentPair;
    }

    private function isContainedPair(array $assignmentPair): bool {
        list($x1, $y1) = $assignmentPair[0];
        list($x2, $y2) = $assignmentPair[1];

        return (in_array($x1, range($x2, $y2)) and in_array($y1, range($x2, $y2))) or
            (in_array($x2, range($x1, $y1)) and in_array($y2, range($x1, $y1)));
    }

    private function isOverlappingPair(array $assignmentPair): bool {
        list($x1, $y1) = $assignmentPair[0];
        list($x2, $y2) = $assignmentPair[1];

        return (in_array($x1, range($x2, $y2)) or in_array($y1, range($x2, $y2))) or
            (in_array($x2, range($x1, $y1)) or in_array($y2, range($x1, $y1)));

    }
}