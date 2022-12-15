<?php

require_once("Day7.php");

$puzzle_input = readToString("2022/day7/puzzle_input.txt");
$puzzle = new Day7($puzzle_input);

$part1result = $puzzle->part1();
$part2result = $puzzle->part2();

include("resources/template.php");