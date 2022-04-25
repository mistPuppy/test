<?php
if(isset($_SESSION['level'])){
?>
<?php
$filename = $_FILES["uploadfile"]["name"];
if ($_FILES["uploadfile"]["error"] > 0) {
    if ($_FILES["uploadfile"]["error"] == 1) {
        $fileError2 = "<span style='color:red; font-weight:bold;'>上傳失敗，Error：1。<br></span>";
        header("location:資料上傳.php?fileError2=$fileError2");
    }else if($_FILES["uploadfile"]["error"] == 2){
        $fileError2 = "<span style='color:red; font-weight:bold;'>上傳失敗，Error：2。<br></span>";
        header("location:資料上傳.php?fileError2=$fileError2");
    }else if($_FILES["uploadfile"]["error"] == 3){
        $fileError2 = "<span style='color:red; font-weight:bold;'>上傳失敗，Error：3。<br></span>";
        header("location:資料上傳.php?fileError2=$fileError2");
    }else if($_FILES["uploadfile"]["error"] == 4){
        $fileError2 = "<span style='color:red; font-weight:bold;'>上傳失敗，Error：4。<br></span>";
        header("location:資料上傳.php?fileError2=$fileError2");
    }else if($_FILES["uploadfile"]["error"] == 6){
        $fileError2 = "<span style='color:red; font-weight:bold;'>上傳失敗，Error：6。<br></span>";
        header("location:資料上傳.php?fileError2=$fileError2");
    }else if($_FILES["uploadfile"]["error"] == 7){
        $fileError2 = "<span style='color:red; font-weight:bold;'>上傳失敗，Error：7。<br></span>";
        header("location:資料上傳.php?fileError2=$fileError2");
    }else if($_FILES["uploadfile"]["error"] == 8){
        $fileError2 = "<span style='color:red; font-weight:bold;'>上傳失敗，Error：8。<br></span>";
        header("location:資料上傳.php?fileError2=$fileError2");
    }
    // echo "Error: " . $_FILES["uploadfile"]["error"];
} else {
    echo "檔案名稱: " . $_FILES["uploadfile"]["name"] . "<br>";
    echo "檔案類型: " .  $_FILES["uploadfile"]["type"] . "<br>";
    echo "檔案大小: " . ($_FILES["uploadfile"]["size"] / 1024) . " Kb<br>";
    echo "暫存名稱: " .  $_FILES["uploadfile"]["tmp_name"];
    if (file_exists("../upload/" .  $_FILES["uploadfile"]["name"])) {
        $fileError = "<span style='color:red; font-weight:bold;'>檔案已經存在，請勿重覆上傳相同檔案。</span>";
        header("location:資料上傳.php?fileError=$fileError");
    } else {
        move_uploaded_file($_FILES["uploadfile"]["tmp_name"], "../upload/" .  $_FILES["uploadfile"]["name"]);
        $fileRight = "<span style='color:red; font-weight:bold;'>上傳成功。<br></span>";
        header("location:資料上傳.php?filename=$filename&fileRight=$fileRight");
    }
}
?>
<?php
}
else{
    header('location:防駭登入.php');
}
?>