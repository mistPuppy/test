<?php
if(isset($_SESSION['level'])){
?>
<?php
$method = "insert2";
$acc_單位 = "";
$name = "";
$acc_編號 = "";
$id = "";
$password = "";
$level = "";
$acc_備註 = "";
$insertError = $_GET['insertError'];
?>
<!DOCTYPE html>
<html>

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
    <?php include "navigation.php"; ?>
    <div style="margin-left: 23px; margin-top: 10px; margin-bottom: 10px; color: #858796;">
        <b>帳號管理&nbsp;/&nbsp;新增</b> <br>
    </div>
    <form action="dblink2.php" method="post" class="form-horizontal" style=" background-color:white;
                            width: 985px;
                            padding-left:25px;
                            padding-right:25px;
                            margin: auto;
                            margin-top: 25px;
                            margin-bottom: 30px;
                            box-shadow: 10px 10px 25px #9D9D9D;">
        <input type="hidden" name="method" value="<?php echo $method ?>">
        <div class="pre" style="font-weight: bold;">

            <br>
            <table>
                <tbody>
                    <tr>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="acc_單位" value="<?php echo $acc_單位 ?>" placeholder="單位（學院學系）："></td>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="name" value="<?php echo $name ?>" placeholder="姓名："></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="acc_編號" value="<?php echo $acc_編號 ?>" placeholder="學（編）號："></td>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="id" value="<?php echo $id ?>" placeholder="帳號："></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="password" value="<?php echo $password ?>" placeholder="密碼："></td>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="level" value="<?php echo $level ?>" placeholder="職稱："></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;" s><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="acc_備註" value="<?php echo $acc_備註 ?>" placeholder="備註："></td>
                    </tr>

                    <!-- <tr>
                        <td colspan="2" style="color: white;">12</td>
                    </tr> -->

                </tbody>
            </table>
            <br><br>
            <center>
                <table>
                    <tr>
                        <td style="width: 158px;"><a href="新增帳號管理.php"><input class="form-control" type="reset" value="重新輸入" style="color: white; text-transform: uppercase; width: 150px; background-color: #858796"></a></td>
                        <td>
                            <input class="form-control" onclick="myFunction()" class="submit" type="submit" value="新增" style="color: white; text-transform: uppercase; width: 150px; background-color:#4e73df">
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; padding: 15px;" colspan="2"><?php echo $insertError ?></td>
                    </tr>
                </table>
            </center>
            

            <script>
                function myFunction() {
                    alert("資料新增成功。");
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
<footer style="margin-top: 160px;">
    <?php include "footer.php" ?>
</footer>

</html>
<?php
}
else{
    header('location:防駭登入.php');
}
?>