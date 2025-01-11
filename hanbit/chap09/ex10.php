<?php

function filterPassword($field) {
    $field = trim($field);
    $pattern = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/";

    if (preg_match($pattern, $field)) {
        return $field;
    } else {
        return FALSE;
    }
}

$passwdErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $passwd = $_POST["passwd"];

    if (empty($passwd)) {
        $passwdErr = "비밀번호를 입력하세요";
    } elseif (filterPassword($passwd) == FALSE) {
        $passwdErr = "비밀번호는 영문+숫자+특수기호 8자리 이상으로 구성하여야 합니다";
    }

    echo "아이디 : {$id} <br>";
    echo "비밀번호 : {$passwd}";
}
?>

<html>
    <head>
        <title>
            예제8
        </title>
    </head>
    <body>
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="form">
                <p>아 이 디 : <input type="text" name="id" id="id" value="<?= $id ?>"><sup class="required">*</sup></p>
                <p>비밀번호 : <input type="password" name="passwd" id="passwd"><sup class="required">*</sup><span class="error"><?php echo $passwdErr; ?></span></p>
                <input type="submit" value="전송">
            </form>
    </body>
</html>