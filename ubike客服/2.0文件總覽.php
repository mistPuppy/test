<?php
if(isset($_SESSION['level'])){
?>
<?php
$method = "insert4";
$title_num = "";
$title_name = "";

$link = mysqli_connect("localhost", "root", "12345678", "finalwork");
if (empty($searchtxt)) {
    $sql = "select * from finalworktitle";
} else {
    $sql = "select * from finalworkteam where team_id like '%$searchtxt%' or team_id like '%$searchtxt%'";
}
$rs = mysqli_query($link, $sql);

$method2 = "update4";
$sql2 = "select * from finalworktitle where title_id = '$tit_id'"; 
if (!$link) {
    echo "連接失敗" . mysqli_connect_error();
}
$rs2 = mysqli_query($link, $sql2);
echo $tit_id;
if ($record = mysqli_fetch_assoc($rs2)) { 
    echo 1;
    $title_num2 = $record['title_num'];
    $title_name2 = $record['title_name'];
}

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
    <?php include "navigation.php"; ?>
    <div style="margin-left: 23px; margin-top: 10px; margin-bottom: 10px;">
        <b>專題文件管理&nbsp;/&nbsp;文件總覽</b> <br>
    </div>
    <style>
        #secondButton1 {
            border: 0px;
            outline: 0;
            box-shadow: none;
            color: #212529d5;
            transition: all .4s linear;
        }

        #secondButton1:hover {
            color: #ffffff;
            background-color: #75757531;
            transition: color 0.15s ease-in-out, background-color 0.3s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        #secondButton1:active {
            background-color: #212529;
            color: white;
        }
    </style>
    <div style="display: flex; flex-direction: row">
        <div>
            <div style="text-align: center; border-radius: 10px; border-right: 4px solid #00BB00; width:100%; background-color: #dadadab6; height: 100%; margin-left: 20px; margin-right:12px; padding: 12px;"><br>
                <a href="文件總覽.php" id='secondButton1' target="pic" style='margin-right: 8px; font-size: 17px; padding: 5px; border-radius: 3px; text-decoration: none; color: #00BB00'><b><i class="fas fa-folder-open" style="margin-right: 10px;"></i>文件總覽</b></a><br>
                <hr style='margin: 20px'>
                <div style='text-align: center'>
                    <?php
                    while ($record = mysqli_fetch_row($rs)) {
                        echo "<a href='文件總覽2.php?title_num=$record[2]&title_name=$record[1]' id='secondButton1' target='pic' style='font-size: 17px; padding: 5px; border-radius: 3px; text-decoration: none'><b>", $record[1], "<br>", $record[2],
                        "</b></a>
                    <hr style='margin: 20px'>";
                    }
                    ?>
                </div>

                <script>
                    function myFunction() {
                        alert("資料刪除成功。");
                    }
                </script>
                <script>
                    function myFunction3() {
                        alert("資料修改成功。");
                    }
                </script>
                <script>
                    $("button[name=update]").click(function() {
                        var aa = $(this).attr('alt');
                        $("#parameter").val(aa);
                    });
                </script>
                <style>
                    #but_css {
                        width: 100%;
                        height: 10%;
                        border-radius: 10px;
                        background-color: #dadadab6;
                        transition: all .4s linear;
                        border: none;
                    }

                    #but_css:hover {
                        background-color: lightgray;
                        transition: color 0.15s ease-in-out, background-color 0.3s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

                    }
                </style>
            </div>
        </div>
        <iframe src="文件總覽.php" name="pic" style="height: 1000px; width: 95%; margin-left: 40px" frameborder="0"></iframe>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>

    <script src="vendor/chart.js/Chart.min.js"></script>

    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>
<footer style="margin-top: 150px;">
    <?php include "footer.php" ?>
</footer>

</html>
<?php
}
else{
    header('location:防駭登入.php');
}
?>