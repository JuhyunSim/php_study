<html>
    <head>
        <title>POST 방식 예제</title>
    </head>
    <body>
        <?php
        function myMethod($num) {
            for($i=1; $i<=$num; $i++) {
                if($i % 2 == 0) {
                    echo "$i ";
                }
            }
        }

        if(isset($_POST["number"])) {
            $num = $_POST["number"];
            echo "1부터 {$num}까지 짝수는 ";
            myMethod($num);
            echo "입니다.";
        }

        ?>

        <form method="POST">
            <p>입력 숫자 : <input type="text" name="number"></p>
            <p><input type="submit" value="짝수 구하기"></p>
        </form>
    </body>
</html>