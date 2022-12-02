<?php 

$puzzles = [
    "2022" => []
];

foreach (array_keys($puzzles) as $year) {
    for ($day = 1; $day < 26; $day++) {
        $path = "{$year}/day{$day}/day{$day}.php";
        if (file_exists($path)) {
            $puzzles[$year][] = [
                "day" => $day,
                "route" => "/{$year}/day{$day}" 
            ];
        }
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Advent of Code</title>
</head>
<body>
    <h1>Advent of Code</h1>
    <h2>2022</h2>
    <ul>
        <?php 
        foreach($puzzles["2022"] as $key => $puzzle) {
            echo "<li><a href={$puzzle['route']}>" .
            "day {$puzzle['day']}" .
            "</a></li>";
        } 
        ?>
    </ul>
    
</body>
</html>