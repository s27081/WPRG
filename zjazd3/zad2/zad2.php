<?php

$number = $_POST["numb"];

function fibRecursive($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * fibRecursive($n - 1);
    }
}

function fibNonRecursive($n) {
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

function measureTime($function, $argument) {
    $start = microtime(true);
    $result = $function($argument);
    $end = microtime(true);
    $executionTime = ($end - $start) * 1000;
    echo "wynik: ". $result. " czas: " .$executionTime;
}

echo "Wykonanie rekurencyjnie ";
measureTime('fibRecursive',$number);
echo "<br>";

echo "Wykonanie nierekurencyjnie ";
measureTime('fibNonRecursive',$number);
echo "<br>";