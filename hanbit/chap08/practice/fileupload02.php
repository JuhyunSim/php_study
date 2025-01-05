<html>
    <head>
        <title>파일 업로드02</title>
    </head>
    <body>
        <form action="fileupload02_process.php" method="POST" enctype="multipart/form-data">
        <p>이름1: <input type="text" name="name1"></p>
        <p>제목1: <input type="text" name="subject1"></p>
        <p>파일1: <input type="file" name="file1"></p>
        <p>이름2: <input type="text" name="name2"></p>
        <p>제목2: <input type="text" name="subject2"></p>
        <p>파일2: <input type="file" name="file2"></p>
        <p>이름3: <input type="text" name="name3"></p>
        <p>제목3: <input type="text" name="subject3"></p>
        <p>파일3: <input type="file" name="file3"></p>
        <input type="submit" value="파일업로드">
        </form>
    </body>
</html>