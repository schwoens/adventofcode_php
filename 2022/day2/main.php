<?php

require_once("Day2.php");

$puzzle_input = readToString("2022/day2/puzzle_input.txt");
$puzzle = new Day2($puzzle_input);

$part1result = $puzzle->part1();
$part2result = $puzzle->part2();

include("resources/template.php");