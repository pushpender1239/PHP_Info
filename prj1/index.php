<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA31ZX-T_UeOzNBxPBf3ptu35rvcXqrx0k&libraries=places"></script>
    <script>
       function intialise() {
          var input = document.getElementById('location');
          var options={
              types:['(cities)'],
              componentRestrictions:{country:'in'}};
          var autocomplete = new google.maps.places.Autocomplete(input,options);
          google.maps.event.addListener(autocomplete,'place_changed',function(){
            var place = autocomplete.getPlace();
            document.getElementById('latitude').value = place.geometry.location.lat();
            document.getElementById('longitude').value = place.geometry.location.lng();
        }) ; 
        
        google.maps.event.addDomListener(window, 'load', intialise );
}


          function initMap(lati,longi) {

              
              console.log('woekkd');
              var lati =parseFloat(lati);
              var longi=parseFloat(longi);
              console.log(lati+"-"+longi);
             
            var uluru = {lat: lati, lng: longi};
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: uluru
            });
            
            var contentString = '<strong>FitIndia Trust</strong>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            
            var ico='http://localhost/prj1/marker.jpg';
            var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            title: 'FitIndia Trust'
           //icon: ico
           
            });
            console.log("reaching",marker);
            marker.setAnimation(google.maps.Animation.BOUNCE);
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
            console.log("marker..",marker);
        }
 
    </script>

     </head>

<body onload="intialise()">


<!-- for core programing including way NOT FOR  CI -->
<?php include 'database.php';?>
 

    
    <form action="" method="POST">
         <input type="text" name="id" id="id" ><br><br>
       
        <!--   <input type="text" name="location" id="location" ><br><br>
            <input type="text" name="longitude" id="longitude" readonly="true"><br><br>
           <input type="text" name="latitude" id="latitude" readonly="true"><br><br>
        -->
         <input type="submit" name="submit" value="Submit" onclick=""> 
         
    </form>
    <div id="map"></div>
</body>

</html>
