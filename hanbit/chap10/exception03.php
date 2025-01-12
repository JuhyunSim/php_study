<?php

class EmptyException extends Exception {}
class InvalidIntException extends Exception {}

try {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $passwd = $_POST["passwd"];

        if ($id == "") {
            throw new EmptyException("id를 입력하세요.");
        }

        if ($passwd == "") {
            throw new EmptyException("password를 입력하세요.");
        }
        
        if (!ctype_digit($passwd)) {
            throw new InvalidIntException("password는 숫자만 입력하세요.");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<html>
    <head>
        <title>예외 처리</title>
    </head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <p>아 이 디 : <input type = "text" name="id"></p>
            <p>비밀번호 : <input type = "password" name="passwd"></p>
            <input type="submit" value="전송">
        </form>
    </body>
</html>