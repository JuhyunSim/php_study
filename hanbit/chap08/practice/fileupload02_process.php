<html>
    <head>
        <title>파일업로드</title>
    </head>
    <body>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $allowed = array(
                "jpg" => "image/jpg",
                "jpeg" => "image/jpeg",
                "png" => "image/png",
                "gif" => "image/gif",
            );

            $file_directory = "/Applications/XAMPP/xamppfiles/temp/";

            $maxsize = 5 * 1024 * 1024;

            $files_input = ["file1", "file2", "file3"];
            $names = ["name1", "name2", "name3"];
            $subjects = ["subject1", "subject2", "subject3"];

            $upload_files = [];
            foreach($files_input as $index => $file) {
                if(isset($_FILES[$file]) && $_FILES[$file]["error"] == 0) {
                    $filename = $_FILES[$file]['name'];
                    $filetype = $_FILES[$file]['type'];
                    $filesize = $_FILES[$file]['size'];

                    if(!in_array($filetype, $allowed)) {
                        die("오류: 파일형식이 유효하지 않습니다.");
                    }

                    if($filesize > $maxsize) {
                        die("오류: 파일크기가 허용범위를 초과했습니다");
                    }

                    $original_filename = $filename;
                    if(file_exists($file_directory . $original_filename)) {
                        $filename = time() . $filename;
                    }
                    
                    $target_path = $file_directory . $filename;
                    if(move_uploaded_file($_FILES[$file]['tmp_name'], $target_path)) {
                        $upload_files[] = [
                            "name" => $_POST[$names[$index]],
                            "subject" => $_POST[$subjects[$index]],
                            "file" => $filename,
                        ];
                    } else {
                        $upload_files[] = [
                            "name" => $_POST[$names[$index]],
                            "subject" => $_POST[$subjects[$index]],
                            "file" => "파일 업로드 실패",
                        ];
                    }
                } else {
                    $upload_files[] = [
                        "name" => $_POST[$names[$index]],
                        "subject" => $_POST[$subjects[$index]],
                        "file" => "파일 없음"
                    ];
                }
            }
        }

        ?>

        <table border = "1">
            <tr>
                <th width=100>이름</th>
                <th width=100>제목</th>
                <th width=100>사진</th>
            </tr>
            <?php foreach($upload_files as $file): ?>
            <tr>
                <td width=100><?php echo htmlspecialchars($file["name"]) ?></td>
                <td width=100><?php echo htmlspecialchars($file["subject"])?></td>
                <td width=100><?php echo htmlspecialchars($file["file"])?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>