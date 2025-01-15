<html>
    <head>
        <title>쿠키</title>
    </head>
    <body>
        <h4>=======쿠키 삭제 전=======</h4>

        <?php
        if (isset($_COOKIE["userID"]) && isset($_COOKIE["userPW"])) {

            $user_id = $_COOKIE['userID'];
            $user_pw = $_COOKIE['userPW'];

            echo $user_id . "<br>";
            echo $user_pw . "<br>";
            setCookie("userID", "");
            setCookie("userPW", '', 0);
        } else {
            echo "설정된 쿠키가 없습니다.";
        }
        ?>

        <h4>====쿠키 삭제 후====</h4>
        <?php
        if(isset($_COOKIE["userID"])) {
            $user_id = $_COOKIE['userID'];
            echo "userID 쿠키값 : " . $user_id . "<br>";
        } else {
            echo "설정된 쿠키값이 없습니다.";
        }
        if(isset($_COOKIE["userPW"])) {
            $user_pw = $_COOKIE["userPW"];
            echo "userPW 쿠키값 : " . $user_pw;
        } else {
            echo "설정된 쿠키값이 없습니다.";
        }
        ?>
    </body>
</html>