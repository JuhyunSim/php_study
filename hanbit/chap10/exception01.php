<?php
function division($num1, $num2) {
    if ($num2 == 0) {
        throw new Exception('0으로 나누기');
    } else {
        $result = $num1 / $num2;
        echo "{$num1} / {$num2} = {$result} <br>";        
    }
}

try {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
    
        $num1 = filter_var($_POST["num1"], FILTER_VALIDATE_FLOAT);
        $num2 = filter_var($_POST["num2"], FILTER_VALIDATE_FLOAT);
    
        if ($num1 === false || $num2 === false) {
            throw new Exception('유효한 숫자를 입력하세요.');
        }

        division($num1, $num2);
    }
} catch (Exception $e) {
    echo "예외처리 발생 : " . $e->getMessage() . "<br>";
}

?>
<html>
    <head>
        <title>
            예외 처리
        </title>
    </head>
    <body>
        <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">  
            <p>숫 자1 : <input type="text" name="num1"></p>
            <p>숫 자2 : <input type="text" name="num2"></p>
            <input type="submit" value="전송">
        </form>
    </body>
</html>