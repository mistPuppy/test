<?php
if (isset($_SESSION['level'])) {
?>
<?php
    $team_id = $_GET["team_id"];

    $link = mysqli_connect("localhost", "root", "12345678", "finalwork");

    $sql = "delete from finalworkteam where team_id = '$team_id'";

    if (mysqli_query($link, $sql)) {
        // echo $sql;
        header('location:專題成員總覽.php?');
    }
?>
<?php
} else {
    header('location:防駭登入.php');
}
?>