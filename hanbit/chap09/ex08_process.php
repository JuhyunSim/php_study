<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $passwd = $_POST["passwd"];

    echo "아이디 : {$id}";
    echo "비밀번호 : {$passwd}";
    
}
?>