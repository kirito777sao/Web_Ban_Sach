<?php
session_start(); // Bắt đầu session

// Không cần sử dụng session_register() nữa
// session_register("cart"); 

$id = $_GET['item'];

if (isset($_SESSION['cart'][$id])) {
    $qty = $_SESSION['cart'][$id] + 1;
} else {
    $qty = 1;
}

// Gán giá trị vào mảng $_SESSION
$_SESSION['cart'][$id] = $qty;

header("location:cart.php");
exit();
?>