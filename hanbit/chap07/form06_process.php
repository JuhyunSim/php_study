<html>
    <head>
        <title>Form 태그</title>
    </head>
    <body>
        <?php
        $id = $_POST["id"];
        $password = $_POST["password"];
        $name = $_POST["name"];
        $phone1 = $_POST["phone1"];
        $phone2 = $_POST["phone2"];
        $phone3 = $_POST["phone3"];
        $gender = $_POST["gender"];
        
        $hobby = "";
        if(isset($_POST["hobby"]))
        $hobby=$_POST["hobby"];

        if(isset($_POST["comment"]))
        $comment=$_POST["comment"];

        ?>

        <p>아이디 : <?php echo $id?></p>
        <p>비밀번호 : <?php echo $password?></p>
        <p>이름 : <?php echo $name?></p>
        <p>연락처 : <?php echo "{$phone1}-{$phone2}-{$phone3}"?></p>
        <p>성별 : <?php echo $gender?></p>
        <p>취미 :
             <?php 
                if($hobby != null)  {
                    for($i=0; $i<count($hobby); $i++) {
                        echo $hobby[$i];
                    }
                }
            ?></p>
        <p>가입인사 : <?php echo $comment?></p>
    </body>
</html>