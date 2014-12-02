 <?php
 session_start();
class search{
public function __construct() {}
function go($city,$hy,$sq,$landnm){
/* $city    =$_POST['city'];
$hy   =$_POST['hy'];
$sq  =$_POST['squer'];
$landnm =$_POST['number']; */
 
$connection =mysql_connect ("localhost","root","");  

//echo $city.$hy .$sq .$misaha .$type1 .$objective .$degree .$day1 .$type .$day2 .$price .$notes;

 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
                  mysql_query("SET NAMES 'utf8'");
  $query ="select * from land where city = '".$city."' and hy = '".$hy."' and block ='".$sq."' and land_number= '".$landnm."'";
	$result=mysql_query($query);
$row = mysql_fetch_array($result);
  if(isset($row[0])){}else{$row[0]="no";}
//echo $city.$hy .$sq .$landnm;
	$id=$row[0];
    $_SESSION['id']=$id;
    $query2 ="select * from land_history where land_id= '".$id."'";
	$result2=mysql_query($query2);
	$row2 = mysql_fetch_array($result2);
	 if(isset($row2[0])){$row= array_merge($row,$row2);}
	 else{$row= array_merge($row,array("","","","",""));}

    $query3 ="select * from owners_data where land_id= '".$id."'";
	$result3=mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	 if(isset($row3[0])){$row= array_merge($row,$row3);}	 else{$row= array_merge($row,array("","","","",""."","","","","","","","","",""));}

    $query4 ="select * from entries_data where land_id= '".$id."'";
	$result4=mysql_query($query4);
	$row4 = mysql_fetch_array($result4);
	 if(isset($row4[0])){$row= array_merge($row,$row4);} else{$row= array_merge($row,array("","","","",""."","",""));}
    $query5 ="select * from documents where land_id= '".$id."'";
	$result5=mysql_query($query5);
	$row5 = mysql_fetch_array($result5);
	if(isset($row5[0])){$row= array_merge($row,$row5);} else{$row= array_merge($row,array("","","",""));}
  mysql_close($connection);
  return $row;
  }
  //$_SESSION['id']=$land_id;
  }
  ?>