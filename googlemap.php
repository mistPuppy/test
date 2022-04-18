<?php

// if ($_SESSION['level'] <> "admin") {
//     header('location:login_user.php');
// }

$link = mysqli_connect("localhost", "root", "12345678", "ubike_sa");

if (!$link) {
    echo "連接失敗" . mysqli_connect_error();
}
mysqli_query($link, "set names utf8");
$sql = "SELECT * FROM ubike_station";
$result = mysqli_query($link, $sql);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Map</title>
    <!-- 網頁icon標籤的JS -->
    <script src="https://kit.fontawesome.com/874fe894d1.js" crossorigin="anonymous"></script>


    <style>
        #map {
            height: 550px;
            width: 100%;
        }
        .ubike_css {
            letter-spacing: 2px;
            font-weight: 900;
            color: #6C6C6C;
        }
    </style>

    <script>
        let map;
        function initMap() {
            // const iconBase =
            //     "https://developers.google.com/maps/documentation/javascript/examples/full/images/";
            const icons = {
                version1: {
                    icon: "https://www.youbike.com.tw/images/1.0_icon_point.png",
                },
                version2: {
                    icon: "https://www.youbike.com.tw/images/2.0_icon_point.png",
                },
                version3: {
                    icon: "https://www.youbike.com.tw/images/1.0&2.0_icon_point.png",
                },
            };

            map = new google.maps.Map(document.getElementById("map"), {
                center: new google.maps.LatLng(25.036071990298225, 121.43233991555581),
                zoom: 16,
                streetViewControl: false,
                mapTypeControl: false,
                fullscreenControl: false,
            });

            const MapOptions = [
                <?php
                while ($record = mysqli_fetch_row($result)) {
                ?> {
                        position: new google.maps.LatLng(<?php echo $record[6] ?>, <?php echo $record[7] ?>),
                        type: "version" + '<?php echo $record[3] ?>',
                        placeName: '<?php echo $record[1] ?>',
                        placeAdress: '<?php echo $record[5] ?>',

                    },
                <?php } ?>
            ];

            // Create markers.
            for (let i = 0; i < MapOptions.length; i++) {
                // var contentString = '<h3>' + MapOptions[i].placeName + '</h3>';
                const contentString =
                    '<div id="content" style="width: 500px;">' +
                    '<div id="siteNotice">' +
                    "</div>" +

                    // version 1(start)
                    // '<h1 id="firstHeading" class="firstHeading">輔大站</h1>' +

                    // 這行不確定能不能跑
                    // '<h5 id="firstHeading" class="firstHeading">新北市新莊區中正路510號</h5>';
                    // version 1(end) 

                    //version 2(start)
                    '<div id="firstHeading" class="firstHeading">' +
                    '<table border="0" style="width:500px; height:150px;" class="ubike_css">' +
                    '<tr>' +
                    '<td colspan="2" style="width:25%; text-align:left; font-size:30px; padding-left:20px;">' +
                    '<i class="fa-solid fa-heart"></i>&nbsp;' +
                    '<b style="color: #fd7e14;">'+ MapOptions[i].placeName +'</b>' +
                    '<sub style="font-size: 10px;">'+ MapOptions[i].placeAdress +'</sub>' +
                    '</td>' +
                    '<td style="width:20%; text-align:left; font-size:15px;">距離**km</td>' +
                    '<td style="width:25%; text-align:center;" rowspan="3">' +
                    '<button type="button" style="width:80%; height:90%; padding:6px;background-color:#BEBEBE; border-radius:7px; border:none; color:white; box-shadow:5px;" data-bs-toggle="modal" data-bs-target="#exampleModal">掃碼借車</button>' +
                    '</td>' +
                    '</tr>' +
                    '<tr>' +
                    '<td rowspan="3" style="border-right:3px #BEBEBE solid;">' +
                    '<table style="text-align: center;" border="0">' +
                    '<tr>' +
                    '<td rowspan="2" style="padding-left:9px; font-size:40px; color:#003060;">' +
                    '<i class="fa-solid fa-cloud-sun"></i>' +
                    '</td>' +
                    '<td style="font-size:12px; width:50%;">氣溫：25°C</td>' +
                    '</tr>' +
                    '<tr>' +
                    '<td style="font-size:12px;">降雨：38%</td>' +
                    '</tr>' +
                    '</table>' +
                    '</td>' +
                    '<td rowspan="3" style="width:25%; padding-left:2%; border-right:3px #BEBEBE solid;">' +
                    '<table border="0" style="font-size:10px; text-align:center;">' +
                    '<tr style="font-size:10px; color:black;">' +
                    '<td style="text-align:left; border-right:1px #BEBEBE solid;">版本：</td>' +
                    '<td style="border-right:1px #BEBEBE solid;">1.0</td>' +
                    '<td>2.0</td>' +
                    '</tr>' +
                    '<tr>' +
                    '<td style="border-top:1px #BEBEBE solid; border-right:1px #BEBEBE solid;">可借：</td>' +
                    '<td style="border-top:1px #BEBEBE solid; border-right:1px #BEBEBE solid; color:#EA0000;">10</td>' +
                    '<td style="border-top:1px #BEBEBE solid; color:#EA0000;">5</td>' +
                    '</tr>' +
                    '<tr>' +
                    '<td style="border-top:1px #BEBEBE solid; border-right:1px #BEBEBE solid;">可還：</td>' +
                    '<td style="border-top:1px #BEBEBE solid; border-right:1px #BEBEBE solid; color:	#000093;">3</td>' +
                    '<td style="border-top:1px #BEBEBE solid; color:	#000093">7</td>' +
                    '</tr>' +
                    '</table>' +
                    '</td>' +
                    '<td style="text-align: center;">' +
                    '<button type="button" style="padding:6px; background-color:#00A600; border-radius:7px; border:none; color:aliceblue; box-shadow:5px;" data-bs-toggle="modal" data-bs-target="#exampleModal">顯示規劃路線</button>' +
                    '</td>' +
                    '</tr>' +
                    '<tr>' +
                    '<td style="text-align: center;"><button type="button" style="padding: 6px;background-color:	#0080FF ;border-radius: 7px ;border: none; color: aliceblue;box-shadow: 5px;" data-bs-toggle="modal" data-bs-target="#exampleModal">建議還車站點</button></td>' +
                    '</tr>' +
                    '</table>' +

                    "</div>";;
                const marker = new google.maps.Marker({
                    position: MapOptions[i].position,
                    icon: icons[MapOptions[i].type].icon,
                    map: map,
                });
                const infowindow = new google.maps.InfoWindow({
                    content: contentString,
                });

                marker.addListener("click", () => {
                    infowindow.open({
                        anchor: marker,
                        map,
                        shouldFocus: false,
                    });
                    
                });

                google.maps.event.addListener(map, "click", function(event) {
                    infowindow.close();
                });

            }
        }
    </script>
</head>

<body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script defer async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVwup4bS9HoTBM34rE3THMsngB_LrLJ2Q&callback=initMap&v=weekly"></script>
</body>

</html>