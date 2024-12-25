<html>
    <head>
        <title>while문</title>
    </head>
    <body>
        <?php
        $i = 1;
        while($i <= 10) {
            if($i % 2 == 0) {
                echo "{$i}[은]는 짝수입니다. <br>";
            } 
            else {
                echo "{$i}[은]는 홀수입니다. <br>";
            }
            $i++;
        }
        ?>
    </body>
</html>