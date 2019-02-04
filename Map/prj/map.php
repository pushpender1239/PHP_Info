<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 50%;
        width:50% ;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA31ZX-T_UeOzNBxPBf3ptu35rvcXqrx0k&libraries=places" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      function intialise(){
          var input = document.getElementById('location');
          var options = {  //for all country
           types: ['geocode'] //this should work !
            };
          var autocomplete = new google.maps.places.Autocomplete(input,options);
          google.maps.event.addListener(autocomplete,'place_changed',function(){
          var place = autocomplete.getPlace();
         
          document.getElementById('latitude').value = place.geometry.location.lat();
          document.getElementById('longitude').value = place.geometry.location.lng();
      // for map only
           map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: place.geometry.location.lat(), lng: place.geometry.location.lng() },
          zoom: 8
           }) ;
        });
        }
        // google.maps.event.addDomListener(window, 'load', intialise );
      
    </script>
   

</head>

<body onload="intialise()">
         <div id="map"></div>
  
	<form method="POST">
            <tr> 
                        <td> <input type="text" name="location" id="location" > </td>
                        <td><input type="text" name="longitude" id="longitude" readonly="true"></td>
                        <td><input type="text" name="latitude" id="latitude" readonly="true"></td>
                        
            </tr>
	</form>
      <script type="text/javascript">
        // $('#longitude').change(function(){
        //   // var long = $('#longitude').val();
        //   // alert(long);
        //    var companyList = $("#longitude").autocomplete({ 
        //   change: function() {
        //   alert('changed');
        //   }
        // });
        //    companyList.autocomplete('option','change').call(companyList);
        // });
      </script>
</body>

</html>
