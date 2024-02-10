<?php


require("connection.php");

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = PASSWORD_HASH($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $con->prepare("SELECT * FROM users WHERE username =:username OR email =:email");
    $stmt->bindParam(":username", $usermane);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

//überprüfen ob user existeirt
    $userAlreadyExists = $stmt->fetchColumn();

    if (!$userAlreadyExists) {
        registerUser($username, $email, $password);
    } else {
        echo "Username oder Email bereits vergeben";
    }
}
//User hinzufügen
function registerUser($username, $email, $password)
{
    global $con;
    $stmt = $con->prepare("INSERT INTO users(username, email, password) VALUES (:username, :email, :password)");
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
//Weiterleitung und Übergabe von Daten an SESSION
    session_start();
    $_SESSION["username"] = $username;

    header("Location: memberarea.php");
    exit;
}


?>