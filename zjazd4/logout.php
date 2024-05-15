<?php
session_start();

setcookie("username", "", time() - 3600);
unset($_COOKIE["username"]);

$_SESSION = array();
session_destroy();

header("Location: index.php");

?>