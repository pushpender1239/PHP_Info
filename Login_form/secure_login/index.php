<?php
session_start();
include_once("header.php");

?>
<section class="parent">
<div class="child">
<?php 

    if(!func::checkLoginState($dbh))
    {
        header("location:login.php");
        exit();
    
    }
    header("location:../egyanshala_test_papers/default.php");
        //echo 'Welcome '. $_SESSION['username'].'!';


?>
</div>
</section>
<?php
include_once("footer.php");
?>