<?php

session_start();

$day8    =$_POST['day8'];
$reportaddress    =$_POST['reportaddress'];
$subject      =$_POST['subject'];

 $connection =mysql_connect ("localhost","root","");  
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());

//echo $city.$hy .$sq .$misaha .$type1 .$objective .$degree .$day1 .$type .$day2 .$price .$notes;

$state    =$_POST['save'];
if($state=="Save"){

           mysql_query("INSERT INTO reports(report_date,readdress, body  ,isnew) VALUES ('$day8','$reportaddress','$subject','1')")or die(mysql_error());
                  
  
  }
elseif($state=="Update") {
 $connection =mysql_connect ("localhost","root","");  
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
//mysql_query("UPDATE `reports` SET `report_date`='$day8',`readdress`='$reportaddress',`body`='$subject',`report_id`=[value-4] WHERE 1
}
elseif($state=="Delete") {
 $connection =mysql_connect ("localhost","root","");  
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());

}
  mysql_close($connection);
 

  $maneger1 =$_SESSION['manager'];
  if(strcmp($maneger1,"123")==0){
		header('Location: http://localhost/project/manager.php');
}
else {
      		header('Location: http://localhost/project/employee.php');

     }
	
?>