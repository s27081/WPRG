<?php
session_start();

$validUsername = "user";
$validPassword = "user";


    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION["username"] = $username;
        setcookie("username", $username, time() + 3600);
        header("Location: formData.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php $_SERVER["PHP_SELF"]?>">
        <label for="username">Nazwa uzytkownika:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Haslo:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
