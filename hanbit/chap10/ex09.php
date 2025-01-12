<?php
    function invalidException($exception) {
        echo "예외 처리 발생: " . $exception->getMessage() . "<br>";
    }

    set_exception_handler("invalidException");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        try {
            if (!is_numeric($num1) || !is_numeric($num2)) {
                throw new Exception("숫자만 입력하세요!");
            }
            if ($num2 == 0) {
                throw new Exception("0으로 나눌 수 없습니다!");
            }
            $result = $num1 / $num2;
            echo "$num1 / $num2 = $result";
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
?>

<html>
    <head>
        <title>예제 08</title>
    </head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <p>숫자1 : <input type="text" name="num1"></p>
            <p>숫자2 : <input type="text" name="num2"></p>
            <input type="submit" value="전송">
        </form>
    </body>
</html>