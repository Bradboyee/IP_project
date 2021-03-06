<?php
session_start();
?>
<!DOCTYPE HTML>
  <html>
    <head>
        <meta charset="UTF-8">
        <title>Routing Map Sample | Longdo Map</title>
		<link rel="stylesheet" href="./css/map.css">

        <script type="text/javascript" src="https://api.longdo.com/map/?key=65b54f236809b1688232cb43b14bff84    "></script>
         <script>
           
          function init() {
            map = new longdo.Map({
              placeholder: document.getElementById('map')   
            });
            map.Route.placeholder(document.getElementById('result'));
            map.location(longdo.LocationMode.Geolocation);
            map.Route.add(new longdo.Marker({ lon: '<?php echo $_SESSION['startlon'] ;?>', lat: '<?php echo $_SESSION['startlat'] ;?>' },
                { 
                    title: 'Start',  
                }
            ));
            map.Route.add(new longdo.Marker({ lon: '<?php echo $_SESSION['deslon'] ;?>', lat: '<?php echo $_SESSION['deslat'] ;?>' },
                { 
                    title: 'Goal',  
                }
            ));
            var marker = new longdo.Marker({ lon: 100.193970, lat: 16.756558 },{title: 'Driver',icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 },
          }});
            map.Overlays.add(marker);
            map.Route.search();
            map.Route.search();

          }

        </script>
        
    </head>
    <body onload="init();">
        <div id="map"></div>
        <div id="result"></div>

        <form action="addreview.php" method="post">
        <textarea name="review"  placeholder=" Review Here "></textarea>
        <select class="select" name="score">
          <?php for ($i = 0; $i <= 5; $i++) : ?>
              <option value='<?= $i; ?>'><?= $i; ?></option>
          <?php endfor; ?>
      </select>
      <button class="solute" type="submit" value="Submit">Submit</button>
        </form>
    </body>
  </html>