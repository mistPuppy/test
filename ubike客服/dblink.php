<?php
if(isset($_SESSION['level'])){
?>
<?php
$method = $_POST["method"];
$method_sin = $_POST["method_sin"];
$method_dou = $_POST["method_dou"];
$team_id = $_POST["team_id"];
$team_專題編號 = $_POST["team_專題編號"];
$team_專題名稱 = $_POST["team_專題名稱"];
$team_組員學號 = $_POST["team_組員學號"];
$team_組員姓名 = $_POST["team_組員姓名"];
$team_組員學院學系 = $_POST["team_組員學院學系"];
$team_組員班級 = $_POST["team_組員班級"];
$team_指導老師 = $_POST["team_指導老師"];
$team_備註 = $_POST["team_備註"];

$link = mysqli_connect("localhost", "root", "12345678", "finalwork");
if ($method_sin == "insert") {
    $sql = "insert into finalworkteam (team_id, team_專題編號, team_專題名稱, team_組員學號, team_組員姓名, team_組員學院學系, team_組員班級, team_指導老師, team_備註)
     values ('$team_id', '$team_專題編號', '$team_專題名稱', '$team_組員學號', '$team_組員姓名', '$team_組員學院學系', '$team_組員班級', '$team_指導老師', '$team_備註')";
    if (mysqli_query($link, $sql)) {
        header('location:專題成員總覽.php');
    }
} else if ($method_dou == "insert") {
    $sql = "insert into finalworkteam (team_id, team_專題編號, team_專題名稱, team_組員學號, team_組員姓名, team_組員學院學系, team_組員班級, team_指導老師, team_備註)
     values ('$team_id', '$team_專題編號', '$team_專題名稱', '$team_組員學號', '$team_組員姓名', '$team_組員學院學系', '$team_組員班級', '$team_指導老師', '$team_備註')";
    if (mysqli_query($link, $sql)) {
        header('location:2.0專題成員總覽.php');
    }
} elseif ($method == "update") {
    $sql = "update finalworkteam set team_專題編號 = '$team_專題編號'
    , team_專題名稱 = '$team_專題名稱'
    , team_組員學號 = '$team_組員學號', team_組員姓名 = '$team_組員姓名', team_組員學院學系 = '$team_組員學院學系'
    , team_組員班級 = '$team_組員班級', team_指導老師 = '$team_指導老師', team_備註 = '$team_備註'
    where team_id = '$team_id'";
    echo $sql;
    if (mysqli_query($link, $sql)) {
        header('location:專題成員總覽.php');
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