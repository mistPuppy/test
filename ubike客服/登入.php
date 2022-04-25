<?php
$error = $_GET['error'];
?>
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

    <form action="登入check.php" method="post">
        <div id="wrapper">

            <div id="content-wrapper" class="d-flex flex-column">

                <div id="content">

                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <a class="sidebar-brand d-flex align-items-center justify-content-center" target="pic">
                            <div class="sidebar-brand-icon rotate-n-15">
                            </div>
                            <div id="sideBar" class="sidebar-brand-text mx-3" style="color: white;
                font-size: 1.2rem;
                font-weight: 800;
                text-align: center;
                text-transform: uppercase;
                display: block;
                letter-spacing: 0.05rem;">專題評分管理系統<sup>&nbsp;輔仁大學
                                </sup></div>
                        </a>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" target="pic" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <span id="dropDown" class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 1rem;
                                font-weight: 800;
                                text-align: center;
                                text-transform: uppercase;
                                display: block;
                                letter-spacing: 0.05rem;">專題評分系統權限準則
                                </a>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" target="pic" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    <span id="dropDown" class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 1rem;
                                font-weight: 800;
                                text-align: center;
                                text-transform: uppercase;
                                display: block;
                                letter-spacing: 0.05rem;">帳號管理系統權限準則
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <style>
                        @media (min-width: 992px) {}

                        .masthead:before {
                            content: "";
                            position: absolute;
                            top: 70px;
                            bottom: 0;
                            right: 0;
                            left: 0;
                            height: 603px;
                            width: 49.35%;
                            background-color: rgba(0, 0, 0, 0.07);
                        }
                    </style>

                    <center>
                        <table style="margin-bottom: 40px; margin-top: 30px;">
                            <tr>
                                <td style="border-right: 2px lightgray solid;">
                                    <center>
                                        <div style="width: 556px;">
                                            <div class="masthead">
                                                <div class="masthead-content text-white">
                                                    <div>
                                                        <img style="width: 350px;" src="./img/150671103_3670577539730571_2722847381260301321_n.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                </td>
                                <td>

                                    <div style="margin-left: 73px;">
                                        <div class="card o-hidden border-0 shadow-lg my-5" style="width: 500px; border-radius: 0%;">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="p-5">
                                                            <div class="text-center">
                                                                <h1 class="h4 mb-4" style="color: #808080;">登入</h1>
                                                            </div>
                                                            <form class="user">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="LDAP 帳號" style="font-size: 14px;" name="id">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="密碼" style="font-size: 14px;" name="password">
                                                                </div>
                                                                <br>
                                                                <input style="width: 404px; font-size: 16px; padding: 0px; background-color:#4e73df; color:white" class="form-control form-control-user" type="submit" value="登入">
                                                                <center style="color: red;"><br><?php echo $error ?></center>
                                                            </form>
                                                            <hr>
                                                            <div class="text-center">
                                                                <p style="color: #808080; font-size: 14px; margin-top: 30px; margin-bottom: 0;">
                                                                    部分系統功能限制請先閱讀上方權限準則！</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </center>

                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: red;">
                                    <div class="spinner-grow text-danger" role="status">
                                        <span class="visually-hidden"></span>
                                    </div>&nbsp;<b>權限及身分認證</b>
                                </h5>
                            </div>
                            <div class="modal-body" style="margin-left: 65px;">
                                您即將進入專題評分系統，權限準則如下：<br>
                                <table class="tableBor" style="margin-top: 10px;">
                                    <tbody>
                                        <tr class="tableBor">
                                            <th class="tableBor"></th>
                                            <th class="tableBor">管理者帳號</th>
                                            <th class="tableBor">老師帳號</th>
                                            <th class="tableBor">學生帳號</th>
                                        </tr>
                                        <tr class="tableBor">
                                            <th class="tableBor" style="color: grey;">評分系統</th>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: rgb(247, 230, 4);"></i></td>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: rgb(0, 179, 0);"></i></td>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: rgb(247, 230, 4);"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <style>
                                    .tableBor {
                                        border: 1px solid rgb(197, 197, 197);
                                        padding: 5px;
                                    }
                                </style>
                                <br>
                                確認無誤後，請進行登入驗證以進入系統。
                            </div>
                            <center>
                                <div style="color: red;">
                                    &nbsp;<i class="fas fa-exclamation-triangle"></i>&nbsp;請注意，系統將會儲存此登入帳號之評分紀錄！
                                </div>
                                <br>
                            </center>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">認證</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: red;">
                                    <div class="spinner-grow text-danger" role="status">
                                        <span class="visually-hidden"></span>
                                    </div>
                                    &nbsp;<b>權限及身分認證</b>
                                </h5>
                            </div>
                            <div class="modal-body" style="margin-left: 75px;">
                                您即將進入帳號管理系統，權限準則如下：<br>
                                <table class="tableBor" style="margin-top: 10px;">
                                    <tbody>
                                        <tr class="tableBor">
                                            <th class="tableBor"></th>
                                            <th class="tableBor">管理者帳號</th>
                                            <th class="tableBor">老師帳號</th>
                                            <th class="tableBor">學生帳號</th>
                                        </tr>
                                        <tr class="tableBor">
                                            <th class="tableBor" style="color: grey;">查看帳號</th>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: rgb(0, 179, 0);"></i></td>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: orange;"></i></td>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: rgb(247, 230, 4);"></i></td>
                                        </tr>
                                        <tr class="tableBor">
                                            <th class="tableBor" style="color: grey;">帳號新增</th>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: rgb(0, 179, 0);"></i></td>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: orange;"></i></td>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: rgb(247, 230, 4);"></i></td>
                                        </tr>
                                        <tr class="tableBor">
                                            <th class="tableBor" style="color: grey;">帳號刪除</th>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: rgb(0, 179, 0);"></i></td>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: orange;"></i></td>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: rgb(247, 230, 4);"></i></td>
                                        </tr>
                                        <tr class="tableBor">
                                            <th class="tableBor" style="color: grey;">帳號修改</th>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: rgb(0, 179, 0);"></i></td>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: orange;"></i></td>
                                            <td class="tableBor" style="text-align: center;"><i class="fas fa-check-circle" style="color: rgb(247, 230, 4);"></i></td>
                                        </tr>
                                        <tr class="tableBor">
                                            <td colspan="4">
                                                <i class="fas fa-check-circle" style="color: rgb(0, 179, 0);"></i>：所有&nbsp;&nbsp;
                                                <i class="fas fa-check-circle" style="color: orange;"></i>：僅老師與學生&nbsp;&nbsp;
                                                <i class="fas fa-check-circle" style="color: rgb(247, 230, 4);"></i>：僅學生&nbsp;
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <style>
                                    .tableBor {
                                        border: 1px solid rgb(197, 197, 197);
                                        padding: 5px;
                                    }
                                </style>
                                <br>
                                確認無誤後，請進行登入驗證以進入系統。
                            </div>
                            <center>
                                <div style="color: red;">
                                    &nbsp;<i class="fas fa-exclamation-triangle"></i>&nbsp;請注意，系統將會儲存此登入帳號之活動紀錄！
                                </div>
                                <br>
                            </center>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">認證</button>
                            </div>
                        </div>
                    </div>
                </div>

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

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <script src="js/sb-admin-2.min.js"></script>

        <script src="vendor/chart.js/Chart.min.js"></script>

        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

    </form>
</body>


</html>