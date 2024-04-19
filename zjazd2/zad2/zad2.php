<?php
if(isset($_POST["kidBed"])){
    $kidBed="Tak";
}else{
    $kidBed="Nie";
}

if(isset($_POST["smokingRoom"])){
    $smokingRoom="Tak";
}else{
    $smokingRoom="Nie";
}

echo "<h1> PODSUMOWANIE REZERWACJI </h1>";
echo "<p> Imie: ". $_POST['name']. "</p>";
echo "<p> Nazwisko: ". $_POST['surname']. "</p>";
echo "<p> Adres: ". $_POST['address']. "</p>";
echo "<p> Email: ". $_POST['email']. "</p>";
echo "<p> Konto bankowe: ". $_POST['bankAccount']. "</p>";
echo "<p> Ilość gości: ". $_POST['guest']. "</p>";
echo "<p> Dodatkowe łózko dla dziecka: ". $kidBed. "</p>";
echo "<p> Pokój dla palących: ". $smokingRoom. "</p>";

?>