<?php
if(isset($_SESSION['level'])){
?>
<?php
$method = "update5";
$titlecontent_id = $_GET['titlecontent_id'];
$link = mysqli_connect("localhost", "root", "12345678", "finalwork");
$sql = "select * from finalworktitlecontent where titlecontent_id = '" . $titlecontent_id . "'";
if (!$link) {
    echo "連接失敗" . mysqli_connect_error();
}
$rs = mysqli_query($link, $sql);
if ($record = mysqli_fetch_assoc($rs)) {
    $titlecontent_num = $record['titlecontent_num'];
    $titlecontent_name = $record['titlecontent_name'];
    $titlecontent_grade = $record['titlecontent_grade'];
    $titlecontent_level = $record['titlecontent_level'];
    $titlecontent_content = $record['titlecontent_content'];
    $titlecontent_teacher = $record['titlecontent_teacher'];
    $titlecontent_date = $record['titlecontent_date'];
    $titlecontent_note = $record['titlecontent_note'];
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
    <div style="margin-left: 23px; margin-top: 10px; margin-bottom: 10px; color: #858796;">
        <b>專題評分修改</b> <br>
    </div>
    <form method="post" action="dblink5.php" class="form-horizontal" style=" background-color:white;
                            width: 985px;
                            padding-left:25px;
                            padding-right:25px;
                            margin: auto;
                            margin-top: 25px;
                            margin-bottom: 30px;
                            box-shadow: 10px 10px 25px #9D9D9D;">
        <input type="hidden" name="method" value="<?php echo $method ?>">
        <div class="pre">
            <input type="hidden" name="titlecontent_id" value="<?php echo $titlecontent_id ?>">
            <br><br>
            <table>
                <tr>
                    <td style="width: 100px;">專題編號：</td>
                    <td><input name="titlecontent_num" value="<?php echo $titlecontent_num ?>" class="form-control" class="input" type="text" style="color: grey; text-transform: uppercase; width: 250px; height: 30px;" placeholder="" readonly></td>
                    <td>專題名稱：</td>
                    <td><input name="titlecontent_name" value="<?php echo $titlecontent_name ?>" class="form-control" class="input" type="text" style="color: grey; text-transform: uppercase; width: 250px; height: 30px;" placeholder="" readonly></td>

                </tr>
                <tr><tr style="color: white;">
                    <td>1</td>
                    <td>2</td>
                </tr>
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
                    <td colspan="3"><textarea class="form-control" name="titlecontent_content" value="" id="" cols="100" rows="9"><?php echo $titlecontent_content ?></textarea>
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
                            <option selected value="<?php echo $titlecontent_note ?>"><?php echo $titlecontent_note ?></option>
                            <option value="已完成">已完成</option>
                            <option value="75%完成">75%完成</option>
                            <option value="50%完成">50%完成</option>
                            <option value="25%完成">25%完成</option>
                            <option value="未完成">未完成</option>
                        </select>
                    </td>
                    <td><span style="color: red; font-weight: bold">更新</span>評分時間：</td>
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
            <br><br>
            <center>
                <table>
                    <tr>
                        <td style="width: 158px;"><a href="修改評分紀錄.php"><input class="form-control" type="reset" value="重新輸入" style="color: white; text-transform: uppercase; width: 150px; background-color: #858796"></a></td>
                        <td>
                            <input class="form-control" onclick="myFunction()" class="submit" type="submit" value="儲存" style="color: white; text-transform: uppercase; width: 150px; background-color:#4e73df">
                        </td>
                    </tr>
                </table>
            </center>
            <br><br>
            <script>
                function myFunction() {
                    alert("資料修改成功。");
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

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>

    <script src="vendor/chart.js/Chart.min.js"></script>

    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>
<?php
}
else{
    header('location:防駭登入.php');
}
?>