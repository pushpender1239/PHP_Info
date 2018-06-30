<!--// session_start();
// $token =$_SESSION['token']=md5(uniqid(mt_rand(),true));

 //if( verifyDatabase(username,password))  {
//   {  return "working";
  
    // $arrRtn['user'] = 'Chuck Norris'; //Just return the user name for reference
    // $arrRtn['token'] = bin2hex(openssl_random_pseudo_bytes(8)); //generate a random token

    // $tokenExpiration = date('Y-m-d H:i:s', strtotime('+1 hour'));//the expiration date will be in one hour from the current moment

    // CUser::updateToken($username, $arrRtn['token'], $tokenExpiration); //This function can update the token on the database and set the expiration date-time, implement your own
    // return json_encode($arrRtn);
// <//input type="hidden" name = "token" value="<//?= $token;?>" /> 
//} -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>


<div id="userForm" method="GET" >

<table>
<tr>
    <td>Username</td>
    <td><input type="text" name="username" id="username"/></td>

</tr>
<tr>
    <td>Password</td>
    <td><input type="password" name="password" id="password"/></td>
</tr>

</table>

<input type="submit" name ="login" id="sbmt" value = "Log In" />
</div>

<div id="result">

</div>


<script>

$('#sbmt').click(function(){
var user=$('#username').val();
var pass=$('#password').val();

jQuery.ajax({                     
        url: "http://localhost/Oauth2.0/database.php",                     
        method: 'POST',                     
        dataType: 'json',
        
        data: {                                                  
            username: user,                         
            password: pass                                 
        },
        error: function(){
                alert('errors');
            },                     
        success: function (data)                     
        {  
           // console.log(data['token'],data['user']);               
            alert(data['token']); 
        //     if(data[0]==user)////////////////////doubt here ??????????????///////////////
        //    {// $('#result').html(data);                              
        //      console.log("resp.....",data,user);
          
        //    }
        }                 
    }); 
});


</script>