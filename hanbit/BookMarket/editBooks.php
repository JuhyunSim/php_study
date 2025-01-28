<!doctype html>
<html class="h-100">
    <head>
        <title>
            도서 편집
        </title>
        <link href = "./resources/css/bootstrap.min.css" rel = "stylesheet">
        <script type="text/javascript">
            function deleteConfirm(id) {
                if (confirm("해당 도서를 삭제합니다!!") == true) {
                    location.href = "./deleteBook.php?id=" + id;
                } else {
                    return;
                }
            }
        </script>
    </head>
    <body class="d-flex flex-column h-100">
        <?php
        require "./menu.php";
        require "./dbconn.php";
        ?>
        <br>
        <main>
        <div class="container my-5">
            <div class="bg-body-tertiary p-5 rounded">
                <div class="col-sm-8 py-5 mx-auto">
                    <h1 class="display-5 fw-bold">도서 편집</h1>
                    <p class="col-md-8 fs-4">BookEditing</p>
                </div>
            </div>
            <div class="row align-items-md-stretch text-center">
            <?php
            $edit = $_GET['edit'];
            $sql = "SELECT * FROM book";
            $result = $conn->query($sql);
            while ($row = $result->fetch_array()) {
            ?>
            <div class="col-md-4">
                <div class="h-100 p-5">
                    <img src = "./resources/images/<?php echo $row['b_fileName']; ?>" style = "width: 100%">
                    <h2><?php echo $row["b_name"]; ?></h2>
                    <p><?php echo $row["b_author"] . "|" . $row["b_releaseDate"]; ?></p>
                    <p><?php echo mb_substr($row["b_description"], 0, 90, 'utf-8') . "..."; ?></p>
                    <p><?php echo $row["b_unitPrice"]?>원</p>
                    <p>
                        <?php
                        if ($edit == "update") {
                        ?>
                        <a href="./updateBook.php?id=<?php echo $row['b_id']; ?>">
                            <button type="button" class="btn btn-success">수정 &raquo;</button>
                        </a>
                        <?php
                        } elseif ($edit == "delete") {
                        ?>
                        <a href="#" onClick="deleteConfirm('<?php echo $row['b_id']; ?>')" class="btn btn-danger" role="button">  
                        삭제 &raquo;
                        </a>
                        <?php
                        }
                        ?>
                    </p>
                </div>
            </div>
            <?php
            }
            $result->free_result();
            $conn->close();
            ?>
            </div>
        </div>
        </main>
        <?php
        require "./footer.php";
        ?>
    </body>
</html>