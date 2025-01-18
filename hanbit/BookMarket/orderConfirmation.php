<!doctype html>
<html class="h-100">
    <head>
        <title>주문 정보</title>
        <link href="./resources/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column h-100">
        <?php
        require "./model.php";
        require "./menu.php";

        $shipping_cartId = $_COOKIE['Shipping_cartId'];
        $shipping_name = $_COOKIE['Shipping_name'];
        $shipping_shippingDate = $_COOKIE['Shipping_shippingDate'];
        $shipping_country = $_COOKIE['Shipping_country'];
        $shipping_zipCode = $_COOKIE['Shipping_zipCode'];
        $shipping_addressName = $_COOKIE['Shipping_addressName'];
        session_start();
        ?>
        <br>
        <main>
        <div class="container py-5">
            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">주문 정보</h1>
                    <p class="col-md-8 fs-4">Order Info</p>
                </div>
            </div>
        </div>
        <div class="row align-items-md-stretch alert alert-info text-center">
            <div class="col-md-12">
                <div class="p-5">
                    <div>
                        <h1>영수증</h1>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-4" align="left">
                            <strong>배송 주소</strong><br>
                            성명 : <?= $shipping_name ?><br>
                            우편번호 : <?= $shipping_zipCode ?><br>
                            주소 : <?= $shipping_addressName ?>(<?= $shipping_country?>)<br>
                        </div>
                        <div class="col-4" align="right">
                            <p><em>배송일 : <?= $shipping_shippingDate?></em></p>
                        </div>
                    </div>
                    <div>
                        <table class="table table-hover">
                            <tr>
                                <th>도서</th>
                                <th>#</th>
                                <th>가격</th>
                                <th>소계</th>
                            </tr>
                            <?php
                            $sum = 0;
                            $cartList = "";
                            if (isset($_SESSION["cartList"])) {
                                $cartList = $_SESSION['cartList'];
                                
                                foreach ($cartList as $id => $book) {
                                    $total = $book['unitPrice'] * $book['quantity'];
                                    $sum += $total;
                                    ?>
                                    <tr>
                                        <td class="text-center"><em><?= $book['name']?></em></td>
                                        <td class="text-center"><em><?= $book['quantity']?></em></td>
                                        <td class="text-center"><em><?= number_format($book['unitPrice']) . "원"?></em></td>
                                        <td class="text-center"><em><?= number_format($total) . "원"?></em></td>
                                    </tr>
                            <?php
                                }
                            } else {
                                $count = 0;
                            }
                            ?>
                            <tr>
                                <th></th>
                                <th></th>
                                <th><strong>총액: </strong></th>
                                <th><strong><?=number_format($sum) . "원"?> </strong></th>
                            </tr>
                        </table>
                        <div class="mb-3 row">
                            <div class="col-sm-offset-2 col-sm-10">
                                <a href="./shippingInfo.php?cartId=<?=$cartId?>" class="btn btn-secondary">이전</a>
                                <a href="./thankCustomer.php" class="btn btn-success" role="button">주문 완료</a>
                                <a href="./checkOutCancelled.php" class="btn btn-secondary">취소</a>
                            </div>
                        </div>
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