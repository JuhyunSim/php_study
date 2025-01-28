<!doctype html>
<html class = "h-100">
    <head>
    <title>도서 목록</title>
        <link href="./resources/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column h-100">
        <?php
        // require_once "./model.php";
        require_once "./menu.php";
        require_once "./dbconn.php";
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
            $sql = "SELECT * FROM book";
            $result = $conn->query($sql);
            while ($row = $result->fetch_array()) {
            ?>
            <div class="col-md-4">
                <div class="h-100 p-5">
                    <a href="download_process.php?file=<?php echo urlencode($row['filename']);?>">
                    <img src="./resources/images/<?php echo $row['b_fileName']; ?>" style="width: 100%">
                    </a>
                    <h2><?php echo $row["b_name"]; ?></h2>
                    <p><?php echo $row["b_author"] . " | " . $row["b_releaseDate"]; ?></p>
                    <p><?php echo mb_substr($row["b_description"], 0, 90, 'utf-8')."..."; ?></p>
                    <p><?php echo $row["b_unitPrice"] . "원"; ?></p>
                    <p><a href="./book.php?id=<?php echo $row['b_id']; ?>"><button class="btn btn-outline-secondary" type="button">상세보기 &raquo;</button></a></p>
                </div>
            </div>
            <?php
            }
            $result->free_result();
            $conn->close();
            ?>
        </div>
        </main>
        <?php
        require_once "./footer.php";
        ?>
    </body>    
</html>