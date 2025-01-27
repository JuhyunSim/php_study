<html>
    <head>
        <title>
            데이터베이스 연동
        </title>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "admin";
        $password = "admin1234!";
        $dbname = "phpbooddb";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM MEMBER";

        $stmt = $conn->prepare($sql);

        $result = $stmt->execute();

        if ($result) {
            $stmt->bind_result($id, $passwd, $name);
            echo "<table>";
                echo "<tr>";
                    echo "<th>아이디</th>";
                    echo "<th>비밀번호</th>";
                    echo "<th>이름</th>";
                echo "</tr>";
            while ($stmt->fetch()) {
                echo "<tr>";
                    echo "<th>" . $id . "</th>";
                    echo "<th>" . $passwd . "</th>";
                    echo "<th>" . $name . "</th>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "쿼리문을 실행할 수 없습니다. " . $conn->error();
        } 

        $conn->close();
        ?>
    </body>
</html>