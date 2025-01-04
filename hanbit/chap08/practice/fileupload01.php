<html>
    <head>
        <title>파일 업로드</title>
    </head>
    <body>
        <form action = "fileupload01_process.php" method = "POST" enctype = "multipart/form-data">
            <p>이름 : <input type = "text" name = "name"></p>
            <p>제목 : <input type = "text" name = "subject"></p>
            <p>파일 : <input type = "file" name = "photo"></p>
            <input type = "submit" value = "파일 업로드">
        </form>
    </body>
</html>