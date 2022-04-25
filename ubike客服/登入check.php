<?php
session_start();
$id = $_POST['id'];
$password = $_POST['password'];
$link = mysqli_connect("localhost", "root", "12345678", "finalwork");
$sql = "select * from finalworkaccount where id = '$id'";

$rs = mysqli_query($link, $sql);
if ($record = mysqli_fetch_assoc($rs)) {
    if ($password == $record['password']) {
        $_SESSION['id'] = $record['id'];
        $_SESSION['password'] = $record['password'];
        $_SESSION['user'] = $record['name'];
        $_SESSION['level'] = $record['level'];
        header('location:index.php');
    }
    else{
        $error = "密碼錯誤";
    header("location:登入.php?error=$error");
}

}

else if (mysqli_num_rows($rs)==0){
        $error = "帳號不存在";
    header("location:登入.php?error=$error");
}
