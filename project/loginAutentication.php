<?php
session_start();
$connection =mysql_connect ("localhost","root","");
//step[2]: selecting the database
$db = mysql_select_db( "land_registeration", $connection) ;
 if(isset($_POST['name'])and isset($_POST['password'])){
	$usrname=$_POST['name'];
	$password1=$_POST['password'];
	$type=$_POST['manager'];
	$_SESSION['manager']=$type;
	 $password2 = md5( $password1);
	 $_SESSION["user_name"]=$usrname;
	$_SESSION["password"]=$password2;
	//echo "$type";
	}
	else
	{$usrname=null;
	$password1=null;
	}
  if  ($type==123)
  {
 
 
  $check = false;
  mysql_query("SET NAMES 'utf8'");
  $query = "SELECT * FROM admin where username = '".$usrname."'and pass = '".$password2."'";
  
  $result = mysql_query($query) or die(mysql_error());
  
  while($row = mysql_fetch_array($result))
  {
  
  $check = true;
  
  }
  if($check)
  {
  $_SESSION['loged']='manager';
	header('Location: http://localhost/project/manager.php');
  }
  else
  {
  $_SESSION['msgerr']="بيانات دخول  خاطئة";
  	header('Location: http://localhost/project/project.php');
	
  }
  
  
  }
  
 else   if  ($type==1234)
  {
  $check = false;
  
  $query = "SELECT * FROM employee where username = '".$usrname."' and pass = '".$password2."'";
  
  $result = mysql_query($query) or die(mysql_error());
    //echo 'hi22';

  while($row = mysql_fetch_array($result))
  {
  
  $check = true;
  echo 'hi2';
  }
  if($check)
  {
	$_SESSION['logedemp']='emp';
	 header('Location: http://localhost/project/employee.php'); 
	
	}
  
  else
  {
  	$_SESSION['msgerr']="بيانات دخول  خاطئة";

  	header('Location: http://localhost/project/project.php');

  }
  
  
  } 

 mysql_close($connection);
  
?>