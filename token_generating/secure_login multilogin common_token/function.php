<?php

$flag = 0;

class func
{
    
    public static function checkLoginState($dbh)
    {
        
        if(!isset($_SESSION) ) //change
        {
            session_start();
        }
        if(isset($_COOKIE['userid'])  &&  isset($_COOKIE['token']) && isset($_COOKIE['serial']))
        {
            $query  ="select * from sessions where sessions_userid = :userid AND sessions_token=:token AND sessions_serial = :serial;";
                
                $userid=$_COOKIE['userid'];
                $token=$_COOKIE['token'];
                $serial=$_COOKIE['serial'];
               
               $stmt = $dbh->prepare($query);
                $stmt->execute(array(':userid'=>$userid,':token'=>$token,':serial'=>$serial));// what is this ??
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                
                if ($row['sessions_userid'] > 0)
                {
                    if(
                        $row['sessions_userid'] == $_COOKIE['userid'] &&
                        $row['sessions_token']  == $_COOKIE['token'] &&
                        $row['sessions_serial'] == $_COOKIE['serial'] 
                    )
                    {
                        if(
                            $row['sessions_userid'] == $_SESSION['userid'] &&
                            $row['sessions_token']  == $_SESSION['token'] &&
                            $row['sessions_serial'] == $_SESSION['serial'] 
                        )   
                        {
                            return true;
                        }
                        else
                        {
                            func::createSession($_COOKIE['username'],$_COOKIE['userid'],$_COOKIE['token'],$_COOKIE['serial']);
                            return true;
                        }
                    }
                
            }
        }
    }

    public static function createRecord($dbh,$user_username,$user_id)
    {
         
        //if user has already login in diffrent browser...
        $queryFlag="select * from sessions where sessions_userid = '$user_id'";
        $stmtFlag = $dbh->prepare($queryFlag);
        $stmtFlag->execute();
        $rowFlag = $stmtFlag->fetch(PDO::FETCH_ASSOC);
        
        //calling only if already token and session
        if($rowFlag['sessions_flag'] >1)
        {
           echo "hello ".$user_username,$user_id,$rowFlag['sessions_token'],$rowFlag['sessions_serial'];
           
          
            func::createCookie($user_username,$user_id,$rowFlag['sessions_token'],$rowFlag['sessions_serial']);
            func::createSession($user_username,$user_id,$rowFlag['sessions_token'],$rowFlag['sessions_serial']);

        }
         //////////////////////////////End of flag validity of diffrent browser///////////
        else
        { 
        $query='INSERT INTO sessions(sessions_userid, sessions_token, sessions_serial, sessions_date) VALUES (:user_id,:token,:serial,"24/08/2018")';
  //  $stmt=$dbh->prepare();  
        $dbh->prepare('delete from sessions where sessions_userid=:sessions_userid;')->execute(array(':sessions_userid'=>$user_id)); 
       
        $token = func::createString(32);
        $serial = func::createString(32);
        
        func::createCookie($user_username,$user_id,$token,$serial);
        func::createSession($user_username,$user_id,$token,$serial);
      
        $stmt=$dbh->prepare($query);
        $stmt->execute(array(':user_id' => $user_id,':token' => $token,':serial' => $serial));
        
        }
        
       
    }

    public static function createCookie($user_username,$user_id,$token,$serial)
    {
         
        setcookie('username',$user_username,time()+(80),"/");
        setcookie('userid',$user_id,time()+(80),"/");//30 days and for complete range ie. "/"
        setcookie('token',$token,time()+(80),"/");
        setcookie('serial',$serial,time()+(80),"/");
    }
    public static function deleteCookie($dbh)
    {
        ///////////////////////condition of flag value 1 or last logout///////////////
        $userid = $_COOKIE['userid'];
        // $queryFlag = "select * from sessions  where sessions_userid='$userid'";
        // $stmt = $dbh->prepare($queryFlag);
        // $stmt->execute();
        // $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
        
        //check sessions_flag  and decreament on logout
        $queryInsert ="update sessions set sessions_flag = sessions_flag - 1 where sessions_userid = '$userid' ";
        $stmtInsert=$dbh->prepare($queryInsert);
        $stmtInsert->execute();
       
        ///////End session_flag decreament/////////////////////
     
     
         //we can also add session_destroy() here
        
            setcookie('user_username','',time() -1,"/");
            setcookie('user_id','',time() -1,"/");
            setcookie('token','',time() -1,"/");
            setcookie('serial','',time() -1,"/");
        
    }
    public static function createSession($user_username,$user_id,$token,$serial)
    {
        
        if(!isset($_SESSION))
        {
            session_start();
        }
        $_SESSION['username'] = $user_username;
        $_SESSION['userid'] = $user_id;
        $_SESSION['token'] = $token;
        $_SESSION['serial'] = $serial;
      
    }
    public static function createString($len)
    {
        $string="1fgv2v2hv3hhb3hjbjnv4hvb4jkb4j4bj4b5vhbhj6bj6v7bj7b7jACSGCXVJVXK";
        return substr(str_shuffle($string),0,30);
        // $s='';
        // $r_new='';
        // $r_old='';
        // for($i= 1;$i<$len;$i++)
        // {
        //     while($r_old == $r_new)
        //     {
        //         $r_new = rand(0,60);
        //     }
        //     $r_old=$r_new;
        //     $s = $s.$string[$r_new];
        // }
       // return $s;
    }


    
    
    
}    
   
?>