<?php
 
  $dbhost="localhost";
  $username = "root";
  $password = "";
  $conn = mysqli_connect($dbhost,$username,$password,'TUTORIALS');
  if(!$conn){
      die('Could not connect'.mysqli_connect_error($conn));
  }   
  //echo 'Connected successfully<br />';
  
  if(isset($_POST['submit'])){
  
//  $location = $_POST['location'];
//   $latitude=$_POST['latitude'];
//    $longitude=$_POST['longitude'];
  $id = $_POST['id'];
//$id = 6;
   

$sql ="select location,latitude,longitude from Demo where id='$id'"; 

  // mysql_select_db('');
        $retval = mysqli_query( $conn,$sql);
        if(!$retval) {
           die('Could not create table: ' . mysqli_error());  
        }
        while($row=mysqli_fetch_array($retval)){
            echo "Location:{$row[0]}<br>".
                    "Longitude:{$row[1]}<br>".
                            "Latitude:{$row[2]}<br><br><br>";
        }
        echo "fetched data succesfully\n";
       // mysql_free_result();

     //mysql_close($conn);
    }
   
   ?>