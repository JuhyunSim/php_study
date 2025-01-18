<!doctype html>
<html class="h-100">
    <head>
        <title>
            도서 목록
        </title>
        <link href="./resources/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column h-100">
    <?php
    require "./model.php";
    require "./menu.php";
    ?>
    <br>
    <main>
        <div class="container py-5">
            <div class="o-5 mb-4 bg-body-tertiary rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">
                       장바구니 
                    </h1>
                    <P class="col-md-8 fs-4">CartList</P>
                </div>
            </div>
            <div class="row align-items-md-stretch text-center">
            <?php
            session_start();
            $cartId = session_id();
            ?>
                <div class="col-md-12">
                    <div class="p-5">
                       <table width="100%">
                            <tr>
                                <td align="left"><a href="./deleteCart.php?cartId=<?=$cartId?>" class="btn btn-danger">삭제하기</a></td>
                                <td align="right"><a href="./shippingInfo.php?cartId=<?=$cartId?>" class="btn btn-success">주문하기</a></td>
                            </tr>
                       </table>
                    </div>
                    <div>
                        <table class="table table-hover">
                            <tr>
                                <td>도서</td>
                                <td>가격</td>
                                <td>수량</td>
                                <td>소계</td>
                                <td>비고</td>
                            </tr>
                            <?php
                            $sum = 0;
                            $cartList = "";
                            if (isset($_SESSION["cartList"])) {
                                $cartList = $_SESSION["cartList"];

                                foreach($cartList as $id => $book) {
                                    $total = $book['unitPrice'] * $book['quantity'];
                                    $sum += $total;
                            ?>
                            <tr>
                                <td width="20%"><?= $id ?> - <?= $book['name']?></td>
                                <td width="10%"><?= number_format($book['unitPrice']) ?></td>
                                <td width="10%"><?= $book['quantity'] ?></td>
                                <td width="10%"><?= number_format($total) ?></td>
                                <td width="10%"><a href="./removeCart.php?id=<?= $id ?>" class="badge text-bg-danger">삭제</a></td>
                            </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>총액</th>
                                <th><?=number_format($sum)?></th>
                                <th></th>
                            </tr>
                        <?php
                        }
                        ?>
                        </table>
                    </div>
                    <div class="col-md-2">
                        <a href="./books.php" class="btn btn-secondary">&raquo; 쇼핑 계속하기</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    require "./footer.php";
    ?>
    </body>
</html>