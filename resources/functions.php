<?php

function readToString(string $filePath): string 
{
    $file = fopen($filePath, "r") or die("Unable to open file: {$filePath}");
    $string = fread($file, filesize($filePath));
    fclose($file);
    return $string;    
}

function printArray(array $array): void
{
    print("<pre>" . print_r($array, true) . "</pre>");
}