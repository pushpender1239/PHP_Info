<?php include_once("header.php");?>
<section class="parent">
<div class="child">
<?php

if(func::checkLoginState($dbh))
{
    header("location:index.php");
}
    
if(isset($_POST['username']) && isset($_POST['password']))
{

        $query = "select * from users where user_username = :username AND user_password = :password";
        $username = $_POST['username'];
        $password = $_POST['password'];
      
        $stmt = $dbh->prepare($query);
        $stmt->execute(array(':username'=>$username,':password'=>$password));// what is this ??
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
       
        if($row['user_id']>0)
        {         
                $userid=$row['user_id'];
            //check sessions_flag  and increament
               $queryInsert ="update sessions set sessions_flag = sessions_flag + 1 where sessions_userid = '$userid' ";
               $stmtInsert=$dbh->prepare($queryInsert);
               $stmtInsert->execute();
              
            //////////End session_flag increament/////////////////////
            func::createRecord($dbh,$row['user_username'],$row['user_id']);
            header("location:index.php");
            //echo func::createString(32);
        }
            
            
    }
    else
    {
        echo '
            <form action="login.php" method = "POST">
            <label>Username</label><br />
            <input type = "text" name ="username"><br />
            <label>Password</label><br />
            <input type = "password" name ="password"><br />
            <input type= "submit" value = "login">
            </form>
        ';

}


?>
</div>
</section>
<?php include_once('footer.php'); ?>