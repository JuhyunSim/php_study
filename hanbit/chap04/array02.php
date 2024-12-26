<html>
<head>
    <title>배열</title>
</head>
<body>
    <?php

    $gradeArr = ["홍길동" => 79, "홍길순" => 90, "수여인" => 70];

    $sum = 0;
    foreach($gradeArr as $name => $value) {
        echo $name . " : " . $value . "<br>";

        $sum += $value;
    }
    echo "합계 : {$sum} <br>";
    echo "평균 : " . $sum/3;
    ?>
</body>
</html>