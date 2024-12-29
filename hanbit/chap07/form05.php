<html>
    <head>
        <title>Form 태그</title>
    </head>
    <body>
        <h3>회원가입</h3>
        <form action="./form05_process.php" name="member" method="post">
            <p>아이디 : <input name="id" type="test"> <input type="button" value="아이디 중복 검사"></p>
            <p>비밀번호 : <input name="password" type="password"></p>
            <p>이름 : <input name="name" type="text"></p>
            <p>연락처 : 
                    <select name="phone1">
                        <option value="010">010</option>
                        <option value="011">011</option>
                        <option value="016">016</option>
                        <option value="017">017</option>
                        <option value="018">018</option>
                    </select>
            -<input name="phone2" type="text" maxlength=4 size=4>-
            <input name="phone3" type="text" maxlength=4 size=4>
            </p>
            <p>성별 : <input name="gender" type="radio" value="남성" checked> 남성
            <input name="gender" type="radio" value="여성"> 여성
             </p>
            <p>취미 : <input name="hobby1" type="checkbox" value="운동"> 운동
            <input name="hobby2" type="checkbox" value="독서"> 독서
            <input name="hobby3" type="checkbox" value="영화"> 영화
            </p>
            <p>
            <textarea name="comment" cols=30 rows=3 placeholder="가입인사를 입력해주세요"></textarea>
            </p>
            <p><input type="submit" value="가입하기">
                <Input type="reset" value="다시쓰기">
            </p>

        </form>
    </body>
</html>