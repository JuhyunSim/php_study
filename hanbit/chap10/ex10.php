<?php
    class EmptyException extends Exception {}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $passwd = $_POST["passwd"];

        try {
            if (empty($id)) {
                throw new EmptyException("아이디를 입력하세요!");
            }
            if (empty($passwd)) {
                throw new EmptyException("비밀번호를 입력하세요!");
            }
            echo "로그인이 성공했습니다.";

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
            <p>아이디 : <input type="text" name="id"></p>
            <p>비밀번호 : <input type="password" name="passwd"></p>
            <input type="submit" value="전송">
        </form>
    </body>
</html>