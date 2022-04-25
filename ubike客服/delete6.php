<?php
if(isset($_SESSION['level'])){
?>
<?php
$news_id = $_GET["news_id"];

$link = mysqli_connect("localhost", "root", "12345678", "finalwork");

$sql = "delete from finalworknews where news_id = '$news_id'";

if (mysqli_query($link, $sql)) {
    header('location:index.php');
}
?>
<?php
}
else{
    header('location:防駭登入.php');
}
?>