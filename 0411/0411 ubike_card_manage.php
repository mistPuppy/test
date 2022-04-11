<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>管理卡片</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <main id="main">

        <!-- ======= 整個版面 ======= -->
        <section id="blog" class="blog" style="margin-left: 15%;">
            <div class="container" data-aos="fade-up">


                <div class="row">

                    <!-- 右側已綁定卡片區 -->
                    <div class="col-lg-10 entries">


                        <article class="entry">

                            <center>
                                <h1 class="entry-title" style="margin-bottom:30px; font-size: 50px; ">
                                    <a href="#">卡片管理</a>
                                </h1>
                            </center>
                            <!-- ======= 已綁定卡片選項 ======= -->
                            <section id="featured" class="featured">

                                <div class="container">

                                    <div class="row">
                                        <!-- 已綁定的卡 -->
                                        <div style="padding-bottom: 5px;">

                                            <div class="icon-box" style="padding-left: 10%;">

                                                <i class="bi bi-card-checklist"></i>
                                                <h3><a href="#">悠遊卡</a></h3>
                                                <p style="padding-bottom: 10px;">
                                                    <!-- 交易紀錄按鈕 -->
                                                    <a style="margin-right: 10px;" class="btn btn-success" data-bs-toggle="collapse"
                                                        href="#collapseExample" role="button" aria-expanded="false"
                                                        aria-controls="collapseExample">
                                                        查看交易紀錄
                                                    </a>
                                                    <!-- 刪除綁定卡片按鈕 -->
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">
                                                        刪除卡片
                                                    </button>
                                                </p>
                                                <!-- 交易紀錄裡面的資料 -->
                                                <div class="collapse" id="collapseExample">
                                                    <div class="card card-body">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">First</th>
                                                                    <th scope="col">Last</th>
                                                                    <th scope="col">Handle</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td>@mdo</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Jacob</td>
                                                                    <td>Thornton</td>
                                                                    <td>@fat</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td colspan="2">Larry the Bird</td>
                                                                    <td>@twitter</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                </div>

                            </section>
                            <!-- 刪除綁定卡片按鈕的警示框 -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel" style="color:red;"><b>刪除卡片綁定</b></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" style="letter-spacing: 2px;">
                                            確定要取消綁定嗎?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">取消</button>
                                            <button type="button" class="btn btn-primary">確定</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="entry-content">
                                <div class="read-more">
                                    <a target="ifr_index" href="ubike_card_add.php">新增卡片</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

    </main>
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