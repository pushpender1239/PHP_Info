<?php
    mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("example") or die(mysql_error());
     
    $user=$_GET['username'];
    $pass=$_GET['password'];
    $data= mysql_query("select username,password,name from tbl_user where username ='$user'");
    $values = mysql_fetch_array($data);
    //var_dump($values);
    if($values[0] == $user && $values[1] ==$pass)
    {
        //if(get_token($user)){
        //die('alert');
        //echo "success";
     //   get_token($user);
     $arrRtn['user'] = $user;
     
      $arrRtn['token'] = bin2hex(openssl_random_pseudo_bytes(8)); 
      $tokenExpiration = date('Y-m-d H:i:s', strtotime('+1 hour'));
      updateToken($username, $arrRtn['token'], $tokenExpiration); //here CUser is class name scope resolution
    echo  json_encode($arrRtn);
      //  } 
    }
   
    // while($row=mysql_fetch_assoc($data))
    // {
    //     echo "UserName:{$row['name']}<br>";
    // }
 
    //function get_token($user){
        // $arrRtn['user'] = $user;
        // $arrRtn['token'] = bin2hex(openssl_random_pseudo_bytes(8));
        // $tokenExpiration = date('Y-m-d H:i:s', strtotime('+1 hour'));
      // return true;
       // alert($user);
        
        //  $arrRtn['user'] = username; //Just return the user name for reference

        //  $arrRtn['token'] = bin2hex(openssl_random_pseudo_bytes(8)); //generate a random token
        
        //  $tokenExpiration = date('Y-m-d H:i:s', strtotime('+1 hour'));//the expiration date will be in one hour from the current moment
        
        //CUser::updateToken($username, $arrRtn['token'], $tokenExpiration); //This function can update the token on the database and set the expiration date-time, implement your own
        // return json_encode($arrRtn);
   // }

   function updateToken($username,$token,$tokenExpiration)
   {
    mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("example") or die(mysql_error());
    $data= mysql_query("update from tbl_user set token = '$token' and token_expire='$tokenExpiration' where username ='$username'");
    $values = mysql_fetch_array($data);

   }
    
?>