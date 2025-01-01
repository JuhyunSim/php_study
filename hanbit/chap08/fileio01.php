<html>
    <head>
        <title>파일 입출력</title>
    </head>
    <body>
        <?php
        echo "현재 디렉토리 : " . getcwd() . "<br>";
        echo 'PHP 실행 사용자: ' . get_current_user() . "<br>";

        $file = "gugudan.txt";

        $handle = fopen($file, "w");

        if ($handle) {
        for($x=2; $x<=9; $x++) {
            for($y=1; $y<=9; $y++) {
                $str = "{$x} X {$y} = " . ($x * $y) . "\n";
                fwrite($handle, $str);
            }
        }}
        else {
            echo "실패";
        }
        fclose($handle);
        echo "파일 쓰기 성공";

        ?>
    </body>
</html>