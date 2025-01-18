<?php
    //$_SESSOPM['cartList']에 제품정보 추가
    $bookId = $_GET['id'];
    if ($bookId == null || $bookId == '') {
        header("Location:books.php");
        return;
    }

    require "./model.php";

    $book = getBookById($bookId);

    if ($book == null) {
        header("Location:exceptionNoBookId.php");
    }

    session_start();
    if (isset($_SESSION['cartList'])) {
        if (isset($_SESSION['cartList'][$bookId])) {
            $_SESSION['cartList'][$bookId]['quantity'] += 1;
        } else {
            $book['quantity'] = 1;
            $_SESSION['cartList'][$bookId] = $book;
        }
    } else {
        $book['quantity'] = 1;
        $_SESSION['cartList'][$bookId] = $book;
    }
    
    header('Location:book.php?id='.$bookId);
?>