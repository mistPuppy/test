<?php
if(isset($_SESSION['level'])){
?>
<?php
$method = "update";
$team_id = $_GET['team_id'];
$link = mysqli_connect("localhost", "root", "12345678", "finalwork");
$sql = "select * from finalworkteam where team_id = '" . $team_id . "'";
if (!$link) {
    echo "連接失敗" . mysqli_connect_error();
}
$rs = mysqli_query($link, $sql);
if ($record = mysqli_fetch_assoc($rs)) {
    $team_專題編號 = $record['team_專題編號'];
    $team_專題名稱 = $record['team_專題名稱'];
    $team_組員學號 = $record['team_組員學號'];
    $team_組員姓名 = $record['team_組員姓名'];
    $team_組員學院學系 = $record['team_組員學院學系'];
    $team_組員班級 = $record['team_組員班級'];
    $team_指導老師 = $record['team_指導老師'];
    $team_備註 = $record['team_備註'];
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


</head>

<body>
    <div style="margin-left: 23px; margin-top: 10px; margin-bottom: 10px;">
        <b>修改專題成員</b> <br>
    </div>
    <form action="dblink.php" method="post" class="form-horizontal" style=" background-color:white;
                            width: 985px;
                            padding-left:25px;
                            padding-right:25px;
                            margin: auto;
                            margin-top: 25px;
                            margin-bottom: 30px;
                            box-shadow: 10px 10px 25px #9D9D9D;">
        <input type="hidden" name="method" value="<?php echo $method ?>">
        <div class="pre" style="font-weight: bold;">
            <input type="hidden" name="team_id" value="<?php echo $team_id ?>">
            <br>
            <table>
                <tbody>
                    <tr>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="team_專題編號" value="<?php echo $team_專題編號 ?>" placeholder="專題編號：" readonly></td>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="team_專題名稱" value="<?php echo $team_專題名稱 ?>" placeholder="專題名稱：" readonly></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="team_組員學號" value="<?php echo $team_組員學號 ?>" placeholder="學號："></td>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="team_組員姓名" value="<?php echo $team_組員姓名 ?>" placeholder="姓名："></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="team_組員學院學系" value="<?php echo $team_組員學院學系 ?>" placeholder="學院學系："></td>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="team_組員班級" value="<?php echo $team_組員班級 ?>" placeholder="班級："></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="team_指導老師" value="<?php echo $team_指導老師 ?>" placeholder="指導老師："></td>
                        <td style="padding: 5px;" s><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="team_備註" value="<?php echo $team_備註 ?>" placeholder="備註："></td>
                    </tr>

                </tbody>
            </table>
            <br><br>
            <table>
                <tr>
                    <td style="width: 158px;"><a href="修改專題成員.php"><input class="form-control" type="reset" value="重新輸入" style="color: white; text-transform: uppercase; width: 150px; background-color: #858796"></a></td>
                    <td>
                        <input class="form-control" onclick="myFunction()" class="submit" type="submit" value="儲存" style="color: white; text-transform: uppercase; width: 150px; background-color:#4e73df">
                    </td>
                </tr>
            </table>
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