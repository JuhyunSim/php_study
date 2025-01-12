<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];

        try {
            if (!filter_var($num, FILTER_VALIDATE_INT) || !filter_var($num, FILTER_VALIDATE_FLOAT)) {
                throw new Exception("숫자가 아닙니다.");
            }
            
            $result = $num / 2;
            echo "결과 : $num / 2 = $result";
        } catch (Exception $e) {
            echo "오류 발생 : " . $e->getMessage();
        }
    }
?>

<html>
    <head>
        <title>예제 08</title>
    </head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <p>숫자 : <input type="text" name="num"></p>
            <input type="submit" value="전송">
        </form>
    </body>
</html>