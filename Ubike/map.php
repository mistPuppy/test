<?php

//測資
$ubike_station_id = 's002';

$link = mysqli_connect("localhost", "root", "12345678", "ubike_sa");
$sql = "select * from ubike_station where ubike_station_id ='$ubike_station_id'";

$rs = mysqli_query($link, $sql);
if ($record = mysqli_fetch_assoc($rs)) {
    $ubike_station_name = $record['ubike_station_name'];
}
$tag = $_GET['tag'];

?>
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

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <script>

    </script>

</head>

<body>


    <div style="width:100%; height: 690px">
        <div id="search" style="height: 0px;">
            <div class="search_sub">
                <form action="" method="post" style="width: 50%;">
                    <input class="form-control" placeholder="尋找站點..." type="email" name="email">
                    <input type="submit" value="搜尋">
                </form>
                <div>
                    <input id="alter_func" style="position: absolute; z-index: 1" type="button" value="1.0">
                    <input id="alter_func" style="position: absolute; z-index: 1; margin-left: 67px" type="button" value="2.0">
                    <input id="alter_func" style="position: absolute; z-index: 1; margin-left: 180px" type="button" value="借車">
                    <input id="alter_func" style="position: absolute; z-index: 1; margin-left: 257px" type="button" value="還車">
                    <?php
                    if ($_SESSION['tag'] == 0) {
                    ?>
                        <button class="borr_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <b>掃碼借車</b>
                        </button>
                        <style>
                            .borr_btn {
                                height: 120px;
                                width: 120px;
                                position: absolute;
                                z-index: 1;
                                margin-left: 80%;
                                margin-top: 38%;
                                border-radius: 100px;
                                background-color: white;
                                font-size: 18px;
                                background-color: #e96b56;
                                transition: 0.5s;
                                color: white;
                                border: none
                            }

                            .borr_btn:hover {
                                background: #da543d;
                            }
                        </style>
                    <?php
                    }
                    ?>
                    <?php
                    if ($_SESSION['tag'] == 1) {
                    ?>
                        <button class="borr_btn" data-bs-toggle="modal" data-bs-target="#Modal">
                            <b>還車</b>
                        </button>
                        <style>
                            .borr_btn {
                                height: 120px;
                                width: 120px;
                                position: absolute;
                                z-index: 1;
                                margin-left: 80%;
                                margin-top: 38%;
                                border-radius: 100px;
                                background-color: white;
                                font-size: 18px;
                                background-color: 	#EA0000;
                                transition: 0.5s;
                                color: white;
                                border: none
                            }

                            .borr_btn:hover {
                                background: #CE0000;
                            }
                        </style>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <?php
            if (isset($_SESSION['ubike_user_level'])) {
            ?>
                <div style="color: #444444;" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 id="exampleModalLabel">請掃碼</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="borrow_dblink.php" method="post">


                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">請輸入「車號」來模擬掃碼：（如：b001）</label>
                                        <input type="text" class="form-control" name="ubike_bike_id_borrow" required>

                                        <input type="hidden" name="tag" value="1">

                                        <input type="hidden" name="ubike_station_name" value="<?php echo $ubike_station_name ?>">
                                        <input type="hidden" name="ubike_borrow_time" value="<?php $ubike_borrow_time = date('Y-m-d G:i:T', strtotime('+8HOUR'));
                                                                                                echo $ubike_borrow_time ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                                        <button type="submit" class="btn btn-primary">確定</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="color: #444444;" class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5>還車步驟</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="return_dblink.php" method="post">

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">1.請輸入「車號」來模擬掃碼：（如：b001）</label>
                                        <input type="text" class="form-control" name="ubike_bike_id_borrow" value="<?php echo $ubike_bike_id_borrow ?>" required>

                                        <input type="hidden" name="ubike_borrow_time" value="<?php $ubike_borrow_time = date('Y-m-d G:i:T', strtotime('+8HOUR'));;
                                                                                                echo $ubike_borrow_time ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">2.請選擇還車站點：</label>
                                        <select name="station_id" class="form-select">
                                            <option value="1">輔大站</option>
                                            <option value="2">濟時站</option>
                                            <option value="3">中美堂站</option>
                                        </select>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                                        <button type="submit" class="btn btn-primary">確定</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="color: red;" id="exampleModalLabel"><b>請先登入</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="color: #444444;">
                                請先登入，以使用免持卡租車服務！
                            </div>
                        </div>
                    </div>
                </div>
                <div style="color: #444444;" class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="color: red;" id="exampleModalLabel"><b>請先登入</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="color: #444444;">
                                請先登入，以使用免持卡租車服務！
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <style>
            #search {
                color: #fff;
                font-size: 14px;
            }

            #search .search_sub {
                padding-top: 15px;
                padding-left: 30px;
            }

            #search .search_sub h4 {
                font-size: 24px;
                margin: 0 0 20px 0;
                padding: 0;
                line-height: 1;
                font-weight: 600;
            }

            #search .search_sub form {
                background: #fff;
                padding: 6px 10px;
                position: relative;
                border-radius: 50px;
            }

            #search .search_sub form input[type=email] {
                border: 0;
                padding: 8px;
                width: calc(100% - 140px);
                height: 30px;
                color: grey;
            }

            #search .search_sub form input[type=submit] {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                border: 0;
                background: none;
                font-size: 16px;
                padding: 0 30px;
                margin: 3px;
                background: #e96b56;
                color: #fff;
                transition: 0.3s;
                border-radius: 50px;
            }

            #search .search_sub form input[type=submit]:hover {
                background: #e6573f;
            }

            #alter_func {
                border: 0;
                background: none;
                font-size: 16px;
                padding: 5px 20px;
                margin-top: 12px;
                background: lightgray;
                color: #fff;
                transition: 0.3s;
                border-radius: 50px;
            }

            #alter_func:focus {
                background: #e96b56;
            }
        </style>
        <iframe src="googlemap.php" style="border:0; height: 100%; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>


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