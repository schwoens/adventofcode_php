<?php

require_once("Day8.php");

$puzzle_input = readToString("2022/day8/puzzle_input.txt");
$puzzle = new Day8($puzzle_input);

$part1result = $puzzle->part1();


include("resources/template.php");