<html>
    <head>
        <title>예쩨</title>
    </head>
    <body>
        <?php
            if(isset($_GET["name"])) {
                $name = $_GET["name"];
            }
            if(isset($_GET["address"])) {
                $address = $_GET["address"];
            }
            if(isset($_GET["email"])) {
                $email = $_GET["email"];
            }
        ?>
        <p>이름: <?php echo $name; ?></p>
        <p>주소: <?php echo $address; ?></p>
        <p>이메일: <?php echo $email; ?></p>
    </body>
</html>