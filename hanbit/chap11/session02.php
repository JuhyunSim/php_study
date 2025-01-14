<html>
    <head>
        <title>
            세션
        </title>
    </head>
    <body>
        <?php 
            session_start();
            $user_id = $_SESSION["user_ID"];
            $user_pw = $_SESSION["user_PW"];

            echo "설정된 세션의 속성값 [1] : ". $user_id . "<br>";
            echo "설정된 세션의 속성값 [1] : ". $user_pw . "<br>";
        ?>
    </body>
</html>