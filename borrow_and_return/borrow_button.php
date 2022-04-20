<?php 

    //測資
    $ubike_station_id = 's002';

    $link = mysqli_connect("localhost","root","12345678","ubike_sa");
    $sql="select * from ubike_station where ubike_station_id ='$ubike_station_id'";

    $rs = mysqli_query($link,$sql);
    if($record = mysqli_fetch_assoc($rs)){
        $ubike_station_name = $record['ubike_station_name'];
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

    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
			
          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <?php echo $ubike_station_name; ?>
              </h2>

              <div class="entry-content">
				   

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">掃碼借車</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 id="exampleModalLabel">請掃碼</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="borrow_dblink.php" method="post">

                          
                          <div class="mb-3">  
                            <label for="recipient-name" class="col-form-label">請輸入「車號」來模擬掃碼(ex:b001)：</label>
                            <input type="text" class="form-control" name="ubike_bike_id" required>

                            <input type="hidden" name="ubike_station_name" value="<?php echo $ubike_station_name ?>">
                            <input type="hidden" name="ubike_borrow_time" value="<?php $ubike_borrow_time = date('Y-m-d h:i:s', time()); date_default_timezone_set(prc); echo $ubike_borrow_time ?>">
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