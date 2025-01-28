<!doctype html>
<html class="h-100">
    <head>
        <title>
            도서 수정
        </title>
        <link href="./resources/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        require "./menu.php";
        require "dbconn.php";

        $id = $_GET["id"];
        $sql = "SELECT * FROM book where b_id = '$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_array();
        ?>
        <br>
        <main>
        <div class="container my-5">
            <div class="bg-body-tertiary p-5 rounded">
                <div class="col-sm-8 py-5 mx-auto">
                    <h1 class="display-5 fw-bold">도서 수정</h1>
                    <p class="col-md-8 fs-4">Book Update</p>
                </div>
            </div>
            <div class="row align-items-md-stretch">
            <div class="col-md-5">
                <img src="./resources/images/<?php echo $row['b_filename']; ?>" style="width: 70%">
            </div>    
            <div class="col-md-7">
                <div class="h-100 p-5">
                <form name="newBook" action="./processUpdateBook.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row">
                    <label class="col-sm-2">도서코드</label>
                        <div class="col-sm-3">
                            <input type="hidden" name="bookId" value="<?php echo $row['b_id']; ?>" class="form-control">
                            <span class="badge text-bg-danger"><?php echo $row['b_id']; ?></span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2">도서명</label>
                        <div class="col-sm-5">
                            <input type="text" name="name" value="<?php echo $row['b_name']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2">가격</label>
                        <div class="col-sm-5">
                            <input type="text" name="unitPrice" value="<?php echo $row['b_unitPrice']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2">저자</label>
                        <div class="col-sm-5">
                            <input type="text" name="author" value="<?php echo $row['b_author']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2">상세정보</label>
                        <div class="col-sm-10">
                            <textarea name="description" cols="50" rows="2" class="form-control" placeholder="100자 이상 적어주세요">
                                <?php
                                echo $row['b_description'];
                                ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2">분류</label>
                        <div class="col-sm-5">
                            <input type="text" name="category" value="<?php echo $row['b_category']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2">재고수</label>
                        <div class="col-sm-5">
                            <input type="text" name="unitInStock" value="<?php echo $row['b_unitInStock']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2">출판일</label>
                        <div class="col-sm-5">
                            <input type="text" name="releaseDate" value="<?php echo $row['b_releaseDate']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2">상태</label>
                        <div class="col-sm-5">
                            <input type="radio" name="condition" value="New" checked> 신규도서
                            <input type="radio" name="condition" value="Old" checked> 중고도서
                            <input type="radio" name="condition" value="EBook" checked> E-Book
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2">이미지</label>
                        <div class="col-sm-5">
                            <input type="file" name="bookImage" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="form-control" value="등록">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        </main>
        <?php
        require "./footer.php";
        $result->free_result();
        $conn->close();
        ?>
    </body>
</html>