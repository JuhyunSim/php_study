<html>
    <head>
        <title>세션</title>
    </head>
    <body>
        <h4>-------세션 삭제 전-------</h4>
        
        <?php
        session_start();

        if (isset($_SESSION["user_ID"]) && $_SESSION["user_PW"]) {
            echo "설정된 세션 이름 userID : ". $_SESSION["user_ID"] . "<br>";
            echo "설정된 세션 이름 userPW : ". $_SESSION["user_PW"] . "<br>";

            unset($_SESSION["userID"]);
        } else {
            echo "설정된 세션 이름이 없습니다.";
        }
        ?>

        <h4>-------세션 삭제 후--------</h4>

        <?php
        if (isset($_SESSION["user_ID"])) {
            echo "설정된 세션 이름 userID: " . $_SESSION["user_ID"];
        } elseif (isset($_SESSION["user_PW"])) {
            echo "설정된 세션 이름 userPW: " . $_SESSION("user_PW");
        } else {
            echo "설정된 세션 이름 없습니다.";
        }
        ?>
    </body>
</html>