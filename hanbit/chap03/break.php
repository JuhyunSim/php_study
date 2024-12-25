<html>
    <head>
        <title>break</title>
    </head>
    <body>
        <?php
        for($i = 1; $i <= 10; $i++) {
            echo "숫자 : " . $i;
            echo"<br>";
            if ($i == 5) {
                break;
            }
        }
        ?>
    </body>
</html>