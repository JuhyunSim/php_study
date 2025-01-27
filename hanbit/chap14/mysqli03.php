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
        
        $result = $conn->query($sql);
        if ($result) {
            if ($result->num_rows > 0) {
                echo "<table>";
                    echo "<tr>";
                        echo "<th>아이디</th>";
                        echo "<th>비밀번호</th>";
                        echo "<th>이름</th>";
                    echo "</tr>";
                while ($row = $result->fetch_row()) { //fetch_array()면 key(id, passwd, name)로 출력 가능
                    echo "<tr>";
                        echo "<td>" . $row[0] . "</td>";
                        echo "<td>" . $row[1] . "</td>";
                        echo "<td>" . $row[2] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "검색어와 일치하는 값을 찾을 수 없습니다.";
            } 
        } else {
            echo "쿼리문을 실행할 수 없습니다." . mysqli_error($conn);
        }

        $conn->close();
        ?>
    </body>
</html>