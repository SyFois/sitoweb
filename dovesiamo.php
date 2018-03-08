<!DOCTYPE html>
  <html>
  <head>
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">

    
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
    
      imag{
        height: 600px;
      }
       #map {
    height: 600px;
    }

    
    
    body {
      background-image: url('images/sfondo.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      
    }

    nav{
      margin-bottom: 20px;
      background-color: rgba(0,0,0,0.9);
    }
    
  </style>

</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm">
        <?php include ('navbar.php'); ?>
    </div>
    </div>

    <div class="row">
    <div class="col-md-2">
     
    </div>
    <div class="col-md-8">
      <div id="map"></div>
    <script>

      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: {lat: 45.657552, lng: 8.782530}

        });

        var image = 'https://content.mqcdn.com/yogi-cdn/yogi/icons/30x30/start.png';

        var infowindow = new google.maps.InfoWindow({
          content: "<h3>Service For Sign</h3><p>Una realtà giovane e dinamica,con pregresse esperienze nel settore della pubblicità e dei rebranding.</p>",
          maxWidth: 200
        });



        var marker = new google.maps.Marker({
          position: {lat: 45.657552, lng: 8.782530},
          map: map,
          icon: image, 
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });


          
         
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBnCMGOQvSAnDwPA4MFuBtmRjJW0_DRuM&callback=initMap">
    </script>
      
    </div>
    <div class="col-md-2">
      
    </div>
  </div>
</div>

  


  

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>