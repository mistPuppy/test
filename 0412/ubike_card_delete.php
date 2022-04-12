<?
// if ($_SESSION['level'] <> "member") {
//     header('location:login_user.php');
// } 


// else{


$ubike_card_id = $_GET["ubike_card_id"];
$link = mysqli_connect("localhost", "root", "12345678", "ubike_sa");
$sql = "delete from ubike_card where ubike_card_id = '$ubike_card_id'";
print($sql);

if (mysqli_query($link, $sql)) {
    
    header('location:ubike_card_manage.php');
}
// }
?>


