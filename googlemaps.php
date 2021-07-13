<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Belajar Info windows</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    
    <!-- elemen untuk menampilkan peta -->
    <div id="map"></div>
    
    
    <script>

      function initMap() {
        
        // membuat objek untuk titik koordinat
        var lombok = {lat: -8.5830695, lng: 116.3202515};
        
        // membuat objek peta
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: lombok
        });

        // mebuat konten untuk info window
        var contentString = '<h2>Hello Dunia!</h2>';

        // membuat objek info window
        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          position: lombok
        });
        
        // membuat marker
        var marker = new google.maps.Marker({
          position: lombok,
          map: map,
          title: 'Pulau Lombok'
        });
        
        // event saat marker diklik
        marker.addListener('click', function() {
          // tampilkan info window di atas marker
          infowindow.open(map, marker);
        });
        
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYgd6G3F2DTPax4Mg4s7shnVbUYiRRx7g&callback=initMap">
    </script>
  </body>
</html>