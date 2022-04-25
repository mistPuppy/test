<?php
if (isset($_SESSION['level'])) {
?>
<?php
    $allfile_id = $_GET["allfile_id"];

    $link = mysqli_connect("localhost", "root", "12345678", "finalwork");

    $sql = "delete from finalworkallfile where allfile_id = '$allfile_id'";

    if (mysqli_query($link, $sql)) {
        header('location:文件總覽.php?');
    }
?>
<?php
} else {
    header('location:防駭登入.php');
}
?>