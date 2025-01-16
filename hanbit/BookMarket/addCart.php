<?php
    $bookId = $_GET['id'];
    if ($bookId == null || $bookdId == '') {
        header("Location:books.php");
        return;
    }

    require model.php;

    $book = getBookById($bookId);

    if ($book == null) {
        header("Location:exceptionNoBookId.php");
    }

    session.start();
    if (isset($_SESSION['cartList'])) {
        $count = count($_SESSION['cartList']);
        $goodsList = $_SESSION['cartList'];

        $cnt = 0;
        $goodsQnt = '';
        for ($i = 0; $i < $count; $i++) {
            $goodsId = key($goodsList);
            $goods = $goodsList[$goodsId];
            if ($goodsId == $bookId) {
                $cnt++;
                $goods["quantity"] = $goods['quantity'] + 1;
                $_SESSION['cartList'][$bookId] = $goods;
                break;
            }
            next($goodsList);
        }
        if ($cnt == 0) {
            $goods = getBookById($bookId);
            $goods['quantity'] = 1;
            $_SESSION['cartList'][$bookId] = $goods;
        }
    } else {
        $book = getBookById($bookId);
        $book['quantity'] = 1;
        $_SESSION['cartList'][$bookId] = $book;
    }

    header('Location:book.php?id='.$bookId);
?>