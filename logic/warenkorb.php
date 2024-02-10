<?php
session_start();

$stmt = $con->prepare("SELECT id_product, title, description, price FROM products");
$stmt->execute();
$result = $stmt->fetch();

$userId = 0;
$cartItems = 0;

if (isset($_SESSION['user_id'])){
    $userId = (int) $_SESSION['user_id'];
}
if (isset($_COOKIE['user_id'])) {
    $userId = (int)$_COOKIE['user_id'];
}

$stmt2 = $con->prepare("SELECT id_product FROM carts");
$stmt2->execute();
$cartItems = $stmt2->fetchColumn();
