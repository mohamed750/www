<?php //require_once()
include_once('employee.php');
include_once('manager.php');
session_destroy();
echo "<script>localStorage.setItem('isCompany','false');localStorage.clear();</script>";
//include_once('home.php');
header('Location: http://localhost//project//project.php');
?>