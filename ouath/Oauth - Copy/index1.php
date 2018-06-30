<?php

class Login
{
    private $_id;
    private $_username;
    private $_password;
    private $_passwd5;
    private $_errors;

    private $_access;
    private $_login;
    private $_token;


    public function __construct()
    {

        // DEfault Variable
        $this->_errors = array();
        $this->_login = isset($_POST['login'])?1:0;
        $this->_access=0;
        $this->_token= $this->filter($_POST['token']);

        $this->_id=0;
        $this->token=$_POST['token'];
        
        $this->_username = ($this->_login)?$this->filter($_POST['username']) :$this->filter($_SESSION['username']); //store in session
        $this->_password = ($this->_login)?$this->filter($_POST['password']) :$this->filter($_SESSION['password']);
        $this->_passwd5 = ($this->_login)?md5($this->password) : $_SESSION['password'];
    }

    public function valid_token()
    {
        return ($this->token == $_SESSION['token'])?1:0;
    }
    public function isLoggedIn()
    {
        ($this->login) ? $this->verifyPost():$this->verifySession();
        return $this->_access;
    }
    public function filter($var)
    {
        return preg_replace('/^[a-zA-Z0-9]/','',$var);
    }

    public function verifyPost()
    {
        // try{
        //         if( !$this->IsTokenValid())
        //         throw new Exception('Invalid Form Subbmission');
        //         if( !$this->IsDataValid())
        //         throw new Exception('Invalid Form Data');
        //         if( !$this->verifyDatabase())
        //         throw new Exception('Invalid User/password');
        //         if( !$this->valid_token())
        //         throw new Exception('Invalid Token');
        //         $this->access=1;
        //         $this->registerSession();
        // }
        // catch(Exception $e)
        // {
        // $this->_errors[] =$e->getMessage();
        // }
        if($this->valid_token()  &&  $this->valid_data() && $this->verifyDatabase())
        {
        $this->_access=1;
        $this->registerSession();   
        }
    }
    public function verifySession()
    {
        if($this->sessionExist() && $this->verifyDatabase())
        $this->access=1;
    }

    public function verifyDatabase()
    {
        mysql_connect("localhost","root","") or die(mysql_error());
        mysql_select_db("example") or die(mysql_error());
        $data= mysql_query("select ID from users where username ='($this->_username)' AND password='($this->_username)'");

        if(mysql_num_rows($data))
        {
            list($this->_id)=@array_values(mysql_fetch_assoc($data));
            return true;
        }
    }
    public function isDatavalid()
     {
         return (preg_match('/^[a-zA-Z0-9](5,12)$/',$this->_username) && preg_match('/^[a-zA-Z0-9](5,12)$/',$this->_password))?1:0;
     }
     public function isTokenValid()
     {
            return (!isset($_SESSION['token']) ||$this->_token != $_SESSION['token'])?0:1;
     }
     public function registerSession()
     {
         $_SESSION['ID'] = $this->_id;
         $_SESSION['username'] = $this->_username;
         $_SESSION['password'] = $this->_passwd5;
     }

     public function sessionExist()
     {
            return(isset($_SESSION['username'])  && isset($_SESSION['password']))?1:0;
     }
     public function showErrors()
     {
            echo "<h3>Errors</h3>";
            foreach($this->_errors as $key=>$value)
            echo $value."<br>";
     }
}
?>