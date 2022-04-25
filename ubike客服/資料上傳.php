<?php
if(isset($_SESSION['level'])){
?>
<?php
$fileError = $_GET['fileError'];
$fileError2 = $_GET['fileError2'];
$fileRight = $_GET['fileRight'];
$insertError = $_GET['insertError'];

$method = "insert3";
$allfile_id = "";
$allfile_專題編號 = "";
$allfile_專題名稱 = "";
$allfile_檔案 = "";
$allfile_上傳時間 = "";
$allfile_備註 = "";
$allfile_下載 = "";
$filename = $_GET['filename'];
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
        <b>專題文件管理&nbsp;/&nbsp;資料上傳</b> <br>
    </div>
    <center>
        <div class="pre" style="width: 90%;">
            <br>
            <div style="display: flex; flex-direction: row;">
                <div class="card shadow mb-4" style="border-right: 4px solid #007BFF; width: 100%;">
                    <div class="card-header" style="text-align: left; margin-bottom: 5px; color: #007BFF; background-color: #00000008">
                        <b>資料上傳區</b>
                    </div>
                    <div class="card-body" style="padding-bottom: 30px;">
                        <div class="input-group">
                            <b style="color: #858796; padding-top: 8px">STEP1&nbsp;|&nbsp;資料上傳：</b>
                            <form method="post" action="upload.php" enctype="multipart/form-data" style="width: 80%">
                                <table>
                                    <tr>
                                        <td style="width: 100%;"><input type="file" name="uploadfile" accept=".pdf" class="form-control" id="inputGroupFile01" style="height: 45px; margin-right: 10px; color: #808080;  margin-left: 5px;"></td>
                                        <td><input class="form-control" onclick="myFunction()" class="submit" type="submit" value="上傳" style="color: white; text-transform: uppercase; width: 180px; background-color:#4e73df; margin-left: 40px"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <br>
                        <form action="dblink3.php" method="post">
                            <input type="hidden" name="method" value="<?php echo $method ?>">
                            <?php
                            if (isset($fileError)) {
                                echo $fileError, "<br><br>";
                            } else if (isset($fileError2)) {
                                echo "
                                <table>
                                <tr>
                                <td>", $fileError2, "</td>
                                <td><button style='margin-left:20px; background-color: #f6c23e; border: none' type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                                錯誤代碼提示
                              </button></td>
                                </tr>
                                </table><br>
                                ";
                            } else if (isset($fileRight)) {
                                echo $fileRight, "<br>";
                            }
                            ?>

                            <div class="input-group">
                                <b style="color: #858796; padding-top: 5px">檔案名稱：</b>
                                <input class="form-control" type="text" style="color: grey; text-transform: uppercase; width: 300px; margin-left: 5px;" name="allfile_檔案" placeholder="請先上傳檔案" value="<?php if (isset($filename)) {
                                                                                                                                                                                                            echo $filename;
                                                                                                                                                                                                        } ?>" readonly>
                            </div>
                            <br>
                            <div class="input-group">
                                <b style="color: #858796; padding-top: 5px">STEP2&nbsp;|&nbsp;專題編號：（格式：【專題編號】）</b>
                                <input type="text" class="form-control" name="allfile_專題編號" style="color: grey; text-transform: uppercase; width: 300px; margin-left: 5px;" placeholder="" value="<?php echo $allfile_專題編號; ?>">
                            </div>
                            <br>
                            <div class="input-group">
                                <b style="color: #858796; padding-top: 5px">STEP3&nbsp;|&nbsp;專題名稱：</b>
                                <input type="text" class="form-control" name="allfile_專題名稱" style="color: grey; text-transform: uppercase; width: 300px; margin-left: 5px;" placeholder="" value="<?php echo $allfile_專題名稱; ?>">
                            </div>
                            <br>

                            <div class="input-group">
                                <b style="color: #858796; padding-top: 8px">STEP4&nbsp;|&nbsp;上傳時間：</b>
                                <input type="datetime-local" name="allfile_上傳時間" class="form-control" id="inputGroupFile01" style="height: 45px; margin-right: 10px; color: #808080;  margin-left: 5px;" value="<?php echo $allfile_上傳時間; ?>">
                            </div>
                            <br>
                            <div class="input-group">
                                <b style="color: #858796; padding-top: 8px">備註：</b>
                                <input type="text" class="form-control" name="allfile_備註" style="color: grey; text-transform: uppercase; width: 300px; margin-left: 5px;" placeholder="" value="<?php echo $allfile_備註; ?>">
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="hidden" class="form-control" name="allfile_下載" style="color: grey; text-transform: uppercase; width: 300px; margin-left: 5px;" placeholder="" value="<?php echo "<a href=download.php?filename=$filename>", $filename, "</a>"; ?>"> <br>
                            </div>
                            <center>
                                <table>
                                    <tr>
                                        <td style="width: 158px;"><a href="資料上傳.php"><input class="form-control" type="reset" value="重新輸入" style="color: white; text-transform: uppercase; width: 180px; background-color: #858796"></a></td>
                                        <td>
                                            <input class="form-control" onclick="myFunction()" class="submit" type="submit" value="新增" style="color: white; text-transform: uppercase; width: 180px; background-color:#4e73df; margin-left: 10px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 10px;" colspan="2"><?php echo $insertError ?></td>
                                    </tr>
                                </table>
                            </center>
                        </form>
                    </div>
                </div>

            </div>
            <script>
                function myFunction() {
                    alert("關閉視窗以查看上傳結果。");
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
    </center>
    <div style="color: black;" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: red;">
                        <div class="spinner-grow text-danger" role="status">
                            <span class="visually-hidden"></span>
                        </div>&nbsp;&nbsp;<b>查看錯誤代碼提示</b>
                    </h5>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>代號為<span style="color: red; font-weight: bold">1</span>，檔案超過可上傳的大小。</li>
                        <li>代號為<span style="color: red; font-weight: bold">2</span>，檔案超過可接受的檔案大小。</li>
                        <li>代號為<span style="color: red; font-weight: bold">3</span>，僅上傳部分檔案。</li>
                        <li>代號為<span style="color: red; font-weight: bold">4</span>，檔案未上傳。</li>
                        <li>代號為<span style="color: red; font-weight: bold">6</span>，上傳所需資料遺失。</li>
                        <li>代號為<span style="color: red; font-weight: bold">7</span>，檔案寫入磁碟時發生錯誤。</li>
                        <li>代號為<span style="color: red; font-weight: bold">8</span>，此版本不適用。</li>
                    </ul>
                    <style>
                        li {
                            padding: 3px;
                        }
                    </style>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">確認</button>
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

<footer style="margin-top: 120px;">
    <?php include "footer.php" ?>
</footer>

</html>
<?php
}
else{
    header('location:防駭登入.php');
}
?>