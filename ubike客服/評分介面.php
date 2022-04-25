<?php
if(isset($_SESSION['level'])){
?>
<?php
$title_num = $_GET['title_num'];
$title_name = $_GET['title_name'];

$method3 = "insert42";
$titlecontent_num = $title_name;
$titlecontent_name = $title_num;
$titlecontent_grade = "";
$titlecontent_level = "";
$titlecontent_content = "";
$titlecontent_teacher = "";
$titlecontent_date = "";
$titlecontent_note = "";

$link = mysqli_connect("localhost", "root", "12345678", "finalwork");
//文件一覽
if (empty($searchtxt)) {
    $sql = "select * from finalworkallfile where allfile_專題編號 = '$title_name'";
} else {
    $sql = "select * from finalworkteam where team_id like '%$searchtxt%' or team_id like '%$searchtxt%'";
}
$rs = mysqli_query($link, $sql);
//專題資訊
$sql2 = "select * from finalworkteam where team_專題編號 = '$title_name'";
$rs2 = mysqli_query($link, $sql2);


mysqli_close($link);
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
    <center>
        <div style="width: 95%;">
            <div style="display: flex; flex-direction: column;">
                <div class="card shadow mb-4" style="border-right: 0.25rem solid #007BFF;
    margin-left: 10px; margin-right: 10px; width: 100%;">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold" style="display: flex; flex-direction: row; color: #007BFF;">專題資訊</h6>
                    </div>
                    <div class="card-body">
                        <table style="text-align: center; color: #808080;" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>學號</th>
                                    <th>姓名</th>
                                    <th>學院學系</th>
                                    <th>班級</th>
                                    <th>指導老師</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                echo "<p style='text-align: left; padding-left: 5px; padding-bottom: 5px;'><b>專題編號：<span style='color: #212529d5'>", $title_name, "</span></p><p style='text-align: left; padding-left: 5px; padding-bottom: 5px'>專題名稱：&nbsp;<span style='color: #212529d5'>", $title_num, "</span></b></p>";
                                while ($record = mysqli_fetch_row($rs2)) {
                                    echo "<tr>
                                    <td>$record[3]</td>
                                    <td>$record[4]</td>
                                    <td>$record[5]</td>
                                    <td>$record[6]</td>
                                    <td>$record[7]</td>
                                    </tr>
                                   ";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card shadow mb-4" style="border-right: 0.25rem solid #007BFF;
    margin-left: 10px; width: 100%;">
                    <div class="card-header py-3" style="text-align: left;">
                        <h6 class="m-0 font-weight-bold" style="color: #007BFF;">文件一覽</h6>
                    </div>
                    <div class="card-body">
                        <table style="text-align: center; color: #808080;" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>專題編號</th>
                                    <th>專題名稱</th>
                                    <th>檔案</th>
                                    <th>備註</th>
                                    <th>下載</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($record = mysqli_fetch_row($rs)) {
                                    echo "<tr>
                                    <td>$record[1]</td>
                                    <td>$record[2]</td>
                                    <td>$record[3]</td>
                                    <td>$record[5]</td>
                                    <td style='text-decoration: underline'>$record[6]</td>
                                    </tr>
                                   ";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div>
                <div class="card shadow mb-4" style="border-right: 0.25rem solid #007BFF;
    margin-left: 10px; width: 100%;">
                    <div class="card-header py-3" style="text-align: left;">
                        <h6 class="m-0 font-weight-bold" style="color: #007BFF;">線上評分</h6>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" style=" background-color:white;
                            width: 100%;
                            padding-left:25px;
                            padding-right:25px;
                            margin: auto;
                            margin-top: 17px;
                            margin-bottom: 18px;
                            box-shadow: 10px 10px 25px #9D9D9D;" action="dblink4.php" method="post">
                            <input type="hidden" name="method3" value="<?php echo $method3 ?>">
                            <input type="hidden" name="titlecontent_num" value="<?php echo $titlecontent_num ?>">
                            <input type="hidden" name="titlecontent_name" value="<?php echo $titlecontent_name ?>">
                            <div class="pre" style="color: grey;">
                                <br>
                                <table>
                                    <tr>
                                        <td style="width: 100px;">給予評分：</td>
                                        <td><input name="titlecontent_grade" value="<?php echo $titlecontent_grade ?>" class="form-control" class="input" type="text" style="color: grey; text-transform: uppercase; width: 250px; height: 30px;" placeholder=""></td>
                                        <td>評等：</td>
                                        <td><input name="titlecontent_level" value="<?php echo $titlecontent_level ?>" class="form-control" class="input" type="text" style="color: grey; text-transform: uppercase; width: 250px; height: 30px;" placeholder=""></td>

                                    </tr>
                                    <tr style="color: white;">
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:text-top;">給予建議：</td>
                                        <td colspan="3"><textarea class="form-control" name="titlecontent_content" value="<?php echo $titlecontent_content ?>" id="" cols="100" rows="9"></textarea>
                                        </td>
                                    </tr>
                                    <tr style="color: white;">
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px;">評分進度：</td>
                                        <td>
                                            <select name="titlecontent_note" class="form-control" style="width: 280px;">
                                                <option selected value="已完成">已完成</option>
                                                <option value="75%完成">75%完成</option>
                                                <option value="50%完成">50%完成</option>
                                                <option value="25%完成">25%完成</option>
                                                <option value="未完成">未完成</option>
                                            </select>
                                        </td>
                                        <td>評分時間：</td>
                                        <td><input name="titlecontent_date" value="<?php echo $titlecontent_date ?>" class="form-control" class="input" type="datetime-local" style="color: grey; text-transform: uppercase; width: 250px; height: 30px;" placeholder=""></td>
                                    </tr>
                                    <tr style="color: white;">
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:text-top;">評分教師：</td>
                                        <td>
                                            <div class="input-group mb-3" style="width: 250px;">
                                                <input name="titlecontent_teacher" value="<?php echo $titlecontent_teacher ?>" type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" style="height: 30px;">
                                                <span class="input-group-text" id="basic-addon2" style="height: 30px;">老師</span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                                <div style="display: flex; flex-direction: row-reverse;">
                                    <center>
                                        <table>
                                            <tr>
                                                <td style="width: 158px;"><a href="評分介面.php"><input class="form-control" type="reset" value="重新輸入" style="color: white; text-transform: uppercase; width: 150px; background-color: #858796"></a></td>
                                                <td>
                                                    <input class="form-control" onclick="myFunction()" class="submit" type="submit" value="上傳" style="color: white; text-transform: uppercase; width: 150px; background-color:#4e73df">
                                                </td>
                                            </tr>
                                        </table>
                                    </center>
                                    </div>

                                </div>

                                <br />
                                <script>
                                    function myFunction() {
                                        alert("評分送出成功，可至評分紀錄查看。");
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
    </center>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>

    <script src="vendor/chart.js/Chart.min.js"></script>

    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>
<?php
}
else{
    header('location:防駭登入.php');
}
?>