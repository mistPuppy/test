<?php
if(isset($_SESSION['level'])){
?>
<?php
$title_id = $_GET["title_id"];

$link = mysqli_connect("localhost", "root", "12345678", "finalwork");

$sql = "delete from finalworktitle where title_id = '$title_id'";

if (mysqli_query($link, $sql)) {
    header('location:專題資訊.php?');
}
?>
<?php
}
else{
    header('location:防駭登入.php');
}
?>