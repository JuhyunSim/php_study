<html>

<head>
    <title>continue</title>
</head>
<body>
    <?php 
    for($i=1; $i <=5; $i++) {
        if($i == 2 || $i == 4) {
            continue;
        }
        echo "숫자 : " . $i . "<br>";

    }
    ?>
</body>
</html>
