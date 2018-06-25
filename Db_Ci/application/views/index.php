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
        }
        google.maps.event.addDomListener(window, 'load', intialise );

    </script>
</head>

<body onload="intialise()">
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
                    
                </tbody>
                <tr>
                    <input type="Submit" value="Submit">    
                    </tr>
            </table>
        </form>

</body>

</html>
