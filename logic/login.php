<?php

require("./connection.php");
if (isset($_POST["login-submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $con->prepare("SELECT * FROM users WHERE username=:username");
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $userExists = $stmt->fetch();

    $passwordHashed = $userExists["password"];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword === false) {
        echo "Login fehlgeschlagen, Passwort stimmt nicht überein";
    }
    if ($checkPassword === true) {
        session_start();
        $_SESSION["username"] = $userExists["username"];
        header("Location: ./member.php");
        exit;
    }
}


