<?php 
include_once('header.php');
?>
<?php 

if(!func::checkLoginState($dbh))
{
    header("location:login.php");
    exit();
}
?>

<section>
    <div class="child">
        <p>Hello<?php echo $_COOKIE['username']?>
        and welcome to your private admin!
        </p>

        <ul>
            <li>Manage</li>
            <li>Finance</li>
            <li>Economy</li>
            <li>History</li>
        </ul>
    </div>
</section>
<?php 
include_once('footer.php');
?>