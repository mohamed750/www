<?php
session_start();
$id=$_SESSION['id'];
 $empname = $_POST['empname'];
  $emppass = $_POST['emppass'];
$connection =mysql_connect ("localhost","root","");
//step[2]: selecting the database
$db = mysql_select_db( "land_registeration", $connection) ;
//step[3]: execute query
  
  
  mysql_close($con);
?>