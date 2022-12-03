<?php

require_once("Day3.php");

$puzzle_input = readToString("2022/day3/puzzle_input.txt");
$puzzle = new Day3($puzzle_input);

$part1result = $puzzle->part1();
$part2result = $puzzle->part2();

include("template.php");
