<html>
    <head>
        <title>GET 방식 예제</title>
    </head>
    <body>
        <?php
        function starMethod($len) {
            for($i=0; $i<$len; $i++) {
                for($j=$len-2-$i; $j>=0; $j--) {
                    echo "&nbsp";
                }
                for($j=0; $j<$i*2 + 1; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        }

        if(isset($_GET["number"])) {
            $num = $_GET["number"];
            starMethod($num);
        }

        ?>

        <form method="GET">
            <p>입력 숫자 : <input type="text" name="number"></p>
            <p><input type="submit" value="삼각형 만들기"></p>
        </form>
    </body>
</html>