<html>
    <head>
        <title>파일 업로드</title>
    </head>
    <body>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
                
                $filename = $_FILES["photo"]["name"];
                $filetype = $_FILES["photo"]["type"];
                $filesize = $_FILES["photo"]["size"];

                $allowed = array(
                    "jpg" => "image/jpg",
                    "jpeg" => "image/jpeg",
                    "png" => "image/png",
                    "gif" => "image/gif"
                );

                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if(!array_key_exists($ext, $allowed)) {
                    die("오류: 올바른 확장자가 아닙니다.");
                }

                $maxsize = 5 * 1024 * 1024;
                if($filesize > $maxsize) {
                    die("오류: 파일 크기가 최대 허용 크기를 초과했습니다.");
                }

                $original_filename = $filename;
                $file_directory = "/Applications/XAMPP/xamppfiles/temp/";
                if(file_exists($file_directory . $original_filename)) {
                    $filename = time() . $filename;
                }
                
                move_uploaded_file($_FILES["photo"]["tmp_name"], $file_directory);

                echo "이름 : " . $_POST["name"] . "<br>";
                echo "제목 : " . $_POST["subject"] . "<br>";
                echo "=========================<br>";
                echo "파일명 : {$filename} <br>"; 
                echo "파일유형 : {$filetype} <br>"; 
                echo "파일크기 : {$filesize} <br>"; 
            }
        }
        ?>
    </body>
</html>