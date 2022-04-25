<?php
if(isset($_SESSION['level'])){
?>
<?php
$method_2 = $_POST["method_2"];
$method2 = $_POST["method2"];
$method3 = $_POST["method3"];
$title_num = $_POST["title_num"];
$title_name = $_POST["title_name"];
$title_num2 = $_POST["title_num2"];
$title_name2 = $_POST["title_name2"];
$title_id = $_POST["title_id"];

$titlecontent_num = $_POST["titlecontent_num"];
$titlecontent_name = $_POST["titlecontent_name"];
$titlecontent_grade = $_POST["titlecontent_grade"];
$titlecontent_level = $_POST["titlecontent_level"];
$titlecontent_content = $_POST["titlecontent_content"];
$titlecontent_teacher = $_POST["titlecontent_teacher"];
$titlecontent_date = $_POST["titlecontent_date"];
$titlecontent_note = $_POST["titlecontent_note"];

$link = mysqli_connect("localhost", "root", "12345678", "finalwork");
if ($method_2 == "insert4") {
    $sql = "insert into finalworktitle (title_num, title_name)
     values ('$title_num', '$title_name')";
    if (mysqli_query($link, $sql)) {
        header('location:專題資訊.php');
    }
} elseif ($method2 == "update4") {
    $sql = "update finalworktitle set title_num = '$title_num2'
    , title_name = '$title_name2'
    where title_id = '$title_id'";
    echo $sql;
    if (mysqli_query($link, $sql)) {
        header('location:修改專題資訊結果.php');
    }
} elseif ($method3 == "insert42") {
    $sql = "insert into finalworktitlecontent (titlecontent_num, titlecontent_name, titlecontent_grade, titlecontent_level, titlecontent_content, titlecontent_teacher, titlecontent_date, titlecontent_note)
     values ('$titlecontent_num', '$titlecontent_name', '$titlecontent_grade', '$titlecontent_level', '$titlecontent_content', '$titlecontent_teacher', '$titlecontent_date', '$titlecontent_note')";
    echo $sql;
    if (mysqli_query($link, $sql)) {
        // echo $sql;
        header('location:評分結果.php');
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