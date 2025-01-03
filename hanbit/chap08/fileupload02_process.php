<html>
    <head>
        <title>파일 업로드</title>
    </head>
    <body>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "post") {
            $name1 = $_POST["name1"];
            $title1 = $_POST["title1"];

            $name2 = $_POST["name2"];
            $title2 = $_POST["title2"];

            $name3 = $_POST["name3"];
            $title3 = $_POST["title3"];
            
            $filename1 = $_FILES["photo1"]["name"];
            $filename2 = $_FILES["photo2"]["name"];
            $filename3 = $_FILES["photo3"]["name"];

            $target_path1 = "/Applications/XAMPP/xamppfiles/temp/" . basename($filename1);

            if(file_exists("/Applications/XAMPP/xamppfiles/temp/" . $filename1)) {
                $filename1 = time().$filename1;
            }

            $target_path1 = "/Applications/XAMPP/xamppfiles/temp/" . basename($filename2);
            
            if(file_exists("/Applications/XAMPP/xamppfiles/temp/" . $filename2)) {
                $filename2 = time().$filename2;
            }

            $target_path1 = "/Applications/XAMPP/xamppfiles/temp/" . basename($filename3);
            
            if(file_exists("/Applications/XAMPP/xamppfiles/temp/" . $filename3)) {
                $filename3 = time().$filename3;
            }

            if(!move_uploaded_file($_FILES['photo1']['tmp_name'], $target_path1) ||
            !move_uploaded_file($_FILES['photo2']['tmp_name'], $target_path2) ||
            !move_uploaded_file($_FILES['photo3']['tmp_name'], $target_path2)) {
                return;
            }
        }
        ?>

        <table>
        <tr>
            <th width="100">이름</th>
            <th width="100">제목</th>
            <th width="100">파일</th>
        </tr>
        <tr>
            <td width="100"><?php echo $name1; ?></td>
            <td width="100"><?= $title1; ?></td>
            <td width="100"><?= $filename1; ?></td>
        </tr>
        <tr>
            <td width="100"><?php echo $name2; ?></td>
            <td width="100"><?= $title2; ?></td>
            <td width="100"><?= $filename2; ?></td>
        </tr>
        <tr>
            <td width="100"><?php echo $name3; ?></td>
            <td width="100"><?= $title3; ?></td>
            <td width="100"><?= $filename3; ?></td>
        </tr>
        </table>
    </body>

</html>