<!doctype html>
<html class = "h-100">
    <head>
    <title>도서 등록</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column h-100">
        <?php
        require_once "./menu.php";
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
            <div class="row align-items-md-stretch">
                <div class="col-md-12">
                    <div class="h-100 p-5">
                        <form name="newBook" action="./processAddBook.php" method="post">
                            <div class="mb-3 row">
                            <label class="col-sm-2">도서코드</label>
                                <div class=col-sm-3>
                                    <input name="bookId" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">도서명</label>
                                <div class=col-sm-3>
                                    <input name="bookName" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">가격</label>
                                <div class=col-sm-3>
                                    <input name="unitPrice" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">저자</label>
                                <div class=col-sm-3>
                                    <input name="author" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">상세정보</label>
                                <div class=col-sm-3>
                                    <textarea name="description"
                                    type="text"
                                    cols=50 rows=2 
                                    class="form-control" 
                                    placeholder="100자 이상 적어주세요">
                                    </textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">분류</label>
                                <div class=col-sm-3>
                                    <input name="category" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">재고수</label>
                                <div class=col-sm-3>
                                    <input name="unitInStock" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2">출판일</label>
                                <div class=col-sm-3>
                                    <input name="releaseDate" type="text" class="form-control">
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
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" value="등록" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </main>
        <?php
        require_once "./footer.php";
        ?>
    </body>    
</html>