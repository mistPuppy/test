<?php
if(isset($_SESSION['level'])){
?>
<?php

$titlecontent_id = $_GET["titlecontent_id"];

$link = mysqli_connect("localhost", "root", "12345678", "finalwork");

$sql = "delete from finalworktitlecontent where titlecontent_id = '$titlecontent_id'";

if (mysqli_query($link, $sql)) {
    header('location:評分紀錄.php?');
}
?>
<?php
}
else{
    header('location:防駭登入.php');
}
?>