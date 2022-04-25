<?php
if(isset($_SESSION['level'])){
?>
<?php
$method = "update6";
$news_id = $_GET['news_id'];
$link = mysqli_connect("localhost", "root", "12345678", "finalwork");
$sql = "select * from finalworknews where news_id = '" . $news_id . "'";
if (!$link) {
    echo "連接失敗" . mysqli_connect_error();
}
$rs = mysqli_query($link, $sql);
if ($record = mysqli_fetch_assoc($rs)) {
    $news_content2 = $record['news_content'];
    $news_person2 = $record['news_person'];
    $news_date2 = $record['news_date'];
}
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
        <b>首頁&nbsp;&nbsp;/&nbsp;&nbsp;修改公告</b> <br>
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
                                        echo "<tr><td style='color:#e74a3b; font-weight: bold'>$record[1]</td>
                                            <td>$record[2]</td>
                                            <td>$record[3]</td><tr>";
                                    } else {
                                        echo "<tr><td style='color:#212529d5; font-weight: bold'>$record[1]</td>
                                        <td>$record[2]</td>
                                        <td>$record[3]</td><tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer" style="text-align: right; font-size: 20px">
                        <a href="index.php">
                            <button id="but_css">
                                <i style="color: #808080;" class="fas fa-home"></i>
                            </button>
                        </a>
                    </div>
                    <style>
                        #but_css {
                            width: 5%;
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
                    </style>
                </div>
                <script>
                    function myFunction() {
                        alert("資料新增成功。");
                    }
                </script>


            </div>

            <div class="col-lg-5 mb-4">

                <div class="card shadow mb-4" style="border-left: 0.25rem solid #6F00D2 !important;">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><span style="color: #6F00D2;">修改公告&nbsp;<i class="fas fa-edit"></i></span></h6>
                    </div>
                    <div class="card-body">
                        <form action="dblink6.php" method="post" class="form-horizontal">
                            <input type="hidden" name="method" value="<?php echo $method ?>">
                            <div class="pre" style="font-weight: bold;">
                                <input type="hidden" name="news_id" value="<?php echo $news_id ?>">
                                <br>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="news_content2" value="<?php echo $news_content2 ?>" placeholder="公告內容：（輸入格式：【公告類型】公告內容）"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="news_person2" value="<?php echo $news_person2 ?>" placeholder="公告者身份：" readonly></td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="datetime-local" name="news_date2" value="<?php echo $news_date2 ?>" placeholder="公告時間："></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br><br>
                                <table>
                                    <tr>
                                        <td style="width: 158px;"><a href="修改公告.php"><input class="form-control" type="reset" value="重新輸入" style="color: white; text-transform: uppercase; width: 150px; background-color: #858796"></a></td>
                                        <td>
                                            <input class="form-control" onclick="myFunction()" class="submit" type="submit" value="儲存" style="color: white; text-transform: uppercase; width: 150px; background-color:#4e73df">
                                        </td>
                                    </tr>
                                </table>
                                <br><br>
                                <script>
                                    function myFunction() {
                                        alert("公告修改成功。");
                                    }
                                </script>
                                <style>
                                    .submit {
                                        background-color: grey;
                                        border: 0px;
                                        outline: 0;
                                        box-shadow: none;
                                        padding: 3px;
                                        border-radius: 2px;
                                        width: 100px;
                                    }

                                    .submit:hover {
                                        background-color: #bdbdbd;
                                        color: white;
                                    }

                                    .submit:active {
                                        background-color: #212529d2;
                                        color: white;

                                    }
                                </style>
                            </div>
                        </form>
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