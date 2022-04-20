<?php 

    $station_id = $_POST['station_id'];
    $ubike_transaction_return = $_POST['ubike_borrow_time'];
    $ubike_bike_id = $_POST['ubike_bike_id'];


    switch ($station_id) {
        case 1:
            $ubike_station_name = "輔大站";
            break;
        case 2:
            $ubike_station_name = "濟時站";
            break;
        case 3:
            $ubike_station_name = "中美堂站";
            break;
        default:
            break;
    }

    $link = mysqli_connect("localhost","root","12345678","ubike_sa");

    if(isset($ubike_bike_id)){

        $sql = "UPDATE `ubike_transaction` SET ubike_transaction_return = '$ubike_transaction_return' , ubike_station_return = '$ubike_station_name' 
                WHERE ubike_bike_id = '$ubike_bike_id'";        
        
		if(mysqli_query($link,$sql)){
            header('location:test.php?method=message&message=修改成功'); 
        }
    }


?>