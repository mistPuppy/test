<?php
if(isset($_SESSION['level'])){
?>
<?php
$method = $_POST["method"];
$allfile_id = $_POST["allfile_id"];
$allfile_專題編號 = $_POST["allfile_專題編號"];
$allfile_專題名稱 = $_POST["allfile_專題名稱"];
$allfile_檔案 = $_POST["allfile_檔案"];
$allfile_上傳時間 = $_POST["allfile_上傳時間"];
$allfile_備註 = $_POST["allfile_備註"];
$allfile_下載 = $_POST["allfile_下載"];

$link = mysqli_connect("localhost", "root", "12345678", "finalwork");
if ($method == "insert3") {
    $sql = "insert into finalworkallfile (allfile_專題編號, allfile_專題名稱, allfile_檔案, allfile_上傳時間, allfile_備註, allfile_下載)
     values ('$allfile_專題編號', '$allfile_專題名稱', '$allfile_檔案', '$allfile_上傳時間', '$allfile_備註', '$allfile_下載')";
    if (mysqli_query($link, $sql)) {
        header('location:2.0文件總覽.php');
    }
}
else {
    $sql = "update finalworkallfile set allfile_專題編號 = '$allfile_專題編號'
    , allfile_專題名稱 = '$allfile_專題名稱'
    , allfile_檔案 = '$allfile_檔案', allfile_上傳時間 = '$allfile_上傳時間', allfile_備註 = '$allfile_備註'
    , allfile_下載 = '$allfile_下載'
    where allfile_id = '$allfile_id'";
    // echo 1, "<br>";
    // echo $sql;   //停在這
    if (mysqli_query($link, $sql)) {
        // echo 2, "<br>";
        // echo $sql;
        header('location:文件總覽.php');
    }
}
mysqli_close($link);
?>
<?php
}
else{
    header('location:防駭登入.php');
}
?>