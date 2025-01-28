<?php
$id = $_GET['id'];

require "./dbconn.php";

$sql = "SELECT * FROM book where b_id = '$id'";

$result = $conn->query($sql);
if ($result->num_rows <= 0) {
    echo "일치하는 도서가 없습니다.";
} else {
    $sql = "DELETE FROM book where b_id='$id'";
    $result = $conn->query($sql);
}

$conn->close();
Header("Location:editBooks.php?edit=delete");