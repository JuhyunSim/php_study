<?php

function filterBookId($field){
    $field = filter_var(trim($field));

    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^ISBN[0-9]{4,12}$/")))) {
        return $field;
    } else {
        return FALSE;
    }
}

function filterName($field){
    $field = filter_var(trim($field));

    if(strlen($field) >= 4 && strlen($field) <= 50) {
        return $field;
    } else {
        return FALSE;
    }
}

function filterPrice($field){
    if(filter_var(trim($field), FILTER_VALIDATE_INT) || filter_var(trim($field), FILTER_VALIDATE_FLOAT)) {
        return $field;
    } else {
        return FALSE;
    }
}

function filterPriceFloat($field){
    $field = filter_var(trim($field));

    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[\d]*\.?[\d]{0,2}$/")))) {
        return $field;
    } else {
        return FALSE;
    }
}

function filterStock($field){
    if(filter_var(trim($field), FILTER_VALIDATE_INT)){
        return $field;
    } else {
        return FALSE;
    }
}

function filterDescription($field){
    $field = filter_var(trim($field));
    if(!empty($field) && strlen($field) >= 80) {
        return $field;
    } else {
        return FALSE;
    }
}

$bookIdErr = $nameErr = $priceErr = $priceFloatErr = $stockErr = $descriptionErr = $bookImageErr = $unitPriceErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookId = $_POST["bookId"];
    $bookName = $_POST["bookName"];
    $unitPrice = $_POST["unitPrice"];
    $author = $_POST["author"];
    $description = $_POST["description"];
    $category= $_POST["category"];
    $unitInStock = $_POST["unitsInStock"];
    $releaseDate = $_POST["releaseDate"];
    $condition = $_POST["condition"];
    $filename = $_FILES['bookImage']['name'];
    
    if(empty($bookId)){
        $bookIdErr = "도서코드를 입력하세요";        
    } else {
        if(filterBookId($bookId) == FALSE) {
            $bookIdErr = "ISBN과 숫자를 조합하여 5~12자까지 입력하세요";
        }
    }

    if(empty($bookName)){
        $nameErr = "도서명을 입력하세요";
    } else {
        if(filterName($bookName) == FALSE) {
            $nameErr = "최소 4자에서 50자까지 입력하세요";
        }
    }

    if(empty($unitPrice)){
        $unitPriceErr = "가격을 입력하세요";
    } else {
        if(filterPrice($unitPrice) == FALSE) {
            $unitPriceErr = "가격은 숫자만 입력하세요";
        } else if(filterPrice($unitPrice) < 0){
            $unitPriceErr = "가격은 양수만 입력하세요";
        } else if(filterPriceFloat($unitPrice) == FALSE) {
            $unitPriceErr = "소수점 둘째 자리까지만 입력하세요";
        }
    }

    if(empty($unitInStock)) {
        $stockErr = "재고수를 입력하세요";
    } else {
        if(filterStock($unitInStock) == FALSE) {
            $stockErr = "숫자만 입력하세요";
        }
    }

    if(empty($description)) {
        $descriptionErr = "상세설명을 입력하세요";
    } else {
        if(filterDescription($description) == FALSE) {
            $descriptionErr = "최소 80자 이상 입력하세요";
        }
    }

    if(empty($filename)) {
        $bookImageErr = "업로드 파일을 입력하세요";
    }

    if($bookIdErr == "" && $nameErr == "" && $unitPriceErr == "" && $descriptionErr == "" && $stockErr == "" && $bookImageErr == "") {
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
                require "./dbconn.php";

                $sql = "INSERT INTO book (
                    b_id, b_name, b_unitPrice, b_author, b_description, 
                    b_category, b_unitInStock, b_releaseDate, b_condition, b_fileName)
                    VALUES('$bookId', '$bookName', '$unitPrice', '$author', '$description',
                    '$category', '$unitInStock', '$releaseDate', '$condition', '$filename')";
                
                if ($conn->query($sql)) {
                    Header("Location:books.php");
                }
                
            } else {
                echo "파일이 업로드되지 않았습니다. 다시 시도해주세요!";
            }
        }
    }
    require "./addBook_Error.php";
?>