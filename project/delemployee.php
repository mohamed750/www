<?php
session_start(); 
 $usrname = $_POST['ename'];
  $password1 = $_POST['epassword'];
  $password2 = md5( $password1);
  echo $usrname ; echo $password1;
//step[1]: connect to database
 $connection =mysql_connect ("localhost","root","");  
//step[2]: selecting the database
$db = mysql_select_db( "land_registeration", $connection) ;
//step[3]: execute query
//check if username registered on table login or not
  $query = "delete from employee where  username = '$usrname' and pass = '$password2'";
  
  mysql_query($query) or die(mysql_error());
  
echo'<script> alert ("OK");</script>';
header('Location: http://localhost/project/manager.php');
mysql_close($connection);
?>