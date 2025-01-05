<html>
    <head>
        <title>
        예제10
        </title>
    </head>
    <body>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $filename1 = $_FILES["photo1"]["name"];
            $filename2 = $_FILES["photo2"]["name"];
            
            $target_path = "./image/";
            if(file_exists($target_path . $filename1)) {
                $filename1 = time() . $filename1;
            }

            if(file_exists($target_path . $filename2)) {
                $filename2 = time() . $filename2;
            }
            
            if(!move_uploaded_file($_FILES["photo1"]["tmp_name"], $target_path . $filename1) ||
            !move_uploaded_file($_FILES["photo2"]["tmp_name"], $target_path . $filename2)) {
                return;
            }
        }
        ?>

        <table border="1">
            <tr>
                <th>제목</th>
                <th>파일</th>
            </tr>
            <tr>
                <td><?php echo $_POST["subject1"]; ?></td>
                <td><?php echo $filename1; ?></td>
            </tr>
            <tr>
                <td><?php echo $_POST["subject2"]; ?></td>
                <td><?php echo $filename2; ?></td>
            </tr>
        </table>
    </body>
</html>