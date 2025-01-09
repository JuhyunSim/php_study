<!doctype html>
<html class="h-100">
    <head>
        <title>도서 등록</title>
        <link href="./resources/css/bootstrap.min.css">
        <style type="text/javascript">
            .error { color: red; }
            .required { color: red; }
            .success { color: green; }
        </style>
    </head>
    <body class="d-flex flex-column h-100">
    <?php
    require "./menu.php";
    ?>
    <br>
    <main>
    <div class="container my-5">
            <div class="bg-body-tertiary p-5 rounded">
                <div class="col-sm-8 py-5 mx-auto">
                    <h1 class="display-5 fw-bold">도서 등록</h1>
                    <p class="col-md-8 fs-4">Book addition</p>
                </div>
            </div>
            </div>
            <div class="row align-items-md-stretch">
                <div class="col-md-12">
                    <div class="h-100 p-5">
                        <form name="newBook" action="./processAddBook.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3 row">
                            <label class="col-sm-2">도서코드<sup class="required">*</sup></label>
                                <div class=col-sm-3>
                                    <input name="bookId" id="bookId" type="text" class="form-control" value="<?= $bookId ?>">
                                </div>
                                <div class="col-sm-6">
                                    <span class="error"><?= echo $bookIdErr; ?></span>
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">도서명<sup class="required">*</sup></label>
                                <div class=col-sm-3>
                                    <input name="bookName" id="name" type="text" class="form-control" value="<?= $name?>">
                                </div>
                                <div class="col-sm-6">
                                    <span class="error"><?= echo $nameErr; ?></span>
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">가격<sup class="required">*</sup></label>
                                <div class=col-sm-3>
                                    <input name="unitPrice"id="unitPrice" type="text" class="form-control" id="unitPrice" value="<?= $unitPrice?>">
                                </div>
                                <div class="col-sm-6">
                                    <span class="error"><?= echo $unitPRiceErr; ?></span>
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">저자</label>
                                <div class=col-sm-3>
                                    <input name="author" type="text" class="form-control" value="<?= $author?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">상세정보<sup class="required">*</sup></label>
                                <div class=col-sm-3>
                                    <textarea name="description"
                                    id="description"
                                    type="text"
                                    cols=50 rows=2 
                                    class="form-control" 
                                    placeholder="100자 이상 적어주세요">
                                    value="<?= $description ?>"
                                    <?php echo $description?>
                                    </textarea>
                                    <div class="col-sm-6">
                                    <span class="error"><?= echo $descriptionErr; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">분류</label>
                                <div class=col-sm-3>
                                    <input name="category" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">재고수<sup class="required">*</sup></label>
                                <div class=col-sm-3>
                                    <input name="unitInStock" id="unitsInStock" type="text" class="form-control" value="<?= $unitsInStock ?>">
                                </div>
                                <div class="col-sm-6">
                                    <span class="error"><?= echo $unitsInStockErr; ?></span>
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">출판일</label>
                                <div class=col-sm-3>
                                    <input name="releaseDate" type="text" class="form-control" value="<?= $releaseDate?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">상태</label>
                                <div class="col-sm-5">
                                    <input name="condition" type="radio" value="New" checked> 신규도서
                                    <input name="condition" type="radio" value="Old"> 중고도서
                                    <input name="condition" type="radio" value="Ebook"> E-Book
                                </div>
                            </div>
                            <div class="mb-3 row"> 
                                <label class="col-sm-2">이미지<sup class="required">*</sup></label>
                                <div class="col-sm-5">
                                    <input type="file" name="bookImage" id="bookImage" class="form-control" value="<?= $bookImage?>">
                                </div>
                                <div class="col-sm-6">
                                    <span class="error"><?= echo $bookImageErr; ?></span>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="button" value="등록" class="btn btn-primary" onClick="CheckAddBook()">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </body>
</html>