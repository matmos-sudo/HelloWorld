<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = htmlspecialchars($_POST["username"]);
    $_SESSION["password"] = htmlspecialchars($_POST["password"]);
    header("Location: ../welcome.php");
    exit();
}
