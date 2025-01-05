<html>
    <head>
        <title>예제 10</title>
    </head>
    <body>
        <form action = "ex10_process.php" method = "POST" enctype="multipart/form-data">
            <p>제목1 <input type = "text" name="subject1"> <input type="file" name="photo1"></p>
            <p>제목2 <input type = "text" name="subject2"> <input type="file" name="photo2"></p>
            <input type="submit" value="파일 업로드">
        </form>
    </body>
</html>