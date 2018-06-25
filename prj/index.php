<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA31ZX-T_UeOzNBxPBf3ptu35rvcXqrx0k&libraries=places"></script>
    <script>
       function intialise() {

////////////////////SOURCE//////////////////////////////////

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

///////////////////////DESTINATION//////////////////////////////

         var input1 = document.getElementById('location1');
          
          var autocomplete1 = new google.maps.places.Autocomplete(input1,options);
          google.maps.event.addListener(autocomplete1,'place_changed',function(){
            var place1 = autocomplete1.getPlace();
            document.getElementById('latitude1').value = place1.geometry.location.lat();
            document.getElementById('longitude1').value = place1.geometry.location.lng();
        }) ; 
        }
        google.maps.event.addDomListener(window, 'load', intialise );

//        function intialise(){
//                var map = new google.maps.Map(document.getElementById('map'), {
//          center: {lat: 50.064192, lng: -130.605469},
//          zoom: 3
//        });
//         //map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);
//        var input =document.getElementById('location');
//        var options={
//             types:['(cities)'],
//             componentRestrictions:{country:'in'}};
//         var autocomplete = new google.maps.places.Autocomplete(input,options);
//         
//         //for use of text or data oin map here for Marker
//         var infowindow = new google.maps.InfoWindow();
//        var infowindowContent = document.getElementById('infowindow-content');
//        infowindow.setContent(infowindowContent);
//        var marker = new google.maps.Marker({
//          map: map,//we can also use Geocoding API instead of this
//          anchorPoint: new google.maps.Point(0, -29)
//        });
//        
//        autocomplete.addListener('place_changed', function() {
//          infowindow.close();
//          marker.setVisible(false);
//          var place = autocomplete.getPlace();
//          if (!place.geometry) {
//            // User entered the name of a Place that was not suggested and
//            // pressed the Enter key, or the Place Details request failed.
//            window.alert("No details available for input: '" + place.name + "'");
//            return;
//          }
//          
//                    // If the place has a geometry, then present it on a map.
//          if (place.geometry.viewport) {
//            map.fitBounds(place.geometry.viewport);
//          } else {
//            map.setCenter(place.geometry.location);
//            map.setZoom(17);  // Why 17? Because it looks good.
//          }
//          marker.setPosition(place.geometry.location);
//          marker.setVisible(true);
//
//        var address = '';
//          if (place.address_components) {
//            address = [
//              (place.address_components[0] && place.address_components[0].short_name || ''),
//              (place.address_components[1] && place.address_components[1].short_name || ''),
//              (place.address_components[2] && place.address_components[2].short_name || '')
//            ].join(' ');
//          }
//
//          infowindowContent.children['place-icon'].src = place.icon;
//          infowindowContent.children['place-name'].textContent = place.name;
//          infowindowContent.children['place-address'].textContent = address;
//          infowindow.open(map, marker);
//        });
//        }
    </script>
</head>

<body onload="intialise()">
      
   <?php
//   
//   $dbhost="localhost";
//   $username = "root";
//   $password = "";
//   $conn = mysql_connect($dbhost,$username,$password);
//   if(!$conn){
//       die('Could not connect'.mysql_error());
//   }   
//   echo 'Connected successfully<br />';
//   
//  $id=$_POST['id'];
//  $location=$_POST['location'];
//  $latitude=$_POST['latitude'];
//  $longitude=$_POST['longitude'];
//   
////    $sql =  "INSERT INTO Demo ".
////               "(id,location, latitude,longitude) "."VALUES ".
////               "('$id','$location','$latitude','$longitude')";
//
//// $sql = "delete from Demo where id =''";
//
//$sql="select location,latitude,longitude from Demo";   
//   mysql_select_db('TUTORIALS');
//         $retval = mysql_query( $sql, $conn );
//         if(! $retval) {
//            die('Could not create table: ' . mysql_error());
//         }
//        while($row=mysql_fetch_array($retval,MYSQL_NUM)){
//            echo "Location:{$row[0]}<br>".
//                    "Longitude:{$row[1]}<br>".
//                            "Latitude:{$row[2]}<br><br><br>";
//        }
//        echo "fetched data succesfully\n";
//        mysql_free_result();
//     mysql_close($conn);
   ?>
    
<!--    <form action="<//?php $_PHP_SELF ?>" method="POST">
           <input type="text" name="location" id="location" >
          <div id="map" style="height:100%"></div>
          <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>
    </form>-->
       <form action="<//?php $_PHP_SELF ?>" method="POST">
             <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Location</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <input type="text" id="id" name="id"> </td>
                        <td> <input type="text" name="location" id="location" > </td>
                        <td><input type="text" name="longitude" id="longitude" readonly="true"></td>
                        <td><input type="text" name="latitude" id="latitude" readonly="true"></td>
                    </tr>
                    <tr>
                    <td> <input type="text" id="id1" name="id1"> </td>
                        <td> <input type="text" name="location1" id="location1" > </td>
                        <td><input type="text" name="longitude1" id="longitude1" readonly="true"></td>
                        <td><input type="text" name="latitude1" id="latitude1" readonly="true"></td>
                    </tr>
                    
                </tbody>
                <tr>
                    <input type="Submit" value="Submit">    
                    </tr>
            </table>
        </form> 

</body>

</html>
