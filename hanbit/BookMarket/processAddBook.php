<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookId = $_POST["bookId"];
    $bookName = $_POST["bookName"];
    $unitPrice = $_POST["unitPrice"];
    $author = $_POST["author"];
    $description = $_POST["description"];
    $category= $_POST["category"];
    $unitInStock = $_POST["unitInStock"];
    $releaseDate = $_POST["releaseDate"];
    $condition = $_POST["condition"];
    $filename = $_FILES['bookImage']['name'];
    
    $target_path = "./resources/images/";
    
    $allowed = array(
        "jpg" => "image/jpg",
        "jpeg" => "image/jpeg",
        "gif" => "image/gif",
        "png" => "image/png",
    );
    
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!array_key_exists($ext, $allowed)) {
        die("오류: 잘못된 확장자입니다.");
    }
    if(file_exists($target_path . $filename)) {
        $filename = time() . $filename;
    }
    
    if(move_uploaded_file($_FILES['bookImage']['tmp_name'], $target_path . $filename)) {
        $handle = fopen("domain.dat", "a");
        $book_info = "$bookId | $bookName | $unitPrice | $author | $description | $category | $unitInStock | $releaseDate | $condition | $filename";
        fwrite($handle, "\n".$book_info);
        fclose($handle);
        header("Location:books.php");
    } else {
        echo "파일이 업로드되지 않았습니다. 다시 시도해주세요!";
    }
} else {
    die("오류: 잘못된 요청입니다.");
}

?>