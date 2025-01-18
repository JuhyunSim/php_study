<?php
session_start();
$bookId = $_GET["id"];

if ($bookId == null || $bookId == "") {
    header('Location:books.php');
    return;
}

require "./model.php";

$book = getBookById($bookId);

if ($book == null) {
    header('Location:exceptionNoBookId.php');
}

$cartList = $_SESSION["cartList"];
$count = count($cartList);

if (isset($cartList[$bookId])) {
    unset($_SESSION['cartList'][$bookId]);
}

header('Location:cart.php');
?>