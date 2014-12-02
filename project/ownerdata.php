<?php
session_start();


$ownwer    =$_POST['ownwer'];
$gender   =$_POST['gender'];
$day4  =$_POST['day4'];
$peper	 =$_POST['peper'];
$pepnum   =$_POST['pepnum'];
$day5 =$_POST['day5'];
$day6     =$_POST['day6'];
$prblace	 =$_POST['prblace'];
$adress		 =$_POST['adress'];
$clver	 =$_POST['clver'];
$nationality	 =$_POST['nationality'];
$ownersize	 =$_POST['ownersize'];
$phone	 =$_POST['phone'];
$notes	 =$_POST['notes'];

 $connection =mysql_connect ("localhost","root","");  

//echo $city.$hy .$sq .$misaha .$type1 .$objective .$degree .$day1 .$type .$day2 .$price .$notes;
$state    =$_POST['save'];
$id=$_SESSION['id'];
if($state=="Save"){
mysql_query("SET NAMES 'utf8'");
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
                    mysql_query("INSERT INTO owners_data(land_id,owner_name, gender ,birth_day , id_type ,pepnum, release_date , close_date	, relese_location	, address	, legal_cap	, nationality	, owner_area	, phone_num,note ) VALUES ('$id','$ownwer','$gender','$day4','$peper','$pepnum', '$day5', '$day6', 'prblace', '$adress','$clver', '$nationality', '$ownersize','$phone','$notes')")or die(mysql_error());
                  
  
  }
elseif($state=="Update") {
$connection =mysql_connect ("localhost","root",""); 
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
mysql_query("SET NAMES 'utf8'");
$id=$_SESSION['id'];
mysql_query("SET NAMES 'utf8'");
$query="UPDATE owners_data SET owner_name='".$ownwer."',gender='".$gender."',birth_day='".$day4."',id_type='".$peper."',pepnum='".$pepnum."',release_date='".$day5."',close_date='".$day6."',relese_location='".$prblace."',address='".$adress."',legal_cap='".$clver."',nationality='".$nationality."',owner_area='".$ownersize."',phone_num='".$phone."',note='".$notes."' WHERE land_id='".$id."'";
	mysql_query( $connection,$query);
echo 'up';
}
elseif($state=="Delete") {
$connection =mysql_connect ("localhost","root",""); 
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
mysql_query ("delete from owners_data where  land_id = $id");

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