<?php
if(isset($_SESSION['level'])){
?>
<?php
$method = $_POST["method"];
$id = $_POST["id"];
$acc_單位 = $_POST["acc_單位"];
$name = $_POST["name"];
$acc_編號 = $_POST["acc_編號"];
$password = $_POST["password"];
$level = $_POST["level"];
$acc_備註 = $_POST["acc_備註"];
$link = mysqli_connect("localhost", "root", "12345678", "finalwork");
if ($method == "insert2") {
    $sql = "insert into finalworkaccount (id, acc_單位, name, acc_編號, password, level, acc_備註)
     values ('$id', '$acc_單位', '$name', '$acc_編號', '$password', '$level', '$acc_備註')";
    if (mysqli_query($link, $sql)) {
        header('location:帳號管理.php');
    } else {
        header('location:新增帳號管理.php?insertError=<span style="color:red">此帳號已經存在，請重新輸入。</span>');
    }
} else {
    $sql = "update finalworkaccount set acc_單位 = '$acc_單位'
    , name = '$name'
    , acc_編號 = '$acc_編號', password = '$password', level = '$level'
    , acc_備註 = '$acc_備註'
    where id = '$id'";
    // echo $sql;
    if (mysqli_query($link, $sql)) {
        // echo $sql;
        header('location:帳號管理.php');
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