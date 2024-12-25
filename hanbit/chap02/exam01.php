<html>

<head>
    <title>예제: 이름, 번호, 주소, 이메일 출력</title>
</head>
<body>

<?php 
    $name = '홍길동';
    $phone = '01012345678';
    $address = '인천시';
    $email = 'gdhongg@korea.co.kr';

    echo "이름 : " . $name . "<br>";
    echo "연락처 : " . $phone . "<br>";
    echo "주소 : " . $address . "<br>";
    echo "이메일 : " . $email . "<br>";

    echo "<br>==================================<br>";
    $a = 3;
    $b = 2;

    $a = $a + $b; //5
    $b = $a + 5; //10
    $c = $a + $b; //15

    $c = $c % 2; //1
    $a = $b + $c; //11
    $b = $a * $b; //110

    echo "a : $a, b : $b, c : $c"; // a = 11, b = 110, c = 1
    echo "<br>==================================<br>";

    $money = 3000;
    $price = 800;
    $num = 3;

    $change = $money - $price * $num;

    echo ("물건 가격 : " . $price . "<br>");
    echo ("구매 개수 : " . $num . "<br>");
    echo ("지불액 : " . $money . "<br>");
    echo ("거스름돈은 $change 원 입니다. ". "<br>");
?>

</body>
</html>