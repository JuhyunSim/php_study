<!doctype html>
<html class="h-100">
    <head>
        <title>도서 정보</title>
        <link href="./resources/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript">
            function addToCart() {
                if (confirm("도서를 장바구니에 추가하시겠습니까?")) {
                    document.addForm.submit();
                } else {
                    document.addForm.reset();
                }
            }
        </script>
    </head>
    <body class="d-flex flex-column h-100">
        <?php
        // require_once("./model.php");
        require_once("./dbconn.php");
        require_once("./menu.php");
        ?>
        <br>
        <main>
        <div class="container my-5">
            <div class="bg-body-tertiary p-5 rounded">
                <div class="col-sm-8 py-5 mx-auto">
                    <h1 class="display-5 fw-bold">도서 정보</h1>
                    <p class="col-md-8 fs-4">BookInfo</p>
                </div>
            </div>
            <?php
            try {
                $id = $_GET["id"];

                $sql = "SELECT * FROM book where b_id = '$id'";

                $result = $conn->query($sql);
                if ($result->num_rows <= 0) {
                    throw new Exception();
                }
                $row = $result->fetch_array();
            ?>
            <div class="row align-items-md-stretch">
                <div class="col-md-5">
                    <img src="./resources/images/<?php echo $row['b_fileName']; ?>" style = "width: 70%">
                    </div>
                    <div class="col-md-6">
                        <h2><?php echo $row["b_name"]; ?></h2>
                        <p><?php echo $row["b_description"]; ?></p>
                        <p><b>도서코드 : </b><span class="badge text-bg-danger"><?php echo $id ?></span></p>
                        <p><b>저자 : </b><?php echo $row["b_author"]?></p>
                        <p><b>출판일 : </b><?php echo $row["b_releaseDate"]?></p>
                        <p><b>분류 : </b><?php echo $row["b_category"]?></p>
                        <p><b>재고수 : </b><?php echo $row["b_unitInStock"]?></p>
                        <p><b>가격 : </b><?php echo $row["b_unitPrice"] ?>원</p>
                        <p><form name="addForm" action="./addCart.php?id=<?php echo $id;?>" method="post">
                            <a href="#" class="btn btn-info" onClick="addToCart()">도서주문 &raquo;</a>
                            </form>
                            <a href="./cart.php" class="btn btn-warning">장바구니 &raquo;</a>
                            <a href="./books.php" class="btn btn-secondary">도서목록 &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        </main>
        <?php 
        $result->free_result();
        $conn->close();
        } catch (Exception $e) {
            require "./exceptionNoBookId.php";
        }
        require_once "./footer.php";
        ?>
    </body>
</html>