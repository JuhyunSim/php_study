<html>
    <head>
        <title>
            예제8
        </title>
        <script type="text/javascript">
function checkLogin() {
                // 아이디와 비밀번호 가져오기
                var id = document.getElementById("id").value.trim();
                var passwd = document.getElementById("passwd").value.trim();

                // 아이디 입력 확인
                if (id === "") {
                    alert("아이디를 입력하세요.");
                    document.getElementById("id").focus();
                    return false;
                }

                // 비밀번호 입력 확인
                if (passwd === "") {
                    alert("비밀번호를 입력하세요.");
                    document.getElementById("passwd").focus();
                    return false;
                }

                // 비밀번호에 아이디 포함 여부 확인
                if (passwd.includes(id)) {
                    alert("비밀번호는 id를 포함할 수 없습니다.");
                    document.getElementById("passwd").focus();
                    return false;
                }

                document.form.submit;
            }
        </script>
    </head>
    <body>
            <form action="ex08_process.php" method="post" name="form">
                <p>아 이 디 : <input type="text" name="id" id="id"><sup class="required">*</sup></p>
                <p>비밀번호 : <input type="password" name="passwd" id="passwd"><sup class="required">*</sup></p>
                <input type="button" value="전송" onclick="checkLogin()">
            </form>
    </body>
</html>