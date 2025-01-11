<?php

    function filterPassword($field) {
        $field = filter_var(trim($field));
        if(preg_match("/^[a-zA-Z가-힣]+$/", $field)) {
           return $field; 
        } else {
            return FALSE;
        }
    }

    $passwdErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $passwd = $_POST['passwd'];
        $id = $_POST['id'];
        if (empty($passwd)) {
            $passwdErr = "비밀번호를 입력하세요";
        } elseif (filterPassword($passwd) == FALSE) {
            $passwdErr = "비밀번호는 문자만 입력 가능합니다!";
        }
    } 
?>

<html>
    <head>
        <title>
            예제09
        </title>
        <style type="text/css">
            .required {
                color: red;
            }
        </style>
    </head>
    <body>
    <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <p>아 이 디 : <input type="text" name="id" value="<?= $id?>"><sup class="required">*</sup>
        <p>비밀번호 : <input type="password" name="passwd"><sup class="required">*</sup<span><?= $passwdErr ?></span></p>
    <input type="submit" value="전송">
        </form>
    </body>
</html>