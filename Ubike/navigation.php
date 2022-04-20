<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>YouBike&nbsp;微笑單車</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <script src="https://kit.fontawesome.com/86b54efa0d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <div style="height: 100%; width: 20%; border-left: 8px #e96b56 solid; border-radius: 5px">
        <div>
            <a href="index.php"><img style="width:70%; margin-left: 15%; margin-top: 10%; margin-bottom: 15%" src="../Ubike/assets/img/youbike_logo.png" alt="" class="img-fluid"></a>
        </div>

        <div style="box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1); margin-left: 15px; margin-right: 15px">
            <nav style="background-color: white; opacity: 0.88; margin-right: 10px; padding-top: 20px">
                <ul style="list-style: none; text-align: center; padding-left: 10px; line-height: 40px">
                    <li><a target="ifr_index" href="map.php"><i class="fa-solid fa-face-grin-wink"></i>&nbsp;<b>站點地圖</b></a></li>
                    <li><a href="#"><i class="fa-solid fa-face-grin-wink"></i>&nbsp;<b>最新消息</b></a></li>
                    <li><a href="#"><i class="fa-solid fa-face-grin-wink"></i>&nbsp;<b>服務中心</b></a></li>
                    <li><a href="#"><i class="fa-solid fa-face-grin-wink"></i>&nbsp;<b>使用說明</b></a></li>
                    <li><a href="#"><i class="fa-solid fa-face-grin-wink"></i>&nbsp;<b>公共自行車傷害險</b></a></li>
                    <li><a href="#"><i class="fa-solid fa-face-grin-wink"></i>&nbsp;<b>失物招領</b></a></li>
                    <li><a href="#"><i class="fa-solid fa-face-grin-wink"></i>&nbsp;<b>YouBike協尋</b></a></li>
                    <li><a href="#"><i class="fa-solid fa-face-grin-wink"></i>&nbsp;<b>維修通報</b></a></li>
                    <?php
                    if (isset($_SESSION['ubike_user_level'])){
                    ?>
                        <div id="navbar" class="navbar" style="margin-left: 9px; margin-bottom: 0px">
                        <ul>
                            <li class="dropdown" dropdown-menu-right><a href="#"><span><i class="fa-solid fa-face-grin-wink"></i>&nbsp;<b style="font-size: 16px; color: #e96b56">會員管理</b></span> <i class="bi bi-chevron-right"></i></a>
                                <ul style="line-height: 20px;">
                                    <li><a target="ifr_index" href="./ubike_card_manage.php"><b style="font-size: 16px; color: #e96b56">-&nbsp;卡片管理</b></a></li>
                                    <li><a href="#"><b style="font-size: 16px; color: #e96b56">-&nbsp;優惠管理</b></a></li>
                                    <li><a href="#"><b style="font-size: 16px; color: #e96b56">-&nbsp;補繳款項</b></a></li>
                                </ul>
                            </li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </div>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['ubike_user_level'])) {
                    ?>
                        <h6 style="margin-top: 10px;"><b><?php echo $_SESSION['ubike_user_name']; ?></b>&nbsp;您好！</h6>
                        <div style="text-align: center;">
                            <a href="logout.php"><input style="background-color: #e96b56; font-size: 14px" id="loginout" type="button" value="登出"></a>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div style="text-align: center;">
                            <a href="login.php"><input style="background-color: #e96b56; font-size: 14px" id="loginout" type="button" value="登入"></a>
                        </div>
                    <?php
                    }
                    ?>
                    <br>
                    <style>
                        #loginout {
                            border: 0;
                            font-size: 16px;
                            padding: 0px 15px;
                            margin-top: 12px;
                            background: lightgray;
                            color: #fff;
                            transition: 0.3s;
                            border-radius: 50px;
                        }

                        #loginout:hover {
                            background-color: #e6573f;
                        }
                    </style>
                </ul>
                <style>
                    nav a .fa-solid {
                        margin-right: -1.1em;
                        transform: scale(0);
                        transition: .1s;
                    }

                    nav a:hover .fa-solid {
                        margin-right: 0em;
                        transform: scale(1);
                    }

                    nav a:hover {
                        text-decoration: underline;
                    }
                </style>
            </nav>
        </div>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>