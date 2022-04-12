<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>新增卡片</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />


    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <form method="post" action="ubike_card_dblink.php">
        <?php
        $method = "card_insert";
        $ubike_card_type = $_GET["ubike_card_type"];
        $ubike_user_name = $_SESSION["ubike_user_name"];
        $ubike_user_account = $_SESSION["ubike_user_account"];
        $ubike_user_id = $_SESSION["ubike_user_id"];
        $ubike_card_id = "";
        ?>
        <input type=hidden name="method" value="<? echo $method ?>">
        <input type=hidden name="ubike_user_id" value="<? echo $ubike_user_id ?>">
        <input type=hidden name="ubike_card_type" value="<? echo $ubike_card_type ?>">

        <main id="main">
            <!-- ======= 整個版面 ======= -->
            <section id="blog" class="blog" style="margin-left: 15%;">
                <div class=" container" data-aos="fade-up">
                    <div class="row">

                        <!-- 右側新增卡片區 -->
                        <div class="col-lg-10 entries">
                            <article class="entry">
                                <center>
                                    <h1 class="entry-title" style="margin-bottom:30px; font-size: 50px; ">
                                        <a href="#">新增<? echo $ubike_card_type ?></a>
                                    </h1>
                                </center>
                                <!-- ======= 一卡通 ======= -->
                                <div class="container">
                                    <!-- 輸入訊息 -->
                                    <section id="contact" class="contact">
                                        <div class="container">
                                            <div class="row">
                                                <div>

                                                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                                        <h4><?php echo $ubike_user_name ?>，您好:</h4>
                                                        <br>
                                                        <center>
                                                            <div class="input-group mb-3" style="width:80%;">
                                                                <span class="input-group-text" id="basic-addon1">帳號</span>
                                                                <input type="text" class="form-control" value="<? echo $ubike_user_account ?>" aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                        </center>
                                                        <center>
                                                            <div class="input-group mb-3" style="width:80%;">
                                                                <span class="input-group-text">卡號:</span>
                                                                <input required name="ubike_card_id" type="text" class="form-control" value="<? echo $ubike_card_id ?>" aria-label="Amount (to the nearest dollar)">

                                                            </div>
                                                        </center>
                                                        <br>
                                                        <div class="text-center"><button type="submit" style="background-color: #e96b56;color: #fff;padding: 6px 20px;transition: 0.3s;font-size: 14px;border-radius: 4px; border: none;">送出</button></div>
                                                       

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    </form>


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