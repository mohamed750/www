<?php

session_start();

$doctype    =$_POST['doctype'];
$ducplace   =$_POST['ducplace'];
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
  //  echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {//
   /*  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>"; */
    if (file_exists("upload/" . $_FILES["file"]["name"])) {
    //  echo $_FILES["file"]["name"] . " already exists. ";
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
//echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	 $filepath= "upload/" .$_FILES['file']['name'];
	 //$filepath='<img src="'.$filepath.'" alt="مستند مرفق" >';
    }
  }
} else {
  echo "Invalid file";
}

 $connection =mysql_connect ("localhost","root","");  
$id=$_SESSION['id'];
$state    =$_POST['save'];
if($state=="Save"){

mysql_query("SET NAMES 'utf8'");
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
       mysql_query("INSERT INTO documents(land_id,doc_type, archive ,doc) VALUES ('$id','$doctype', '$ducplace','$filepath')")
					or die(mysql_error());
                  
  
  }
elseif($state=="Update") {echo 'up';
$connection =mysql_connect ("localhost","root",""); 
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
mysql_query("SET NAMES 'utf8'");
$query="UPDATE documents SET doc_type='$doctype',archive='$ducplace',doc='$filepath' WHERE id='$id'";
	mysql_query($query);
}

elseif($state=="Delete") {
$connection =mysql_connect ("localhost","root",""); 
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
mysql_query ("delete from documents where  land_id = $id");
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