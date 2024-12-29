<html>
    <head>
        <title>Form 태그</title>
    </head>
    <body>
        <h3>회원가입</h3>
        <form action="#" name="member" method="post">
            <p>아이디 : <input name="id" type="test"> <input type="button" value="아이디 중복 검사"></p>
            <p>비밀번호 : <input name="password" type="password"></p>
            <p>이름 : <input name="name" type="text"></p>
            <p>연락처 : <input name="phone1" type="text" maxlength=4>-
            <input name="phone2" type="text" maxlength=4>-
            <input name="phone3" type="text" maxlength=4>
            </p>
            <p>성별 : <input name="gender" type="radio" value="남성" checked> 남성
            <input name="gender" type="radio" value="여성"> 여성
             </p>
            <p>취미 : <input name="hobby1" type="checkbox" value="운동"> 운동
            <input name="hobby2" type="checkbox" value="독서"> 독서
            <input name="hobby3" type="checkbox" value="영화"> 영화
            </p>
            <p><input typ="submit" value="가입하기">
                <Input type="reset" value="다시쓰기">

        </form>
    </body>
</html>