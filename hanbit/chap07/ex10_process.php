<html>
    <head>
        <title>예쩨</title>
    </head>
    <body>
        <?php
            $fruit = [];
            if($_GET["fruit"] != null) {
                $fruit = $_GET["fruit"];
            }

        ?>

            <b>선택한 과일</b>
            <br>
            <br>
            <p><?php
            for($i=0; $i<count($fruit); $i++) {
                echo $fruit[$i] . " ";
            }
            ?>
        </form>        
    </body>
</html>