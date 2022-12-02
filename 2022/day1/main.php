<?php

require_once("Class.php");

$puzzle_input = readToString("2022/day1/puzzle_input.txt");
$puzzle = new Day1($puzzle_input);

$part1result = $puzzle->part1();
$part2result = $puzzle->part2();

include("template.php");