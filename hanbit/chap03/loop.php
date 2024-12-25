<html>

<head>
    <title>do-while문</title>
</head>
<body>
    <?php 
    $num = 5;
    for ($i = 0; $i < $num; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "&nbsp";
        }
        for ($j=0; $j<($num * 2) -1 -(2*$i); $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>
</body>
</html>