<?php 
include_once('header.php');
?>
<footer>
<?php
echo'
<a href="index.php">Index</a> | ';
    if(func::checkLoginState($dbh)) 
        echo'<a href="logout.php">Logout</a>|<a href="admin.php">Admin</a> |'; 
    else 
        echo'<a href="login.php">Login</a>'; 
?>
</footer>

</body>
</html>
