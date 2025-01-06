<html>
    <head>
        <title>유효성 검사</title>
    </head>
    <script type="text/javascript">
       function checkLogin() {
            for(i=0; i<document.loginForm.id.value.length; i++) {
                var ch = document.loginForm.id.value.charAt(i);
                if(!('a' <= ch && ch <= 'z')) {
                    alert("아이디는 영문 소문자만 입력 가능합니다.");
                    document.loginForm.id.focus();
                    return;
                }   
            }

            if(isNaN(document.loginForm.passwd.value)) {
                alert("비밀번호는 숫자만 입력 가능합니다.");
                document.loginForm.passwd.focus();
                return;
            }
            document.loginForm.submit();
       }
    </script>
    <body>
        <form name="loginForm" action="client_validation01_process.php" method="POST">
            <p>아 이 디 : <input type="text" name="id"></p>
            <p>비밀번호 : <input type="password" name="passwd"></p>
            <input type="button" value="전송" onClick="checkLogin()">
        </form>g
    </body>
</html>