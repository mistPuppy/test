<?php
if(isset($_SESSION['level'])){
?>
<?php
$method = $_POST["method"];
$titlecontent_id = $_POST["titlecontent_id"];
$titlecontent_num = $_POST['titlecontent_num'];
$titlecontent_name = $_POST['titlecontent_name'];
$titlecontent_grade = $_POST['titlecontent_grade'];
$titlecontent_level = $_POST['titlecontent_level'];
$titlecontent_content = $_POST['titlecontent_content'];
$titlecontent_teacher = $_POST['titlecontent_teacher'];
$titlecontent_date = $_POST['titlecontent_date'];
$titlecontent_note = $_POST['titlecontent_note'];

$link = mysqli_connect("localhost", "root", "12345678", "finalwork");

if ($method == "update5") {
    $sql = "update finalworktitlecontent set titlecontent_num = '$titlecontent_num'
    , titlecontent_name = '$titlecontent_name'
    , titlecontent_grade = '$titlecontent_grade', titlecontent_level = '$titlecontent_level', titlecontent_content = '$titlecontent_content'
    , titlecontent_teacher = '$titlecontent_teacher', titlecontent_date = '$titlecontent_date', titlecontent_note = '$titlecontent_note'
    where titlecontent_id = '$titlecontent_id'";
    // echo 1, "<br>";
    // echo $sql;
    if (mysqli_query($link, $sql)) {
        // echo 2, "<br>";
        // echo $sql;
        header('location:評分紀錄.php');
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