<html>
    <head>
        <title>
            세션
        </title>
    </head>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $user_id = $_POST["id"];
                $user_pw = $_POST["passwd"];

                if ($user_id == "memberId" && $user_pw == "admin") {
                    session_start();
                    $_SESSION["user_ID"] = $user_id;
                    $_SESSION["user_PW"] = $user_pw;

                    echo "세션 설정이 성공했습니다<br>";
                    echo $user_id . "님 환영합니다.";
                } else {
                    echo "세션 설정에 실패했습니다.";
                }
            }
        ?>
    </body>
</html>