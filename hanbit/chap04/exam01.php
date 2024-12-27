<html>
    <head>
        <title>예제</title>
    </head>
    <body>
        <?php
            $score = [85, 80, 79, 75, 80, 99, 85, 80, 99, 78, 42, 97, 88, 74, 39, 68, 89, 70, 58, 93];
            $a = 0;
            $b = 0;
            $c = 0;
            $d = 0;
            $f = 0;

            for($i=0; $i<count($score); $i++){
                switch(intdiv($score[$i], 10)) {
                    case 10:
                    case 9: 
                        ++$a;
                        break;
                    case 8:
                        ++$b;
                        break;
                    case 7:
                        ++$c;
                        break;
                    case 6:
                        ++$d;
                        break;
                    default:
                        ++$f;
                }
            }

            echo "A학점: {$a} <br>";
            echo "B학점: {$b} <br>";
            echo "C학점: {$c} <br>";
            echo "D학점: {$d} <br>";
            echo "F학점: {$f} <br>";
        ?>
    </body>
</html>