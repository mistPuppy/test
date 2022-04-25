<?php
if(isset($_SESSION['level'])){
?>
<?php
$method = "insert6";
$news_content = "";
$news_person = "";
$news_date = "";
$method_2 = "insert4";
$method_dou = "insert";
$title_num = "";
$title_name = "";
?>
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


<body>
    <?php include "navigation.php";
    ?>

    <div style="margin-left: 23px; margin-top: 10px; margin-bottom: 10px;">
        <b>首頁</b> <br>
    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-7 mb-4">
                <div class="card shadow mb-4" style="border-left: 0.25rem solid rgb(160, 160, 160) !important;">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">公告區&nbsp;<i class="fas fa-bullhorn"></i></h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped">
                            <tbody>
                                <?php
                                $link = mysqli_connect("localhost", "root", "12345678", "finalwork");
                                $sql = "select * from finalworknews order by news_date desc";
                                if (!$link) {
                                    echo "連接失敗" . mysqli_connect_error();
                                }
                                $rs = mysqli_query($link, $sql);
                                while ($record = mysqli_fetch_row($rs)) {
                                    if ($record[2] == "管理者") {
                                        if ($record[2] == $_SESSION['user']) {
                                            echo "<tr><td style='color: red;'>$record[1]</td>
                                        <td>$record[2]</td>
                                        <td style='font-size: 14px'>$record[3]</td>
                                        <td><a href='修改公告.php?news_id=$record[0]'>
                                        <button id='but_css2'>
                                            <i style='color: #808080;' class='fas fa-edit'></i>
                                        </button>
                                    </a><a href='delete6.php?news_id=$record[0]'>
                                    <button onclick='myFunction2()' id='but_css2'>
                                        <i style='color: #808080;' class='fas fa-trash'></i>
                                    </button>
                                </a></td><tr>";
                                        } else {
                                            echo "<tr><td style='color:red;'>$record[1]</td>
                                        <td>$record[2]</td>
                                        <td style='font-size: 14px'>$record[3]</td><td></td><tr>";
                                        }
                                    } else {
                                        if ($record[2] == $_SESSION['user']) {
                                            echo "<tr><td style='color:#212529d0;'>$record[1]</td>
                                        <td>$record[2]</td>
                                        <td style='font-size: 14px'>$record[3]</td>
                                        <td><a href='修改公告.php?news_id=$record[0]'>
                                        <button id='but_css2'>
                                            <i style='color: #808080;' class='fas fa-edit'></i>
                                        </button>
                                    </a><a href='delete6.php?news_id=$record[0]'>
                                    <button onclick='myFunction2()' id='but_css2'>
                                        <i style='color: #808080;' class='fas fa-trash'></i>
                                    </button>
                                </a></td><tr>";
                                        } else {
                                            echo "<tr><td style='color:#212529d0;'>$record[1]</td>
                                        <td>$record[2]</td>
                                        <td style='font-size: 14px'>$record[3]</td><td></td><tr>";
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <?php
                    if ($_SESSION['level'] <> "student") {
                        echo "<div class='card-footer' style='text-align: right; font-size: 16px'>
                        <button data-bs-toggle='modal' data-bs-target='#exampleModal' id='but_css'>
                            <i style='color: #808080;' class='fas fa-plus'>&nbsp;&nbsp;新增公告</i>
                        </button>
                    </div>";
                    }
                    ?>
                    <style>
                        #but_css {
                            width: 100px;
                            height: 10%;
                            border-radius: 10px;
                            background-color: #f8f9fc;
                            transition: all .4s linear;
                            border: none;
                        }

                        #but_css:hover {
                            background-color: lightgray;
                            transition: color 0.15s ease-in-out, background-color 0.3s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

                        }

                        #but_css2 {
                            width: 28px;
                            height: 10%;
                            border-radius: 10px;
                            background-color: none;
                            transition: all .4s linear;
                            border: none;
                        }

                        #but_css2:hover {
                            background-color: lightgray;
                            transition: color 0.15s ease-in-out, background-color 0.3s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

                        }
                    </style>
                </div>

                <form action="dblink6.php" method="post">
                    <input type="hidden" name="method" value="<?php echo $method ?>">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <div class="spinner-grow text-success" role="status">
                                            <span class="visually-hidden"></span>
                                        </div>&nbsp;&nbsp;<b>新增公告</b>
                                    </h5>
                                </div>
                                <div class="modal-body">
                                    <br><input class="form-control" type="text" name="news_content" value="<?php echo $news_content ?>" placeholder="公告內容：（輸入格式：【公告類型】公告內容）"><br>
                                    <input class="form-control" type="text" name="news_person" value="<?php echo $news_person ?>" placeholder="公告者身份："><br>
                                    <input class="form-control" type="datetime-local" name="news_date" value="<?php echo $news_date ?>" placeholder="公告時間："><br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                                    <button onclick='myFunction()' type="submit" class="btn btn-primary">送出</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <script>
                    function myFunction() {
                        alert("公告新增成功。");
                    }
                </script>
                <script>
                    function myFunction2() {
                        alert("公告刪除成功。");
                    }
                </script>

                <div class="card shadow mb-4" style="border-left: 0.25rem solid rgb(160, 160, 160) !important;">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">文件一覽&nbsp;<i class="fas fa-file-pdf"></i></h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped" style="text-align: center;">
                            <thead>
                                <tr style="text-align: center;">
                                    <th>
                                        專題編號
                                    </th>
                                    <th>
                                        專題名稱
                                    </th>
                                    <th>
                                        檔案名稱
                                    </th>
                                    <th>
                                        下載
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $uploadname = $_GET['uploadname'];
                                $link2 = mysqli_connect("localhost", "root", "12345678", "finalwork");
                                if (empty($searchtxt)) {
                                    $sql2 = "select * from finalworkallfile";
                                } else {
                                    $sql2 = "select * from finalworkteam where id like '%$searchtxt%' or id like '%$searchtxt%'";
                                }

                                $rs2 = mysqli_query($link2, $sql2);
                                while ($record = mysqli_fetch_row($rs2)) {
                                    echo "<tr>
                            <td>$record[1]</td>
                            <td>$record[2]</td>
                            <td>$record[3]</td>
                            <td style='text-decoration: underline' >$record[6]</td>
                            </tr>
                            ";
                                }

                                mysqli_close($link);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mb-4">
                <?php
                $link = mysqli_connect("localhost", "root", "12345678", "finalwork");
                if (empty($searchtxt)) {
                    $sql = "select * from finalworktitlecontent";
                } else {
                    $sql = "select * from finalworkteam where team_id like '%$searchtxt%' or team_id like '%$searchtxt%'";
                }

                $rs = mysqli_query($link, $sql);


                ?>

                <div class="card shadow mb-4" style="border-left: 0.25rem solid rgb(160, 160, 160) !important;">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">各組專題批改進度&nbsp;<i class="fas fa-check-double"></i></h6>
                    </div>
                    <div class="card-body">
                        <?php
                        while ($record = mysqli_fetch_row($rs)) {
                            if ($record[6] == $_SESSION['user'] && $_SESSION['level'] == "teacher") {
                                echo "<h4 class='small font-weight-bold'> $record[1]$record[2] <span class='float-right'>$record[8]</span></h4>";
                                if ($record[8] == "未完成") {
                                    echo "<div class='progress mb-4'>
                                <div class='progress-bar bg-danger' role='progressbar' style='width:5%; opacity: 0.65;' aria-valuenow='5' aria-valuemin='0' aria-valuemax='100'></div>
                            </div>";
                                } else if ($record[8] == "25%完成") {
                                    echo "<div class='progress mb-4'>
                                <div class='progress-bar bg-warning' role='progressbar' style='width:25%; opacity: 0.65;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>
                            </div>";
                                } else if ($record[8] == "50%完成") {
                                    echo "<div class='progress mb-4'>
                                <div class='progress-bar' role='progressbar' style='width:50%; opacity: 0.65;' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
                            </div>";
                                } else if ($record[8] == "75%完成") {
                                    echo "<div class='progress mb-4'>
                                <div class='progress-bar bg-info' role='progressbar' style='width:75%; opacity: 0.65;' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100'></div>
                            </div>";
                                } else if ($record[8] == "已完成") {
                                    echo "<div class='progress mb-4'>
                                <div class='progress-bar bg-success' role='progressbar' style='width:100%; opacity: 0.65; aria-valuenow='100' aria-valuemin='0' aria-valuemax='100'></div>
                            </div>";
                                }
                            }
                        }
                        if ($_SESSION['level'] != "teacher") {
                            echo "<span style='color:red'><b>您無此權限。</b></span>";
                        }
                        ?>
                    </div>
                </div>


                <div class="card shadow mb-4" style="border-left: 0.25rem solid rgb(160, 160, 160) !important;">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">快速新增&nbsp;<i class="fas fa-tasks"></i></h6>
                    </div>
                    <div class="card-body">
                        <div style="display: flex; flex-direction: row-reverse;">
                            <div class="col-lg-12 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        <div style="display: flex;">
                                            <div style="display: block; margin-right: 10px">
                                                <i class="fas fa-address-book" style="font-size: 20px;"></i>
                                            </div>
                                            <b>建立專題組別</b>
                                        </div>
                                        <form action="dblink4.php" method="post" style="width: 100%;">
                                            <input type="hidden" name="method_2" value="<?php echo $method_2 ?>"><br>
                                            <input class="form-control" type="text" name="title_num" value="<?php echo $title_num ?>" placeholder="專題編號：（輸入格式：【專題編號】）"><br>
                                            <div style="display: flex;">
                                                <div style="display: block; width: 85%; margin-right: 8px">
                                                    <input class="form-control" type="text" name="title_name" value="<?php echo $title_name ?>" placeholder="專題名稱："><br>

                                                </div>
                                                <button style="height: 38px;" onclick='myFunction()' type="submit" class="btn btn-primary">送出</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; flex-direction: row-reverse;">
                            <div class="col-lg-12 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        <div style="display: flex;">
                                            <div style="display: block; margin-right: 8px">
                                                <i class="fas fa-user-plus" style="font-size: 19px;"></i>
                                            </div>
                                            <b>新增專題成員</b>
                                        </div>
                                        <form action="dblink.php" method="post" style="width: 100%;">
                                            <input type="hidden" name="method_dou" value="<?php echo $method_dou ?>"><br>

                                            <table>
                                                <tr>
                                                    <td colspan="2" style="padding: 5px;"><input class="form-control" style="width: 100%; color: grey; text-transform: uppercase;" type="text" name="team_專題編號" value="<?php echo $team_專題編號 ?>" placeholder="專題編號：（輸入格式：【專題編號】）"></td>

                                                </tr>
                                                <tr>
                                                    <td style="padding: 5px;"><input class="form-control" style="width: 100%; color: grey; text-transform: uppercase;" type="text" name="team_專題名稱" value="<?php echo $team_專題名稱 ?>" placeholder="專題名稱："></td>
                                                    <td style="padding: 5px;"><input class="form-control" style="width: 100%; color: grey; text-transform: uppercase;" type="text" name="team_組員學號" value="<?php echo $team_組員學號 ?>" placeholder="學號："></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 5px;"><input class="form-control" style="width: 100%; color: grey; text-transform: uppercase;" type="text" name="team_組員姓名" value="<?php echo $team_組員姓名 ?>" placeholder="姓名："></td>
                                                    <td style="padding: 5px;"><input class="form-control" style="width: 100%; color: grey; text-transform: uppercase;" type="text" name="team_組員學院學系" value="<?php echo $team_組員學院學系 ?>" placeholder="學院學系："></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 5px;"><input class="form-control" style="width: 100%; color: grey; text-transform: uppercase;" type="text" name="team_組員班級" value="<?php echo $team_組員班級 ?>" placeholder="班級："></td>
                                                    <td style="padding: 5px;"><input class="form-control" style="width: 100%; color: grey; text-transform: uppercase;" type="text" name="team_指導老師" value="<?php echo $team_指導老師 ?>" placeholder="指導老師："></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="padding: 5px;">
                                                        <div style="display: flex;">
                                                            <div style="display: block; width: 100%; margin-right: 8px">
                                                                <input class="form-control" style="width: 100%; color: grey; text-transform: uppercase;" type="text" name="team_備註" value="<?php echo $team_備註 ?>" placeholder="備註：">
                                                            </div>
                                                            <input class="form-control" onclick="myFunction()" class="submit" type="submit" value="新增" style="color: white; text-transform: uppercase; width: 70px; background-color:#4e73df;">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<footer style="margin-top: 100px;">
    <?php include "footer.php" ?>
</footer>

</html>
<?php
}
else{
    header('location:防駭登入.php');
}
?>