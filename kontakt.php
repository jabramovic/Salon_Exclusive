<!doctype_html>
<html>
<head>
    <?php include_once "head.php" ?>
  
</head>
<body>
    
    <?php include_once "header.php" ?>
    
    <div class="container">
      
        
        <?php include_once "logo.php" ?>
        
        <div class="content">
            <div class="content-image">
            
                <div id="map"></div>
                
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m11!1m3!1d1215.111993960734!2d18.69998935901527!3d45.074348639813!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1shr!2shr!4v1520198489991" width="424" height="400" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            
                API = AIzaSyCp34FCgxVZ5wUv1MDJAbgzSwwcdWy-1qQ
            -->
            </div>
            
            
            <div class="content-text">
                <p>Kontakt
                    <br>
                Informacije</p>
                <h6>EXCLUSIVE NAIL AND BEAUTY STUDIO, obrt za ugradnju noktiju
                <br>
                vl. Željka Lukić
                    <br><br>
                Ulica dr. Franje Račkog 47/1,
                <br>
                Županja</h6>
                
                <span class="kontakt">Kontakt broj : <a href="tel:+385-091-509-8977">091/509-8977</a>
                    <br>
                    <br>
                    E-mail : <a href="mailto:zeljka.lukic1@gmail.com"> zeljka.lukic1@gmail.com</a>
                </span>
                
                
                
                
            </div>
        
        </div>
        
        <?php include_once "footer.php" ?>
        
    </div>
    
    <script>

      function initMap() {
        var myLatLng = {lat: 45.0744948, lng: 18.6999599};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Ovdje smo!'
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCp34FCgxVZ5wUv1MDJAbgzSwwcdWy-1qQ&callback=initMap">
    </script>
    
</body>
</html>