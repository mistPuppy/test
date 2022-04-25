<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="../Fu_Jen_Catholic_University_Seal.jpg">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>


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

    <div>

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-address-book"></i>
                    <span><b>專題分組</b></span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="新增專題成員.php" style="color: white;"><b>新增專題成員</b></a>
                        <a class="collapse-item" href="修改專題成員.php" style="color: white;"><b>修改與刪除專題成員</b></a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span><b>專題文件管理</b></span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="文件總覽.php" style="color: white;"><b>文件總覽</b></a>
                        <hr class="sidebar-divider">
                        <a class="collapse-item" href="資料上傳.php" style="color: white;"><b>資料上傳</b></a>
                    </div>
                </div>
            </li>
            

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-sort-numeric-up-alt"></i>
                    <span><b>專題評分</b></span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="評分系統.php" style="color: white;"><b>評分系統</b></a>
                        <hr class="sidebar-divider">
                        <a class="collapse-item" href="評分紀錄.php" style="color: white;"><b>評分紀錄</b></a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="帳號管理.php">
                    <i class="fas fa-users"></i>
                    <span><b>帳號管理</b></span></a>
            </li>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
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

                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span id="dropDown" class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 1rem;
                            font-weight: 800;
                            text-align: center;
                            text-transform: uppercase;
                            display: block;
                            letter-spacing: 0.05rem;">專題總覽
                                    <i class="fas fa-chevron-circle-down" style="color: white;"></i>
                            </a>
                            <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="userDropdown" style="width: 165px">
                                <a class="dropdown-item" href="專題資訊.php" style="font-size: 0.9rem;
                            font-weight: 800;
                            text-transform: uppercase;
                            display: block;
                            letter-spacing: 0.05rem;
                            color: grey;">
                                    專題資訊&nbsp;|&nbsp;建立專題
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span id="dropDown" class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 1rem;
                            font-weight: 800;
                            text-align: center;
                            text-transform: uppercase;
                            display: block;
                            letter-spacing: 0.05rem;">專題分組
                                    <i class="fas fa-chevron-circle-down" style="color: white;"></i>
                            </a>
                            <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="userDropdown" style="width: 222px">
                                <a class="dropdown-item" href="2.0專題成員總覽.php" style="font-size: 0.9rem;
                            font-weight: 800;
                            text-transform: uppercase;
                            display: block;
                            letter-spacing: 0.05rem;
                            color: grey;">
                                    專題成員總覽&nbsp;|&nbsp;新增專題成員
                                </a>
                            </div>
                        </li>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span id="dropDown" class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 1rem;
                            font-weight: 800;
                            text-align: center;
                            text-transform: uppercase;
                            display: block;
                            letter-spacing: 0.05rem;">專題文件管理
                                    <i class="fas fa-chevron-circle-down" style="color: white;"></i>

                            </a>
                            <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="2.0文件總覽.php" style="font-size: 0.9rem;
                            font-weight: 800;
                            text-transform: uppercase;
                            display: block;
                            letter-spacing: 0.05rem;
                            margin-left: 0px;
                            color: grey;">
                                    文件總覽
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="資料上傳.php" style="font-size: 0.9rem;
                            font-weight: 800;
                            text-transform: uppercase;
                            display: block;
                            letter-spacing: 0.05rem;
                            color: grey;">
                                    資料上傳
                                </a>
                            </div>
                        </li>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span id="dropDown" class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 1rem;
                            font-weight: 800;
                            text-align: center;
                            text-transform: uppercase;
                            display: block;
                            letter-spacing: 0.05rem;">專題評分
                                    <i class="fas fa-chevron-circle-down" style="color: white;"></i>
                            </a>
                            <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="userDropdown">
                                <?php
                                if ($_SESSION['level'] == "teacher") {
                                ?>
                                    <a class="dropdown-item" href="評分系統.php" style="font-size: 0.9rem;
                            font-weight: 800;
                            text-transform: uppercase;
                            display: block;
                            letter-spacing: 0.05rem;
                            margin-left: 0px;
                            color: grey;">
                                        評分系統
                                    </a>
                                    <div class="dropdown-divider"></div>
                                <?php
                                } ?>
                                <a class="dropdown-item" href="2.0評分紀錄.php" style="font-size: 0.9rem;
                            font-weight: 800;
                            text-transform: uppercase;
                            display: block;
                            letter-spacing: 0.05rem;
                            color: grey;">
                                    評分紀錄
                                </a>
                            </div>
                        </li>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span id="dropDown" class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 1rem;
                            font-weight: 800;
                            text-align: center;
                            text-transform: uppercase;
                            display: block;
                            letter-spacing: 0.05rem;">帳號管理
                                    <i class="fas fa-chevron-circle-down" style="color: white;"></i>

                            </a>
                            <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="帳號管理.php" style="font-size: 0.9rem;
                            font-weight: 800;
                            text-transform: uppercase;
                            display: block;
                            letter-spacing: 0.05rem;
                            margin-left: 0px;
                            color: grey;">
                                    帳號總覽
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="新增帳號管理.php" style="font-size: 0.9rem;
                            font-weight: 800;
                            text-transform: uppercase;
                            display: block;
                            letter-spacing: 0.05rem;
                            color: grey;">
                                    新增帳號
                                </a>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>



                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <i class="fas fa-user-cog" style="font-size: 20px;"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" style="width: 180px;">
                                <?php
                                if ($_SESSION['level'] == "admin") {
                                ?>
                                    <center>
                                        <h6 style="padding: 8px; font-size: 1.1rem; font-weight: 800; color: gray">&nbsp;<?php echo $_SESSION['user']; ?>&nbsp;，您好！</h6>
                                    </center>
                                <?php
                                } else if ($_SESSION['level'] == "teacher") {
                                ?>
                                    <center>
                                        <h6 style="padding: 8px; font-size: 1.1rem; font-weight: 800; color: gray">&nbsp;<?php echo $_SESSION['user']; ?>&nbsp;老師，您好！</h6>
                                    </center>
                                <?php
                                } else if ($_SESSION['level'] == "student") {
                                ?>
                                    <center>
                                        <h6 style="padding: 8px; font-size: 1.1rem; font-weight: 800; color: gray">&nbsp;<?php echo $_SESSION['user']; ?>&nbsp;同學，您好！</h6>
                                    </center>
                                <?php
                                }
                                ?>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="登出.php" style="font-size: 0.9rem;
                            font-weight: 800;
                            text-transform: uppercase;
                            display: block;
                            letter-spacing: 0.05rem;
                            color: grey;">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    登出
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

            </div>
        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">確定要登出嗎?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">請確認您正在執行的活動都已儲存！</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">關閉</button>
                    <a class="btn btn-primary" href="登出.php">登出</a>
                </div>
            </div>
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