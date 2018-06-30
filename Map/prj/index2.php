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
          
<?php

    
//    $dbh = new PDO('mysql:host=localhost;dbname=tutorials','root','');
//    if(!$dbh){
//       die('Could not connect'.mysql_error());
//        }   
//    echo 'Connected successfully<br />';
//    
//    $stmt =$dbh->prepare("insert into demo(id,location,latitude,longitude)values(:id,:location,:latitude,:longitude)");
//     echo 'Connected successfully<br />';
//    $id  =  $_POST['id'];
//    $location = $_POST['location'];
//    $latitude = $_POST['latitude'];
//    $longitude = $_POST['longitude'];
//     echo 'Connected successfully<br />';
//    $stmt =$dbh->prepare("insert into demo(id,location,latitude,longitude)values(:id,:location,:latitude,:longitude)");
//    echo 'Connected successfully<br />';
//    $stmt->execute(array(':id'=>$id,':location'=>$location,':latitude'=>$latitude,':longitude'=>$longitude));

   $dbhost="localhost";
   $username = "root";
   $password = "";
   $conn = mysql_connect($dbhost,$username,$password);
   if(!$conn){
       die('Could not connect'.mysql_error());
   }   
   echo 'Connected successfully<br />';
if(isset($_POST['submit'])){   
  $id=$_POST['id'];
  $location=$_POST['location'];
  $latitude=$_POST['latitude'];
  $longitude=$_POST['longitude'];
   
    $sql =  "INSERT INTO Demo ".
               "(id,location, latitude,longitude) "."VALUES ".
               "('$id','$location','$latitude','$longitude')";



   mysql_select_db('TUTORIALS');
          
         $retval = mysql_query( $sql, $conn );
         if(! $retval) {
            die('Could not connect table: ' . mysql_error());
         }
//        while($row=mysql_fetch_array($retval,MYSQL_NUM)){
//            echo "Location:{$row[0]}<br>".
//                    "Longitude:{$row[1]}<br>".
//                            "Latitude:{$row[2]}<br><br><br>";
//        }
//        echo "fetched data succesfully\n";
//        mysql_free_result();
     mysql_close($conn);
    //}
?>
           <form action="<?php $_PHP_SELF ?>" method="POST">
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
                        <td> <input type="text" name="id" id="id" > </td>
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
 
 