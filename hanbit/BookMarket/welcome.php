<!doctype html>
<html class="h-100">
<head>
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
    <?php
    require_once "./menu.php";
    ?>
    <?php
    $greeting = "도서 쇼핑몰에 오신 것을 환영합니다";
    $tagline = "Welcome to Web Market!"
    ?>
    <br>
        <main>
        <div class="container my-5">
            <div class="bg-body-tertiary p-5 rounded">
            <div class="col-sm-8 py-5 mx-auto">
                <h1 class="display-5 fw-normal"><?php echo $greeting ?></h1>
                <p class="col-md-8 fs-4">BookMarket</p>
            </div>
        </div>

        <div class="row align-items-md--stretch text-center">
            <div class="col-md-12">
                <div class="h-100 p-5">
                    <h2><?php echo $tagline ?></h2>
                    <?php
                    header("Refresh:5");
                    date_default_timezone_set("Asia/Seoul");
                    echo "현재 접속 일시 : ".date("Y/m/d h:i:s A");
                    ?>
                </div>

            </div>
        </div>

        </main>
    
    
    <?php
    require_once "./footer.php";
    ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
