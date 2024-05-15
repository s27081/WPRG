<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["clear"])) {
        
    foreach ($_COOKIE as $key => $value) {
        setcookie($key, "", time() - 3600);
        unset($_COOKIE[$key]);
        
}
    header("Location: formData.php");
    exit;
}
    $quantity = $_POST["guest"];

    if (isset($_POST["kidBed"])) {
        $kidBed = "Tak";
    } else {
        $kidBed = "Nie";
    }

    if (isset($_POST["smokingRoom"])) {
        $smokingRoom = "Tak";
    } else {
        $smokingRoom = "Nie";
    }

    echo "<h1> PODSUMOWANIE REZERWACJI </h1>";
    echo "<p> Imie: " . $_POST['name'] . "</p>";
    echo "<p> Nazwisko: " . $_POST['surname'] . "</p>";
    echo "<p> Adres: " . $_POST['address'] . "</p>";
    echo "<p> Email: " . $_POST['email'] . "</p>";
    echo "<p> Konto bankowe: " . $_POST['bankAccount'] . "</p>";

    for ($i = 1; $i <= $quantity; $i++) {
        $name = $_POST["name$i"];
        echo "<p> Gość $i : $name <p>";
        setcookie("name$i", $name, time() + 3600);
    }

    echo "<p> Dodatkowe łózko dla dziecka: " . $kidBed . "</p>";
    echo "<p> Pokój dla palących: " . $smokingRoom . "</p>";

    setcookie("name", $_POST['name'], time() + 3600);

    setcookie("surname", $_POST['surname'], time() + 3600);

    setcookie("address", $_POST['address'], time() + 3600);

    setcookie("email", $_POST['email'], time() + 3600);

    setcookie("bankAccount", $_POST['bankAccount'], time() + 3600);

    setcookie("guest", $_POST['guest'], time() + 3600);

    setcookie("kidBed", $kidBed, time() + 3600);

    setcookie("smokingRoom", $smokingRoom, time() + 3600);



?>
