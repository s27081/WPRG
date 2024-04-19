<?php
        $operator = $_POST["znak"];
        $numb1 = $_POST["numb1"];
        $numb2 = $_POST["numb2"];

        switch($operator){
            case "+":
            echo "<p>Wynik: ". ($numb1 + $numb2). "</p>";
            break;
            case "-":
            echo "<p>Wynik: ". ($numb1 - $numb2). "</p>";
            break;
            case "*":
            echo "<p>Wynik: ". ($numb1 * $numb2). "</p>";
            break;
            case "/":
            if($_POST["numb2"] == 0){
                echo "<p> Error </p>";
            }else{
            echo "<p>Wynik: ". ($numb1 / $numb2). "</p>";
            }
            break;

        }
 ?>
