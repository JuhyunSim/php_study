<!doctype html>
<html class = "h-100">
    <head>
    <title>도서 목록</title>
        <link href="./resources/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column h-100">
        <?php
        require_once "./model.php";
        require_once "./menu.php";
        ?>
        <br>
        <main>
        <div class="container my-5">
            <div class="bg-body-tertiary p-5 rounded">
                <div class="col-sm-8 py-5 mx-auto">
                    <h1 class="display-5 fw-bold">도서 목록</h1>
                    <p class="col-md-8 fs-4">BookList</p>
                </div>
            </div>
            <div class="row align-items-md-stretch text-center">
            <?php
            $listOfBooks = getAllBooks();
            for($i=0; $i<count($listOfBooks); $i++) {
                $id = key($listOfBooks);
                if($id == null) {
                    break;
                }
                $book = $listOfBooks[$id];
                next($listOfBooks);
            ?>
            <div class="col-md-4">
                <div class="h-100 p-5">
                    <a href="download_process.php?file=<?php echo urlencode($book['filename']);?>">
                    <img src="./resources/images/<?php echo $book['filename']; ?>" style="width: 100%">
                    </a>
                    <h2><?php echo $book["name"]; ?></h2>
                    <p><?php echo $book["author"] . " | " . $book["releaseDate"]; ?></p>
                    <p><?php echo mb_substr($book["description"], 0, 90, 'utf-8')."..."; ?></p>
                    <p><?php echo $book["unitPrice"] . "원"; ?></p>
                    <p><a class="btn btn-outline-secondary" href="./book.php?id=<?php echo $id; ?>" type="button">상세보기 &raquo;</a></p>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
        </main>
        <?php
        require_once "./footer.php";
        ?>
    </body>    
</html>