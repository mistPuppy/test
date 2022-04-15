<?php 

    //測資
    $ubike_transaction_id = 1;

    $ubike_station_borrow = $_POST['ubike_station_borrow'];
    $ubike_bike_id = $_POST['ubike_bike_id'];

    $link = mysqli_connect("localhost","root","12345678","ubike_sa");
    $sql="select * from ubike_transaction where ubike_transaction_id ='$ubike_transaction_id'";

    $rs = mysqli_query($link,$sql);
    if($record = mysqli_fetch_assoc($rs)){
        $ubike_user_id = $record[ubike_user_id];
        $ubike_card_id = $record[ubike_card_id];
        $ubike_bike_id = $record[ubike_bike_id];
        $ubike_transaction_borrow = $record[ubike_transaction_borrow];
        $ubike_transaction_return = $record[ubike_transaction_return];
        $ubike_station_borrow = $record[ubike_station_borrow];
        $ubike_station_return = $record[ubike_station_return];
    } 

   

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - Eterna Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
			
          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <?php echo $ubike_station_return; ?>
              </h2>

              <div class="entry-content">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_2">還車</button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 id="exampleModalLabel">還車成功！</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <table>
                          <tr>
                            <td>價格</td>
                            <td style="text-align: right;">10元</td>
                          </tr>

                          <tr>
                            <td>騎乘時間</td>
                            <td style="text-align: right;">10分鐘</td>
                          </tr>

                          <tr>
                            <td>騎乘車號</td>
                            <td style="text-align: right;"><?php echo $ubike_bike_id; ?></td>
                          </tr>

                          <!-- 
                            <tr>
                              <td>騎乘距離</td>
                              <td style="text-align: right;">2km</td>
                            </tr> 
                          -->
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                
              </div>

            </article><!-- End blog entry -->
          </div><!-- End blog entries list -->
        </div>
      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>