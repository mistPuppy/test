<?php
session_start();
$link = mysqli_connect("localhost", "root", "12345678", "ubike_sa");

if (isset($_POST['ubike_user_name'])) {
  if ($_POST['ubike_user_password'] === $_POST['ubike_user_password_check']) {
    $sql_insert = "insert into ubike_user (ubike_user_name, ubike_user_phone, ubike_user_account, ubike_user_password, ubike_user_level) values ('$_POST[ubike_user_name]', '$_POST[ubike_user_phone]', '$_POST[ubike_user_account]','$_POST[ubike_user_password]', 'user')";
    if (mysqli_query($link, $sql_insert)) {
      $reply = "<br>會員註冊成功";
    }
  } else {
    $reply = "輸入的兩組密碼不相符，請重新輸入";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>會員註冊 - Ubike</title>
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

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">首頁</a></li>
          <li>會員登入</li>
        </ol>
        <h2>會員註冊</h2>

      </div>
    </section> -->

  <section id="contact" class="contact">
    <div class="container">

      <div class="row">

        <div class="col-lg-6 ">
          <center><a href="#" class="mb-4 mb-lg-0" style="border:0"><img src="https://www.youbike.com.tw/images/wel_mask.png" width="75%" height="75%"></a>
        </div>

        <div class="col-lg-6" style="margin-top:100px">
          <form method="post" style="backgroung-color:#fff; box-shadow:0px 0px 4px 4px #F0F0F0; padding:45px;">
            <div class="form-group mt-3">
              <center><img src="https://ntpc.youbike.com.tw/photos/logo/ntpc/logo_header.gif" style="margin-top:-10px; margin-bottom:30px;">
            </div>
            <div class="row mt-3">
              <div class="col-md-6 form-group">
                <input type="text" name="ubike_user_name" class="form-control" id="ubike_user_name" placeholder="請輸入姓名" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="ubike_user_phone" id="ubike_user_phone" placeholder="請輸入手機號碼" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="mail" class="form-control" name="ubike_user_account" id="ubike_user_account" placeholder="請輸入電子信箱" required>
            </div>
            <div class="row mt-3" style="margin-bottom: 10px;">
              <div class="col-md-6 form-group">
                <input type="password" name="ubike_user_password" class="form-control" id="ubike_user_password" placeholder="請輸入密碼" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="password" name="ubike_user_password_check" class="form-control" id="ubike_user_password_check" placeholder="請再次輸入密碼" required>
              </div>
            </div>
            <div class="text-center mt-3" style="color:#ed3c0d"><br><?php echo $reply; ?></div>
            <div class="text-center mt-3">
              <a href="login.php" style="margin-right: 80px;"><button id="log_btn" type="button" style="border: 0;  border-radius: 50px;  padding: 10px 24px;  transition: 0.4s; color:#fff; margin-top: 20px">進入登入畫面</button></a>
              <button type="submit" style="margin-right: 40px; background: #e96b56;  border: 0;  border-radius: 50px;  padding: 10px 24px;  transition: 0.4s; color:#fff; margin-top: 20px">註冊</button>
            </div>
            <style>
              #log_btn{
                background-color: grey;
              }
              #log_btn:hover{
                background-color: #e96b56;
              }
            </style>
          </form>
          <?php

          ?>
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