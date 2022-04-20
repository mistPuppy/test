<!-- 
    借車後要新增交易紀錄，其中的、「$ubike_user_id, $ubike_card_id」(在user資料庫)，要怎麼上傳到資料庫??? 
-->

<?php
$_SESSION['tag'] = $_POST['tag'];
$ubike_station_borrow = $_POST['ubike_station_name'];
$ubike_transaction_borrow = $_POST['ubike_borrow_time'];
$ubike_bike_id_borrow = $_POST['ubike_bike_id_borrow'];

$link = mysqli_connect("localhost", "root", "12345678", "ubike_sa");
if (isset($ubike_bike_id_borrow)) {
    // $sql = "INSERT INTO `ubike_transaction` (ubike_transaction_id,ubike_user_id,ubike_card_id,ubike_bike_id,ubike_transaction_borrow,ubike_transaction_return,ubike_station_borrow,ubike_station_return) 
    //         VALUES ('   ','   ','   ','$ubike_bike_id','$ubike_transaction_borrow','null','$ubike_station_borrow','null')";
    $sql = "INSERT INTO `ubike_transaction` (ubike_bike_id,ubike_transaction_borrow,ubike_station_borrow) 
                VALUES ('$ubike_bike_id_borrow','$ubike_transaction_borrow','$ubike_station_borrow')";



    if (mysqli_query($link, $sql)) {
        header("location:map.php?ubike_bike_id_borrow=$ubike_bike_id_borrow");
    }
}

?>