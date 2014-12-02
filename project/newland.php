<?php
session_start();


$city    =$_POST['city1'];
$hy   =$_POST['hy1'];
$sq  =$_POST['sq'];
$misaha	     =$_POST['misaha'];
$landnum	 =$_POST['landnum'];
$owntype     =$_POST['owntype'];
$objective   =$_POST['objective'];
$degree      =$_POST['degree'];
$day1	     =$_POST['day1'];
$contract_no =$_POST['contnum'];
$type	     =$_POST['type'];
$day2	     =$_POST['day2'];
$price	     =$_POST['price'];
$notes	    =$_POST['notes'];
 


 $connection =mysql_connect ("localhost","root","");  

//echo $city.$hy .$sq .$misaha .$type1 .$objective .$degree .$day1 .$type .$day2 .$price .$notes;
$state    =$_POST['save'];
if($state=="Save"){
mysql_query("SET NAMES 'utf8'");
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
                    mysql_query("INSERT INTO land(city, hy ,block , area , land_number , ownershiptype , purpose	, class	, reg_date	, cont_no	, time_type	, cont_date	, rent_year,note ) VALUES ('$city', '$hy','$sq','$misaha','$landnum','$owntype', '$objective', '$degree', '$day1', '$contract_no','$type', '$day2', '$price','$notes')")or die(mysql_error());
					
  $query ="select id from land where cont_no = '".$contract_no."'";
	$result=mysql_query($query);
	while($row = mysql_fetch_array($result))
  {
  
	$land_id=$row[0];
  
  }
  $_SESSION['id']=$land_id;
  }
  //'{mysql_real_escape_string()}'
elseif($state=="Update") {
$id=$_SESSION['id'];


mysql_query("SET NAMES 'utf8'");

 $connection =mysql_connect ("localhost","root",""); 
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
$query="UPDATE land SET city='$city',hy='$hy',block='$sq',area='$misaha',land_number='$landnum',ownershiptype='$owntype',purpose='$objective',class='$degree',reg_date='$day1',cont_no='$contract_no',time_type='$type',cont_date='$day2',rent_year='$price',note='$notes' WHERE id='$id'";
	mysql_query($query,$connection);
	
	//include('newland.php');
}
elseif($state=="Delete") {
 $connection =mysql_connect ("localhost","root",""); 
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
$id=$_SESSION['id'];
mysql_query ("delete from land where id = $id");
header('Location: http://localhost/project/employee.php');
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