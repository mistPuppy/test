<?php
if(isset($_SESSION['level'])){
?>
<?php
$method_2 = "insert4";
$title_num = "";
$title_name = "";

$link = mysqli_connect("localhost", "root", "12345678", "finalwork");
if (empty($searchtxt)) {
    $sql = "select * from finalworktitle";
} else {
    $sql = "select * from finalworkteam where team_id like '%$searchtxt%' or team_id like '%$searchtxt%'";
}
$rs = mysqli_query($link, $sql);
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
    <!-- <form action="評分系統check.php" method="post"> -->
    <?php include "navigation.php"; ?>
    <div style="margin-left: 23px; margin-top: 10px; margin-bottom: 20px; color: #858796;">
    <b>專題總覽&nbsp;/&nbsp;專題資訊</b> <br>
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
            <div style="border-radius: 10px; border-right: 4px solid #00BB00; width:100%; background-color: #dadadab6; height: 100%; margin-left: 20px; margin-right:12px; padding: 12px; text-align: center;"><br>
                <?php
                while ($record = mysqli_fetch_row($rs)) {
                    echo "<a href='專題資訊2.php?title_num=$record[2]&title_name=$record[1]' id='secondButton1' target='pic' style='font-size: 17px; padding: 5px; border-radius: 3px; text-decoration: none'><b>", $record[1], "<br>", $record[2],
                    "</b></a><a target=pic href='修改專題資訊.php?title_id=$record[0]'><button style='border: none;''><i class='fas fa-edit' style='color: #f6c23e'></i></button></a>
                    <a onclick='myFunction()' href='delete4.php?title_id=$record[0]'><button style='border: none;' data-bs-toggle='modal' data-bs-target='#exampleModal3'><i class='fas fa-trash-alt' style='color: #e74a3b'></i></button></a>
                    <hr style='margin: 20px'>";
                }
                ?>
                <script>
                    function myFunction() {
                        alert("資料刪除成功。");
                    }
                </script>
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" id="but_css">
                    <a href="#" style="color: gray; font-size: 16px; display: flex; margin: auto">
                        <div style="width: 100%; height: 100%;">
                            <i class="fas fa-plus-circle" style="margin-right: 10px;"></i><b>建立專題</b>
                        </div>
                    </a>
                </button>
                <form action="dblink4.php" method="post">
                    <input type="hidden" name="method_2" value="<?php echo $method_2 ?>">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <div class="spinner-grow text-success" role="status">
                                            <span class="visually-hidden"></span>
                                        </div>&nbsp;&nbsp;<b>新增專題評分組別</b>
                                    </h5>
                                </div>
                                <div class="modal-body">
                                    <br><input class="form-control" type="text" name="title_num" value="<?php echo $title_num ?>" placeholder="專題編號：（輸入格式：【專題編號】）"><br>
                                    <input class="form-control" type="text" name="title_name" value="<?php echo $title_name ?>" placeholder="專題名稱："><br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                                    <button onclick='myFunction2()' type="submit" class="btn btn-primary">送出</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <script>
                    function myFunction2() {
                        alert("資料新增成功。");
                    }
                </script>
                
                <!-- <script>
                    $("button[name=update]").click(function() {
                        var aa = $(this).attr('alt');
                        $("#parameter").val(aa);
                    });
                </script> -->
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
        <iframe src="專題首頁.php" name="pic" style="height: 850px; width: 95%; margin-left: 40px" frameborder="0"></iframe>
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