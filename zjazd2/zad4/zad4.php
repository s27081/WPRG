<?php

$number = $_POST["numb"];
 
    if ($number <= 1 && is_int($number)) {
        echo $number . " nie jest pierwsza<br>";
    }else{
    $conut = 0;
    $isPrime = true;

    for ($i = 2; $i <= sqrt($number); $i++) {
        $conut++;
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo "<p>".$number . " jest pierwsza</p>";
        echo "<p>Iteracje sprawdzania: ".$conut ."</p>";
    } else {
        echo "<p>".$number . " nie jest pierwsza</p>";
        echo "<p>Iteracje sprawdzania: ".$conut ."</p>";
    }
}
?>