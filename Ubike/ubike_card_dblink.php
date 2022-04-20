<?php
$method = $_POST["method"];

$ubike_card_id = $_POST['ubike_card_id'];
$ubike_card_type = $_POST["ubike_card_type"];
$ubike_user_id = $_POST["ubike_user_id"];

$link = mysqli_connect("localhost", "root", "12345678", "ubike_sa");

if ($method == "card_insert") {
    
    $sql = "insert into ubike_card
     (ubike_card_id, ubike_card_type, ubike_user_id) values
     ('$ubike_card_id', '$ubike_card_type','$ubike_user_id')";
  
    if (mysqli_query($link, $sql)) {
        header('location:ubike_card_manage.php');
    }
    else{
        $error = "此卡號已經存在";
        header("location:ubike_card_num.php?error=$error");
    }
} 

// if ($method == "booked_update") {
//     $sql = "update web_manager_data set
//      name = '$name', date_in='$date_in', date_out='$date_out', pay='$pay', coupon='$coupon' where id='$id'";
    
//     if (mysqli_query($link, $sql)) {
 
//         header('location:personal.php');
//     }
// }
?>