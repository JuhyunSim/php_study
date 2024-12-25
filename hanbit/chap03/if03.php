<html>
    <head>
        <title>조건문</title>       
    </head>
    <body>
        <?php
        $grade = 85;
        echo "점수 : " . $grade . "<br>";

        if ($grade > 90) {
            
            echo "A학점<br>";
        } 
        else if ($grade > 80) {
            echo "B학점<br>";
        } 
        else if ($grade > 70) {
            echo "C학점<br>";
        } 
        else if ($grade > 60) {
            echo "D학점<br>";
        } 
        else {
            echo "F학점<br>";
        }
        ?>
        
    </body>
</html>