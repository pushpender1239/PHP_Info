<?php
include_once('header.php');
func::deleteCookie($dbh);
header('location:login.php');
?>