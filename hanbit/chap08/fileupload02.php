<html>
    <head>
        <title>파일 업로드</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data" action="fileupload02_process.php">
            <p>이름1 : <input type="text" name="name1"></p>
            <p>제목1 : <input type="text" name="title1"></p>
            <p>파일1 : <input type="file" name="photo1"></p>
            <p>이름2 : <input type="text" name="name2"></p>
            <p>제목2 : <input type="text" name="title2"></p>
            <p>파일2 : <input type="text" name="photo2"></p>
            <p>이름3 : <input type="text" name="name3"></p>
            <p>제목3 : <input type="text" name="title3"></p>
            <p>파일3 : <input type="text" name="file3"></p>
            <input type="submit" value="파일 업로드">
        </form>
    </body>
</html>