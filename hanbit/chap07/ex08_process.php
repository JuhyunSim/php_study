<html>
    <head>
        <title>예쩨</title>
    </head>
    <body>
        <?php
            if(isset($_POST["name"])) {
                $name = $_POST["name"];
            }
            if(isset($_POST["address"])) {
                $address = $_POST["address"];
            }
            if(isset($_POST["email"])) {
                $email = $_POST["email"];
            }
        ?>
        <p>이름: <?php echo $name; ?></p>
        <p>주소: <?php echo $address; ?></p>
        <p>이메일: <?php echo $email; ?></p>
    </body>
</html>