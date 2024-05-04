<?php

$date = $_GET['date'];


function dayWeek($date){
    return date('D', strtotime($date));
}

function userAge($date){
    $userYear = date('Y', strtotime($date));
    $currentYear = date('Y');

    $age = $currentYear - $userYear;
    return $age;
}

function nextBirthday($date){
    $currentYear = date('Y');
    $nextBirthday = date('Y-m-d', strtotime($currentYear . '-' . date('m-d', strtotime($date))));

    if ($nextBirthday < date('Y-m-d')) {
        $nextBirthday = date('Y-m-d', strtotime('+1 year', strtotime($nextBirthday)));
    }
    $daysToNextBirthday = (strtotime($nextBirthday) - strtotime(date('Y-m-d'))) / (60 * 60 * 24);
    
    return $daysToNextBirthday;
}


echo "Dzień urodzenia: ". dayWeek($date). "<br>";
echo "Wiek: ". userAge($date). "<br>";
echo "Dni do urodzin: ". nextBirthday($date). "<br>";

