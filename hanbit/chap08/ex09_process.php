<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {

            $filename = $_FILES["photo"]["name"];
            $filetype = $_FILES["photo"]["type"];
            $filesize = $_FILES["photo"]["size"];

            $target_path = "./image/";

            if(file_exists($target_path . $filename)) {
                $filename = time() . $filename;
            }

            if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_path . $filename)) {
                echo "실제파일이름 : " . basename($filename) . "<br>";
                echo "저장파일이름 : " . $filename . "<br>";
                echo "파일콘텐츠유형 : " . $filetype . "<br>";
                echo "파일 크기 : " . $filesize . "<br>";
            } else {
                die("오류: 파일 업로드에 실패했습니다.");
            }
        }
    } else {
        die("업로드 파일이 없습니다.");
    }

?>