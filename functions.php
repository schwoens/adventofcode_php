<?php

function readToString(string $filePath) {
    $file = fopen($filePath, "r") or die("Unable to open file: {$filePath}");
    $string = fread($file, filesize($filePath));
    fclose($file);
    return $string;    
}