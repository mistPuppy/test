<?php
if(isset($_SESSION['level'])){
?>
<?php
$method = $_POST["method"];
$news_id = $_POST["news_id"];
$news_content = $_POST["news_content"];
$news_content2 = $_POST["news_content2"];
$news_person = $_POST["news_person"];
$news_person2 = $_POST["news_person2"];
$news_date = $_POST["news_date"];
$news_date2 = $_POST["news_date2"];
echo 1;
$link = mysqli_connect("localhost", "root", "12345678", "finalwork");
if ($method == "insert6") {
    $sql = "insert into finalworknews (news_content, news_person, news_date)
     values ('$news_content', '$news_person', '$news_date')";
    if (mysqli_query($link, $sql)) {
        // echo $sql;
        header('location:index.php');
    }
} 
elseif ($method == "update6") {
    echo 2;
    $sql = "update finalworknews set news_content = '$news_content2'
    , news_person = '$news_person2'
    , news_date = '$news_date2'
    where news_id = '$news_id'";
    echo $sql;
    if (mysqli_query($link, $sql)) {
        header('location:index.php');
        // echo $sql;
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