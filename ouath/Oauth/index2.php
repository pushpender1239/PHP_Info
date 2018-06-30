<?
session_start();
include('/index1.php');
$login =new Login();
if($login->IsLoggedIn())
echo "Member Area";
else
echo "Front page";
?>