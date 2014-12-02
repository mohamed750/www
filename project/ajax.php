<?php
$id=$_POST['id'];
$connection =mysql_connect ("localhost","root","");
$db = mysql_select_db( "land_registeration", $connection) ;
$q="select * from reports where report_id='$id'";
$result = mysql_query($q) or die(mysql_error());
$row = mysql_fetch_array($result);
$q1="update reports set `isnew`='0' where `report_id`='$id'";
mysql_query($q1) or die(mysql_error());
echo"<div>تاريخ التقرير     ";
ECHO $row[0];
echo "<br><br><br>العنوان    ";echo $row[1]."<br><br><br>:الموضوع<br>".$row[2]."</div>";

?>