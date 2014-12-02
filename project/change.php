<?php
session_start(); 
 $password1 = $_POST['pass1'];
  $pass3 = $_POST['pass2'];
  $pass2 =  $_POST['pass3'];
  
  if($pass3 === $pass2)
  {
	$password = $pass2 ;
  }
  else {
	//echo'<script> alert("password does not match");</script>';
	//header('Location: http://localhost/project/manager.php');
}
  $password2 = md5( $password);
  $password4 = md5($password1);
//step[1]: connect to database
 $connection =mysql_connect ("localhost","root","");  
//step[2]: selecting the database
$db = mysql_select_db( "land_registeration", $connection) ;
mysql_query("SET NAMES 'utf8'");
$query="select id from admin where pass=$password4";  
  $result=mysql_query($query) or die(mysql_error());
  $row= mysql_fetch_array($result);
  echo $row[0];
//step[3]: execute query
//check if username registered on table login or not
mysql_query("SET NAMES 'utf8'");
$query="UPDATE admin SET pass='$password2' WHERE id='$id'";  
  mysql_query($query) or die(mysql_error());
  
//echo'<script> alert("OK");</script>';
//header('Location: http://localhost/project/manager.php');
mysql_close($connection);
?>