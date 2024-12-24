<html>
<head>
    <title>PHP 기본 구조</title>
</head>
<body>
    <?php
    echo nl2br("Hello PHP!\n");
    echo "Hello! Hypertext Preprocessor<br>";

    echo "Hello!", "Hypertext ", "Preprocessor<br>";
    // print "Hello!", "Hypertext ", "Preprocessor";
    ?>

    <?php
    $name = "홍길순";
    echo "나의 이름은 {$name}입니다.<br>";
    echo "나의 이름은", $name, "입니다.<br>";
    ?>
</body>
</html>