<?php

include("resources/functions.php");

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/") {
    require "resources/view.index.php";
} else {

    try {
        $array = explode("/", $uri);

        $year = $array[1];
        $day = str_replace("day", "", $array[2]);

        $part1result = "Not yet solved";
        $part2result = "Not yet solved";

        require "./{$year}/day{$day}/main.php";

    } catch(Exception $e) {
        echo $e->getMessage();
    }
}