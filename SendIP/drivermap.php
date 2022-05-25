<!DOCTYPE HTML>
  <html>
    <head>
        <meta charset="UTF-8">
        <title>Routing Map Sample | Longdo Map</title>
		<link rel="stylesheet" href="./css/map.css">

        <script type="text/javascript" src="https://api.longdo.com/map/?key=65b54f236809b1688232cb43b14bff84"></script>
        <script>
          function init() {
            map = new longdo.Map({
              placeholder: document.getElementById('map')
            });
            map.Route.placeholder(document.getElementById('result'));
            map.location(longdo.LocationMode.Geolocation);
            map.Route.add(new longdo.Marker({ lon: 100.196161, lat: 16.753077 },
                { 
                    title: 'Start', 
                    detail: 'Customer Here' 
                }
            ));
            map.Route.add(new longdo.Marker({ lon: 100.200603, lat: 16.764994 },
                { 
                    title: 'Destination', 
                    detail: 'Goal' 
                }
            ));
            map.Route.search();
          }
          
        </script>
    </head>
    <body onload="init();">
        <div id="map"></div>
        <div id="result"></div>

        <form action="addproblem.php" method="post">
        <textarea name="problem"  placeholder=" Write your problem Here "></textarea>
      <button class="solute" type="submit" value="Submit">Submit</button>
        </form>
    </body>
  </html>