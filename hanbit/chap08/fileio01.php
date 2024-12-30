<html>
    <head>
        <title>파일 입출력</title>
    </head>
    <body>
        <?php
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