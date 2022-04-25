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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>專題評分管理系統｜天主教輔仁大學</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        $(window).ready(() => {
            $('#staticBackdrop').modal('show');
        })
    </script>
</head>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #007bff;">
                    <b>評分上傳成功。</b>
                </h5>
            </div>
            <center><br>
                <div style="color: #858796; font-size: 18px">
                    <b>點擊&nbsp;<span style="color: red;">專題評分&nbsp;/&nbsp;評分紀錄</span>&nbsp;以查看評分結果。</b>
                </div>
                <br>
            </center>
        </div>
    </div>
</div>

<body>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
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
                            box-shadow: 10px 10px 25px #9D9D9D;">
                            <div class="pre" style="color: grey;">
                                <br>
                                <table>
                                    <tr>
                                        <td style="width: 100px;">給予評分：</td>
                                        <td><input class="form-control" class="input" type="text" style="color: grey; text-transform: uppercase; width: 250px; height: 30px;" placeholder=""></td>
                                        <td>評等：</td>
                                        <td><input class="form-control" class="input" type="text" style="color: grey; text-transform: uppercase; width: 250px; height: 30px;" placeholder=""></td>

                                    </tr>
                                    <tr style="color: white;">
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:text-top;">給予建議：</td>
                                        <td colspan="3"><textarea class="form-control" name="textArea" id="" cols="100" rows="9"></textarea>
                                        </td>
                                    </tr>
                                    <tr style="color: white;">
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:text-top;">評分教師：</td>
                                        <td>
                                            <div class="input-group mb-3" style="width: 250px;">
                                                <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" style="height: 30px;">
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
                                                    <a><input class="form-control" onclick="myFunction()" class="submit" type="submit" value="上傳" style="color: white; text-transform: uppercase; width: 150px; background-color:#4e73df">
                                                </td>
                                            </tr>
                                        </table>
                                    </center>

                                    &nbsp;&nbsp;
                                    <div id="show_time0">
                                        <script>
                                            setInterval("show_time0.innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());", 1000);
                                        </script>
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