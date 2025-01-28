<?php
require "./dbconn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookId = $_POST['bookId'];
    $name = $_POST['name'];
    $unitPrice = $_POST['unitPrice'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $unitInStock = $_POST['unitInStock'];
    $releaseDate = $_POST['releaseDate'];
    $condition = $_POST['condition'];
    
    $target_path = "resources/images/";
    $filename = $_FILES['bookImage']['name'];
    $target_path = $target_path.basename($filename);

    if (empty($bookIdErr) && empty($nameErr) && empty($unitPriceErr) && empty($descriptionErr) 
    && empty($unitInStockErr) && empty($bookImageErr)) {
        if (move_uploaded_file($_FILES['bookImage']['tmp_name'], $target_path)) {
            $sql = "UPDATE book SET b_name='$name', b_unitPrice='$unitPrice', b_author='$author', 
                    b_description='$description', b_category='$category', b_unitInStock='$unitInStock',
                    b_releaseDate='$releaseDate', b_condition='$condition', b_fileName='$filename' where b_id='$bookId'";
        } else {
            $sql = "UPDATE book SET b_name='$name', b_unitPrice='$unitPrice', b_author='$author',
                    b_description='$description', b_category='$category', b_unitInStock='$unitInStock',
                    b_releaseDate='$releaseDate', b_condition='$condition' where b_id='$bookId'";
        }

        if ($conn->query($sql)) {
            Header("Location:editBooks.php?edit=update");
        }
        $result->free_result();
        $conn->close();
    }
}
