<?php
if (isset($_SESSION['level'])) {
?>
<?php
    $id = $_GET["id"];

    $link = mysqli_connect("localhost", "root", "12345678", "finalwork");

    $sql = "delete from finalworkaccount where id = '$id'";

    if (mysqli_query($link, $sql)) {
        header('location:帳號管理.php?');
    }
?>
<?php
} else {
    header('location:防駭登入.php');
}
?>