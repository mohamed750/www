<?php

session_start();

$prenum    =$_POST['prenum'];
$pretype   =$_POST['pretype'];
$day3  =$_POST['day3'];
$predata	 =$_POST['predata'];

 $connection =mysql_connect ("localhost","root","");  
$id=$_SESSION['id'];
$state    =$_POST['save'];
if($state=="Save"){

mysql_query("SET NAMES 'utf8'");
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
       mysql_query("INSERT INTO land_history(land_id,proc_no, proc_type ,record_date , proc_data  ) VALUES ('$id','$prenum', '$pretype','$day3','$predata')")
					or die(mysql_error());
                  
  
  }
elseif($state=="Update") {
$connection =mysql_connect ("localhost","root",""); 
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
$id=$_SESSION['id'];
mysql_query("SET NAMES 'utf8'");
$query="UPDATE land_history SET proc_no='$prenum',proc_type='$pretype',record_date='$day3',proc_data='$predata' WHERE id='$id'";
	mysql_query($query);
}
elseif($state=="Delete") {
$id=$_SESSION['id'];
$connection =mysql_connect ("localhost","root",""); 
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
mysql_query ("delete from land_history where  land_id=$id");
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