<?php
if(isset($_SESSION['level'])){
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
    <form class="form-horizontal" style=" background-color:white;
                            width: 1000px;
                            padding-left:25px;
                            padding-right:25px;
                            margin: auto;
                            margin-top: 25px;
                            margin-bottom: 30px;
                            box-shadow: 10px 10px 25px #9D9D9D;">
        <div class="pre">
            <br>

            <div class="pre" id="table-responsive">
                <table style="text-align: center;" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>專題編號</th>
                            <th>專題名稱</th>
                            <th>評分</th>
                            <th>評等</th>
                            <th>給予建議</th>
                            <th>評分教師</th>
                            <th>評分時間</th>
                            <th>評分進度</th>
                            <?php
                            if($_SESSION['level'] == "teacher"){
                                echo "<th colspan='2'>操作</th>";
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $title_name = $_GET['title_name'];
                        $title_num = $_GET['title_num'];
                        $link = mysqli_connect("localhost", "root", "12345678", "finalwork");
                        if (empty($searchtxt)) {
                            $sql = "select * from finalworktitlecontent where titlecontent_num like '%$title_name%' && titlecontent_name like '%$title_num%'";
                        } else {
                            $sql = "select * from finalworkteam where team_id like '%$searchtxt%' or team_id like '%$searchtxt%'";
                        }

                        $rs = mysqli_query($link, $sql);

                        while ($record = mysqli_fetch_row($rs)) {
                            echo "<tr>
                            <td>$record[1]</td>
                            <td>$record[2]</td>
                            <td>$record[3]</td>
                            <td>$record[4]</td>
                            <td>$record[5]</td>
                            <td>$record[6]</td>
                            <td>$record[7]</td>
                            <td>$record[8]</td>
                            ";
                            if($_SESSION['level'] == "teacher"){
                                echo "<td style='width:60px'><button class='form-control' style='width:60px; background-color: #f6c23e'><a style='color:white; width:60px' href=修改評分紀錄.php?titlecontent_id=$record[0]>修改</button></a></td>
                                <td style='width:60px'><button class='form-control' style='width:60px; background-color: #e74a3b'><a onclick='myFunction()' style='color:white;width:60px' href=delete5.php?method=delete5&titlecontent_id=$record[0]>刪除</a></button></td>
                                </tr>
                                ";
                            }
                            else{
                                echo "</tr>";
                            }
                        }

                        mysqli_close($link);
                        ?>
                    </tbody>
                </table>
                <br>

                <script>
                    function myFunction() {
                        alert("資料刪除成功。");
                    }
                </script>
                <style>
                    .submit {
                        color: white;
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
                <br>

            </div>
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