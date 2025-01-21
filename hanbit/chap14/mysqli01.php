<html>
    <head>
        <title>데이터베이스 연동</title>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "admin";
        $password = "admin1234!";
        $dbname = "exercisedb";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("데이터베이스 연결 실패: " . mysqli_connect_error());
        }
        echo "데이터베이스 연결 성공: " .mysqli_get_host_info($conn);
        mysqli_close($conn);
        ?>
    </body>
</html>