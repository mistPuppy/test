<html>
  <head>
    <title>Info Windows</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>

    <link href="../station_detailed.css" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  

  </head>
  <body>
    <div id="map"></div>

    <!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
      defer
    ></script>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>


<?php
    function initMap() {
    const fju = { lat: -25.363, lng: 131.044 };
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: fju,
    });
    const contentString =

        '<div id="content">' +
        '<div id="siteNotice">' +
        "</div>" +

        // version 1(start)
        // '<h1 id="firstHeading" class="firstHeading">輔大站</h1>' +

        // 這行不確定能不能跑
        // '<h5 id="firstHeading" class="firstHeading">新北市新莊區中正路510號</h5>' +
        // version 1(end) 

        //version 2(start)
        '<div id="firstHeading" class="firstHeading">' + 
        '<i class="bi bi-heart"></i>' +     
        '<h1>輔大站   </h1>' + 
        '<i class="bi bi-geo-alt-fill"></i>新北市新莊區中正路510號' +
        "<br>" + 
        "</div>" +
        //version 2(end)
        
        '<div id="bodyContent">' +
            
        '<p><i class="bi bi-sun"></i> 晴朗' + 
        "<br>" + 
        '<i class=" "></i> 氣溫：25°C ' + 
        '<i class=" "></i> 降雨機率：38% ' +
        "<br>" +
        '<i class=" "></i> 可借車輛：10 ' + 
        '<i class=" "></i> 可還車位：5</p>' +

        "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>掃碼借車</button>" +
        
        

        
        '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
        "https://en.wikipedia.org/w/index.php?title=Uluru</a> " +
        "(last visited June 22, 2009).</p>" +
        "</div>" +
        "</div>";

    const infowindow = new google.maps.InfoWindow({
        content: contentString,
    });
    const marker = new google.maps.Marker({
        position: fju,
        map,
        title: "fju",
    });

    marker.addListener("click", () => {
        infowindow.open({
        anchor: marker,
        map,
        shouldFocus: false,
        });
    });
    }

    window.initMap = initMap;
?>