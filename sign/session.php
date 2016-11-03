<?php
error_reporting(0);

session_start();
if(isset($GET['logout'])){
  session_unset();
  session_destroy();
}

$id = preg_replace('#[^0-9]#i', '', $_SESSION["id"]);
$uname = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["uname"]); 
$pass = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["pass"]);
 
include "config.php"; 
$sql = mysql_query("SELECT * FROM users WHERE id='$id' AND uname='$uname' AND pass='$pass'"); 
?>