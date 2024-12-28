<html>
    <head>
        <title>예제6</title>
    </head>
    <body>
        <?php
        function inputMethod(){
            $num = 100;
            return $num;
        }
        
        function display($a) {
            echo("숫자 : " . $a);
        }

        $a = inputMethod();
        display($a);
        ?>
    </body>
</html>