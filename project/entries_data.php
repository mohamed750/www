<?php

session_start();

$owner1    =$_POST['owner1'];
$day7    =$_POST['day7'];
$type1      =$_POST['type1'];
$ownsize3     =$_POST['ownsize3'];
$size2    =$_POST['size2'];
$price2      =$_POST['price2'];
$info1     =$_POST['info1'];


 $connection =mysql_connect ("localhost","root","");  

//echo $city.$hy .$sq .$misaha .$type1 .$objective .$degree .$day1 .$type .$day2 .$price .$notes;
$id=$_SESSION['id'];
$state    =$_POST['save'];
if($state=="Save"){
mysql_query("SET NAMES 'utf8'");
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
                    mysql_query("INSERT INTO entries_data(land_id,owner, date ,type , own_area ,ent_area, entry_value , data ) VALUES ('$id','$owner1','$day7','$type1','$ownsize3','$size2', '$price2', '$info1')")or die(mysql_error());
                  
  
  }
elseif($state=="Update") {
$connection =mysql_connect ("localhost","root",""); 
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
 
$id=$_SESSION['id'];
mysql_query("SET NAMES 'utf8'");
$query="UPDATE entries_data SET owner='$owner1',date='$day7',type='$type1',own_area='$ownsize3',ent_area='$size2',entry_value='$price2',data='$info1' WHERE id='$id'";
	mysql_query($query);
}
elseif($state=="Delete") {
$id=$_SESSION['id'];

$connection =mysql_connect ("localhost","root",""); 
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
mysql_query ("delete from entris_data where  land_id = $id");

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