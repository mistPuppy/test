<?php
if(isset($_SESSION['level'])){
?>
<?php
$method2 = "update4";
$title_id = $_GET["title_id"];
$link = mysqli_connect("localhost", "root", "12345678", "finalwork");
$sql2 = "select * from finalworktitle where title_id = '$title_id'";
if (!$link) {
    echo "連接失敗" . mysqli_connect_error();
}
$rs2 = mysqli_query($link, $sql2);

// echo $tit_id;
if ($record = mysqli_fetch_assoc($rs2)) {
    // echo 1;
    $title_num2 = $record['title_num'];
    $title_name2 = $record['title_name'];
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
    <center>
    <form action="dblink4.php" method="post" class="form-horizontal" style=" background-color:white;
                            width: 985px;
                            padding-left:25px;
                            padding-right:25px;
                            margin: auto;
                            margin-top: 25px;
                            margin-bottom: 30px;
                            box-shadow: 10px 10px 25px #9D9D9D;">
        <input type="hidden" name="method2" value="<?php echo $method2 ?>">
        <div class="pre" style="font-weight: bold;">
            <input type="hidden" name="title_id" value="<?php echo $title_id ?>">
            <br>
            <table>
                <tbody>
                    <tr>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="title_num2" value="<?php echo $title_num2 ?>" placeholder="專題編號："></td>
                        <td style="padding: 5px;"><input class="form-control" style="width: 447px; color: grey; text-transform: uppercase;" type="text" name="title_name2" value="<?php echo $title_name2 ?>" placeholder="專題名稱："></td>
                    </tr>
                </tbody>
            </table>
            <br><br>
            <table>
                <tr>
                    <td>
                        <input class="form-control" onclick="myFunction()" class="submit" type="submit" value="儲存" style="color: white; text-transform: uppercase; width: 150px; background-color:#4e73df">
                    </td>
                </tr>
            </table>
            <br><br>
        </div>
    </form>

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