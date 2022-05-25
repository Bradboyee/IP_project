<?php
session_start();
$_SESSION['driverid'] = $_POST['selecteddriver'];
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <title>Routing Map Sample | Longdo Map</title>
  <link rel="stylesheet" href="./css/map.css">

  <script type="text/javascript" src="https://api.longdo.com/map/?key=65b54f236809b1688232cb43b14bff84    "></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script>
    function init() {
      map = new longdo.Map({
        placeholder: document.getElementById('map')
      });
      map.Route.placeholder(document.getElementById('result'));
      map.location(longdo.LocationMode.Geolocation);
      map.Route.enableContextMenu();
      map.Route.auto(true);
      map.Route.search();

      map.Event.bind('guideComplete', function () {
        //var location = map.location(); // Cross hair location
        document.getElementById('distance').value = map.Route.distance();
        document.getElementById('interval').value = map.Route.interval();
        document.getElementById('startpoi').value = map.Route.list()[0].poi;
        document.getElementById('despoi').value = map.Route.list()[1].poi;
        document.getElementById('startlat').value = map.Route.guide()[0].from.lat;
        document.getElementById('startlon').value = map.Route.guide()[0].from.lon;
        document.getElementById('deslat').value = map.Route.guide()[0].to.lat;
        document.getElementById('deslon').value = map.Route.guide()[0].to.lon;
        //console.log(map.Route.distance());
        //console.log(map.Route.interval());
        //console.log(map.Route.list());
        console.log(map.Route.guide());
      });
    }

    /*function myFunction() {
      alert(map.Route.list()[0].poi);
      alert(map.Route.list()[1].poi);
      alert(map.Route.distance());
      alert(map.Route.interval());
    }*/
  </script>

</head>

<body onload="init();">
  <div id="map"></div>
  <div id="result"></div>
  <div id="form">
    <form action="accept.php" method="post">
      <input type="hidden" id="distance" name="distance">
      <input type="hidden" id="interval" name="interval">
      <input type="hidden" id="startpoi" name="startpoi">
      <input type="hidden" id="despoi" name="despoi">
      <input type="hidden" id="startlat" name="startlat">
      <input type="hidden" id="startlon" name="startlon">
      <input type="hidden" id="deslat" name="deslat">
      <input type="hidden" id="deslon" name="deslon">
      <button class="solute" type="submit" value="Submit">Submit</button>
    </form>
  </div>


</body>

</html>