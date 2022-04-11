<?php
    session_start();
    
    $ubike_user_phone=$_POST['ubike_user_phone'];
    $ubike_user_password=$_POST['ubike_user_password'];
    $error="";

    /*if(isset($_SESSION['ubike_user_phone'])){
      header('location:index.html?method=message&message=已登入');
    }*/
    
    if(isset($_POST['ubike_user_phone'])){
        $link=mysqli_connect("localhost", "root","12345678","ubike_sa");
        $sql="select * from ubike_user where ubike_user_phone ='$ubike_user_phone'";
        $rs=mysqli_query($link,$sql);

        if($record=mysqli_fetch_assoc($rs)){
            if($ubike_user_password != $record['ubike_user_password'] ){
                $error="密碼錯誤，請重新輸入"; 
            }
            else{
                $_SESSION['ubike_user_id']=$record['ubike_user_id'];
                $_SESSION['ubike_user_level']=$record['ubike_user_level'];
                $_SESSION['ubike_user_name']=$record['ubike_user_name'];
                $_SESSION['ubike_user_account']=$record['ubike_user_account'];
                $_SESSION['ubike_user_phone']=$record['ubike_user_phone'];
                $_SESSION['ubike_user_password']=$record['ubike_user_password'];
                header('location:index.html');
            }
        }
        else{
            $error="帳號不存在，請重新確認或進行會員註冊";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>會員登入 - Ubike</title>
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
  <main id="main">
    <!-- <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">首頁</a></li>
          <li>會員登入</li>
        </ol>
        <h2>會員登入</h2>

      </div>
    </section> -->

    <section id="contact" class="contact" style="height: 0px;">
      <div class="container">

        <div class="row">

          <div class="col-lg-6 ">
            <center><a href="#" class="mb-4 mb-lg-0" style="border:0"><img src="https://www.youbike.com.tw/images/wel_mask.png" width="75%" height="75%"></a>
          </div>

          <div class="col-lg-6" style="margin-top:130px">
            <form method="post" style="backgroung-color:#fff; box-shadow:0px 0px 4px 4px #F0F0F0; padding:45px;">
              <div class="form-group mt-3">
                <center><img src="https://ntpc.youbike.com.tw/photos/logo/ntpc/logo_header.gif" style="margin-top:-10px; margin-bottom:30px;">
              </div>
              <div class="row" style="margin-top: 20px;">
                <div class="col-md-6 form-group">
                    <input type="text" name="ubike_user_phone" class="form-control" id="ubike_user_phone" placeholder="請輸入手機號碼" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="ubike_user_password" id="ubike_user_password" placeholder="請輸入密碼" required>
                </div>
                <br><br><br>
              </div>
              <div class="text-center mt-3" style="color:#ed3c0d"><?php echo $error; ?></div>
              <div class="row mt-3">
                <div class="col-md-6 ">
                    <div class="text-center">
                        <button style="background: #e96b56;  border: 0;  border-radius: 50px;  padding: 10px 24px;  transition: 0.4s;">
                            <a href="register.php" style="color:#fff">註冊會員</a>
                        </button>
                    </div>                    
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <div class="text-center"><button type="submit" style="background: #e96b56;  border: 0;  border-radius: 50px;  padding: 10px 24px;  transition: 0.4s; color:#fff;">登入</button></div>
                </div>
              </div>              
            </form>
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