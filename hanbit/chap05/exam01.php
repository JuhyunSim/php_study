<html>
    <head>
        <title>예제</title>
    </head>
    <body>
        <?php
        function myMethod() {
            function innerMethod() {
                echo "I Like Cat";
            }
            echo "I Like Dog";
        }
        myMethod();
        myMethod();
        ?>
    </body>
</html>