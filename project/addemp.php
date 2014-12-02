<?php
session_start();

 $empname = $_POST['empname'];
  $emppass = $_POST['emppass'];
  $emppass = md5( $emppass);
$connection =mysql_connect ("localhost","root","");
//step[2]: selecting the database
$db = mysql_select_db( "land_registeration", $connection) ;
//step[3]: execute query
  $result = mysql_query ("
  INSERT INTO employee (username, pass) VALUES ( '$empname', '$emppass');");

echo'<script> alert ("OK");</script>';


$_SESSION['username'] = $empname;
$_SESSION['pass'] = $emppass;

  
  mysql_close($connection);
  header('Location: http://localhost/project/manager.php');
?>