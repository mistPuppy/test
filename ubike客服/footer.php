<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="../Fu_Jen_Catholic_University_Seal.jpg">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>專題評分管理系統｜天主教輔仁大學</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="css/sb-admin-2.css" rel="stylesheet">
    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>
</head>

<body id="page-top">
    <?php
    $method = $_GET["method"];

    switch ($method) {
        case "index":
            include "index.php";
            break;
        case "insert":
            include "新增專題成員.php";
            break;
        case "update":
            include "再修改專題成員.php";
            break;
        case "delete":
            include "delete.php";
            break;
        case "login":
            include "login.php";
            break;
        case "logout":
            include "logout.php";
            break;
        case "message":
            include "message.php";
            break;
        default:
            include "query.php";
    }
    ?>
    <div id="wrapper"  style="width:100%; position: absolute; bottom: 0;">

        <div id="content-wrapper" class="d-flex flex-column">

            <footer class="sticky-footer bg-white" style="color: white;">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <div style="font-size: 0.9rem;
                        font-weight: 800;
                        text-transform: uppercase;
                        display: block;
                        letter-spacing: 0.05rem;">
                            因涉及個人資料保護相關法規，請注意資料安全！
                        </div>
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>

    <script src="vendor/chart.js/Chart.min.js"></script>

    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>