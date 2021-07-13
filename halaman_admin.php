<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title> 
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYgd6G3F2DTPax4Mg4s7shnVbUYiRRx7g&callback=initMap"></script>
	
	<script>
		function initMap() {
			var map = new google.maps.Map(document.getElementById('map'), {
			center: new google.maps.LatLng(-7.550676,110.828316),
			zoom:12
			});
		}
	</script>
</head>
  <body>

  <div>tes aja</div>
  <div id="map" style="width:100%;height:600px;"></div>
  

    
  </body>
</html>