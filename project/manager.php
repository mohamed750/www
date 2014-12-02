<?php
$row = "                   ";
if(isset($_POST['city']))
{
require_once('search.php');

    $obj =new search;
	$row = $obj->go($_POST['city'],$_POST['hy'],$_POST['squer'],$_POST['number']);
   }
   

?>

<html>
<head>

		<div id="s" style="height:100px;width:1330px;margin-top:-20px;background-color:red">
<form>

<center><label><h5> بسم الله الرحمن الرحيم <h5></label><center>
<center><label><h4> جمهورية السودان <h4></label><center>
<center><label><h2> نظام تسجيلات الأراضي<h2></label><center>
</form>
</div>
</head>



<div id="container"style="width:1330px;height:600;background-color:gray">
<script src="jquery.min.js"></script>

<script>


$(document).ready(function(){
  $("#b1").click(function(){
    $("#n1").show();
	$("#n2").hide();
	$("#n3").hide();
	$("#n4").hide();
	$("#n5").hide();
	$("#n6").hide();
	$("#n7").hide();
	$("#n8").hide();
	$("#n9").hide();
  });
});

$(document).ready(function(){
  $("#b2").click(function(){
    $("#n1").hide();
	$("#n2").show();
	$("#n3").hide();
	$("#n4").hide();
	$("#n5").hide();
	$("#n6").hide();
	$("#n7").hide();
	$("#n8").hide();
	$("#n9").hide();
  });
});

$(document).ready(function(){
  $("#b3").click(function(){
    $("#n1").hide();
	$("#n2").hide();
	$("#n3").show();
	$("#n4").hide();
	$("#n5").hide();
	$("#n6").hide();
	$("#n7").hide();
	$("#n8").hide();
	$("#n9").hide();
  });
});

$(document).ready(function(){
  $("#b4").click(function(){
    $("#n1").hide();
	$("#n2").hide();
	$("#n3").hide();
	$("#n4").hide();
	$("#n5").show();
	$("#n6").hide();
	$("#n7").hide();
	$("#n8").hide();
	$("#n9").hide();
  });
});

$(document).ready(function(){
  $("#b5").click(function(){
    $("#n1").hide();
	$("#n2").hide();
	$("#n3").hide();
	$("#n4").show()
	$("#n5").hide();
	$("#n6").hide();
	$("#n7").hide();
	$("#n8").hide();
	$("#n9").hide();
	;
  });
});
$(document).ready(function(){
  $("#b7").click(function(){
    $("#n1").hide();
	$("#n2").hide();
	$("#n3").hide();
	$("#n4").hide();
	$("#n6").show();
	$("#n5").hide();
	$("#n7").hide();
	$("#n8").hide();
	$("#n9").hide();
  });
});
$(document).ready(function(){
  $("#b8").click(function(){
    $("#n1").hide();
	$("#n2").hide();
	$("#n3").hide();
	$("#n4").hide();
	$("#n7").show();
	$("#n5").hide();
	$("#n6").hide();
	$("#n8").hide();
	$("#n9").hide();
  });
});
$(document).ready(function(){
  $("#b9").click(function(){
    $("#n1").hide();
	$("#n2").hide();
	$("#n3").hide();
	$("#n4").hide();
	$("#n8").show();
	$("#n5").hide();
	$("#n6").hide();
	$("#n7").hide();
	$("#n9").hide();
  });
});
$(document).ready(function(){
  $("#b11").click(function(){
    $("#n1").hide();
	$("#n2").hide();
	$("#n3").hide();
	$("#n4").hide();
	$("#n9").show();
	$("#n5").hide();
	$("#n6").hide();
	$("#n7").hide();
	$("#n8").hide();
  });
});
$(document).on('click','.repo', function(){
id=$(".repo").text()-10;
	var dataString="id="+id;
		$.ajax({
		type: "POST",
		url: "ajax.php",
		data: dataString,
		cache: false,
		success: function(result){
		$("#repo_div").html(result)
		}});});
</script>

<body dir="rtl"background="ph.jpg"width= 1330	>
<div id="ser" style="margin-right:50px">
<style>



#gu
{
display:none;
}

ul.svertical{
width: 200px; /* width of menu */
overflow: auto;
background: green; /* background of menu */
margin: 0;
padding: 0;
padding-top: 7px; /* top padding */
list-style-type: none;
}

ul.svertical li{
text-align: right; /* right align menu links */
}

ul.svertical li a{
position: relative;
display: inline-block;
text-indent: 5px;
overflow: hidden;
background: rgb(127, 201, 68); /* initial background color of links */
font: bold 16px Germand;
text-decoration: none;
padding: 5px;
margin-bottom: 7px; /* spacing between links */
color: black;
-moz-box-shadow: inset -7px 0 5px rgba(114,114,114, 0.8); /* inner right shadow added to each link */
-webkit-box-shadow: inset -7px 0 5px rgba(114,114,114, 0.8);
box-shadow: inset -7px 0 5px rgba(114,114,114, 0.8);
-moz-transition: all 0.2s ease-in-out; /* CSS3 transition of hover properties */
-webkit-transition: all 0.2s ease-in-out;
-o-transition: all 0.2s ease-in-out;
-ms-transition: all 0.2s ease-in-out;
transition: all 0.2s ease-in-out;
}

ul.svertical li a:hover{
padding-right: 30px; /* add right padding to expand link horizontally to the left */
color: black;
background: rgb(153,249,75);
-moz-box-shadow: inset -3px 0 2px rgba(114,114,114, 0.8); /* contract inner right shadow */
-webkit-box-shadow: inset -3px 0 5px rgba(114,114,114, 0.8);
box-shadow: inset -3px 0 5px rgba(114,114,114, 0.8);
}

ul.svertical li a:before{ /* CSS generated content: slanted right edge */
content: "";
position: absolute;
left: 0;
top: 0;
border-style: solid; 
border-width: 70px 0 0 20px; /* Play around with 1st and 4th value to change slant degree */
border-color: transparent transparent transparent black; /* change black to match the background color of the menu UL */

}

</style>


<ul class="svertical">
<li><a href="#" ><button style="background-color:yellow" id="b1" >تسجيل قطعة جديدة</button></a></li>
<li><a href="#" ><button style="background-color:yellow" id="b2">السجل التاريخي للقطعة</button></a></li>
<li><a href="#" ><button style="background-color:yellow" id="b3">     بيانات الملاك</button></a></li>
<li><a href="#" ><button style="background-color:yellow" id="b4">القيودات</button></a></li>
<li><a href="#" ><button style="background-color:yellow" id="b5"> إرفاق المستندات</button></a></li>
<hr>
<li><a href="#" onclick="showem()"><button style="background-color:yellow" id="b7"> عرض التقارير</button>
<?php
 $connection =mysql_connect ("localhost","root",""); 
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
 $x= mysql_query ("select count(`isnew`) from `reports` where  `isnew`='1'");
 $x=mysql_fetch_array($x);
 echo $x[0]."  ";  
 echo 'تقرير جديد';
   ?></a></li>
<li><a href="#" onclick="showem()"><button style="background-color:yellow" id="b8">اضافة موظف</button></a></li>
<li><a href="#" ><button style="background-color:yellow" id="b9">حذف موظف</button></a></li>
<li><a href="#"><button style="background-color:yellow"id="b11">تغيير كلمة السر</button></a></li>
<li><a href="project.php"><button style="background-color:yellow" id="b10">تسجيل الخروج</button></a></li>

		
</ul>
<div/>
<div id="ser" style="height:260px;width:350px;margin-right:250px;margin-top:-490px">
<form name="f1" action="http://localhost/project/manager.php"method="post">
     <h3>بحث عن قطعة </h3> 
	 <h5>
	<label>المدينة</label>&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name="city">
		<option value = "">اختر المدينة</option>
		<option value = "الخرطوم">الخرطوم</option>
		<option value = "أمدرمان">أمدرمان</option>
		<option value = "بحري">بحري</option>
		
	</select>
	<br>
	<label>الحي</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name = "hy">
    	<option value = ""> اختر الحي</option>
		<option value = "الشجرة">الشجرة</option>
		<option value = "حي المطار"> حي المطار</option>
		<option value = "بري"> بري</option>
		<option value = "الجريف غرب"> الجريف غرب</option>
		<option value = "الرياض"> الرياض</option>
		<option value = "المعمورة"> المعمورة</option>               
		<option value = "المربعات"> المربعات</option>
		<option value = "محطة سراج"> محطة سراج</option>
		<option value = "الموردة"> الموردة</option>
		<option value = "الصالحة"> الصالحة</option>
		<option value = "سوق ليبيا"> سوق ليبيا</option>
		<option value = "الشعبية"> الشعبية</option>
		<option value = "الكدرو"> الكدرو</option>
		<option value = "الدروشاب"> الدروشاب</option>
		<option value = "السامراب"> السامراب</option>
		<option value = "شارع واحد"> شارع واحد</option>
		<option value = "الردمية"> الردمية</option>
		<option value = "الوحدة"> الوحدة</option>
	</select>
	<br>
	<label>المربع</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name ="squer">
		<option>اختر المربع</option>
		<option value = "1">1</option>
	    <option value = "2" >2</option>
   		<option value = "3" >3</option>
  		<option value = "4" >4</option>
  		<option value = "5" >5</option>
  		<option value = "6" >6</option>
  		<option value = "7" >7</option>
  		<option value = "8" >8</option>
		<option value = "9" >9</option>
  		<option value = "10" >10</option>
  		<option value = "11" >11</option>
 		<option value = "12" >12</option>
  		<option value = "13" >13</option>
  		<option value = "14" >14</option>
 		<option value = "15" >15</option>
  		<option value = "16" >16</option>
  		<option value = "17" >17</option>
  		<option value = "18" >18</option>
  		<option value = "19" >19</option>
  		<option value = "20" >20</option>



	</select><br>
	<label>رقم القطعة</label>
	<input name ="number" type="text"  value=""size="8"/><br>
	 <h5/>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" value="بحث" >
	<?php if((strcmp($row['0'],"no")==0)){ echo "لاتوجد ارض بهذه المعطيات";}?> 
	</form>
	</div>
	
	<!--  تسجيل جديد -->
	
	


	<div id="n1" style=" background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
	<form name="f2" method="post" action="http://localhost/project/newland.php"> 
     <h3>بيانات القطعة </h3> 
	 <h5>
	 <label>المدينة</label>&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name ="city1">
		<option value = "">اختر المدينة</option>
		<option value = "الخرطوم">الخرطوم</option>
		<option value = "أمدرمان">أمدرمان</option>
		<option value = "بحري">بحري</option>
		
	</select>
	<br>
	<label>الحي</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name ="hy1">
    	<option value = ""> اختر الحي</option>
		<option value = "الشجرة">الشجرة</option>
		<option value = "حي المطار"> حي المطار</option>
		<option value = "بري"> بري</option>
		<option value = "الجريف غرب"> الجريف غرب</option>
		<option value = "الرياض"> الرياض</option>
		<option value = "المعمورة"> المعمورة</option>               
		<option value = "المربعات"> المربعات</option>
		<option value = "محطة سراج"> محطة سراج</option>
		<option value = "الموردة"> الموردة</option>
		<option value = "الصالحة"> الصالحة</option>
		<option value = "سوق ليبيا"> سوق ليبيا</option>
		<option value = "الشعبية"> الشعبية</option>
		<option value = "الكدرو"> الكدرو</option>
		<option value = "الدروشاب"> الدروشاب</option>
		<option value = "السامراب"> السامراب</option>
		<option value = "شارع واحد"> شارع واحد</option>
		<option value = "الردمية"> الردمية</option>
		<option value = "الوحدة"> الوحدة</option>
	</select>
	<br>
	<label>المربع</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name ="sq">
		<option value = "" >اختر المربع</option>
		<option value = "1">1</option>
	    <option value = "2" >2</option>
   		<option value = "3" >3</option>
  		<option value = "4" >4</option>
  		<option value = "5" >5</option>
  		<option value = "6" >6</option>
  		<option value = "7" >7</option>
  		<option value = "8" >8</option>
		<option value = "9" >9</option>
  		<option value = "10" >10</option>
  		<option value = "11" >11</option>
 		<option value = "12" >12</option>
  		<option value = "13" >13</option>
  		<option value = "14" >14</option>
 		<option value = "15" >15</option>
  		<option value = "16" >16</option>
  		<option value = "17" >17</option>
  		<option value = "18" >18</option>
  		<option value = "19" >19</option>
  		<option value = "20" >20</option>
	</select><br>
	
	<label>المساحة</label>&nbsp&nbsp&nbsp&nbsp
	<input name ="misaha" type="text"  value=" "size="7"/><br>
	<label>رقم القطعة</label>&nbsp
	<input name ="landnum" type="text"  value=" "size="7"/><br>
	<label>نوع الملكية</label>
	<select name ="owntype">
		<option  value = "ملكية منغعة">ملكية منغعة</option>
		<option value = "ملكية عين">ملكية عين</option>
		<select/> <br>
		<label>الغرض</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name ="objective" >
		<option value = "سكني">سكني</option>
		<option value = "تجاري">تجاري</option>
		<option value = "زراعي">زراعي</option>
		<option value = "صناعي">صناعي</option>
		<select/><br>
		<label>الدرجة</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name ="degree">
		<option value = "الاولى" >الاولى</option>
		<option value = "الثانية">الثانية</option>
		<option value = "الثالثة">الثالثة</option>
		
		<select/><br>
		<label>تاريخ فتح السجل</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
         <input type="date" name="day1"">	
	<br>
		<label>نمرة العقد</label>&nbsp&nbsp&nbsp&nbsp
	<input name ="contnum"type="text"  value=" "size="7"/><br>
		<label>نوع المدة</label>&nbsp&nbsp&nbsp&nbsp
	<select name ="type">
		<option value = "مدة ابتدائية" >مدة ابتدائية</option>
		<option  value = "مدة نهائية">مدة نهائية</option>
		<select/> <br>
		<label>تاريخ العقد</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="date" name="day2">
		<br>
		<label>الإيجارت السنوية</label>&nbsp&nbsp&nbsp&nbsp
	<input name ="price" type="text" size="7"/><br>
	
	<label>ملاحظات</label> <br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
	<textarea name="notes"id ="notes" type="text" rows="5" cols="25"></textarea><br><br>
	<input name ="save" type="submit"  value="Save" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input name ="save"type="submit"  value="Update" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input name ="save"type="submit"  value="Delete" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	</h5>
		</form>
</div>
  
  
	<div id="n2" style="display:none; background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
	<h3>السجل التاريخي للقطعة: </h3> 
	 <form action="http://localhost/project/land-hestory.php" method="post">
	 <h4>
	<label>رقم الإجراء</label>&nbsp&nbsp&nbsp&nbsp
	<input name ="prenum" type="text"  value="<?php if(isset($row[16])) echo $row[16] ?>"size="7"/><br>
	<label>نوع الإجراء </label>
	<select name ="pretype">
		<option>إختر</option>
		<option value="تنازل "<?php if(isset($row[17]))if(strcmp($row[17],"تنازل")==0)echo 'selected="selected"' ?>>تنازل</option>
		<option value="هبة"<?php if(isset($row[17]))if(strcmp($row[17],"هبة")==0)echo 'selected="selected"' ?>>هبة</option>
		<option value="رهن"<?php if(isset($row[17]))if(strcmp($row[17],"رهن")==0)echo 'selected="selected"' ?>>رهن</option>
		<option value="تصحيح إسم"<?php if(isset($row[17]))if(strcmp($row[17],"تصحيح إسم")==0)echo 'selected="selected"' ?>>تصحيح إسم</option>
		<option value="مبادلة"<?php if(isset($row[17]))if(strcmp($row[17],"مبادلة")==0)echo 'selected="selected"' ?>>مبادلة</option>
		<option value="ورثة"<?php if(isset($row[17]))if(strcmp($row[17],"ورثة")==0)echo 'selected="selected"' ?>>ورثة</option>
		<option value="حكم محكمة"<?php if(isset($row[17]))if(strcmp($row[17],"حكم محكمة")==0)echo 'selected="selected"' ?>>حكم محكمة</option>
		<select/> <br>
		
		<label>تاريخ السجل</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	    <input type="date" name="day3"value="<?php if(isset($row[18]))echo $row[18]?>"/>
		<br>
		
	
	<label>بيانات الإجراء</label> <br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<textarea name ="predata" type="text" rows="5" cols="25"><?php if(isset($row[19]))echo $row[19]?></textarea><br><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
	<input name ="save" type="submit"  value="Save" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input name ="save"type="submit"  value="Update" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input name ="save"type="submit"  value="Delete" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	</h4>
	</form>

</div>
	
	
	
	
	
	<div id="n3" style="display:none;background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
	<form name="onerdata" method="post" action="http://localhost/project/ownerdata.php">
     <h3> بيانات المالك  </h3> 
	 <h5>
	  <!-- <input type="checkbox" name="gov" value="gov">حكومة السودان<br> -->
	<label>إسم المالك</label>&nbsp&nbsp&nbsp&nbsp
	<input name ="ownwer" type="text"  size="30" value="<?php if(isset($row[21]))echo $row[21]?>"/><br>
	  <label> الجنس  </label>
	  <select name ="gender">
		<option >إختر</option>
		<option value="ذكر"<?php if(isset($row[22]))if(strcmp($row[22],"ذكر")==0)echo 'selected="selected"' ?>>ذكر</option>
		<option value="أنثى"<?php if(isset($row[22]))if(strcmp($row[22],"أنثى")==0)echo 'selected="selected"' ?>>أنثى</option>
		<select/> <br>
	
					
		<label> تاريخ الميلاد</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	    <input type="date" name="day4"value="<?php if(isset($row[23]))echo $row[23]?>"/>
		<br>
	<label>نوع إثبات الشخصية</label>
	<select name ="peper">
		<option value="بطاقة شخصية"<?php if(isset($row[24]))if(strcmp($row[24],"بطاقة شخصية")==0)echo 'selected="selected"' ?>>بطاقة شخصية</option>
		<option value="جنســية"<?php if(isset($row[24]))if(strcmp($row[24],"جنســية")==0)echo 'selected="selected"' ?>>جنســية</option>
		<option value="رقم وطني"<?php if(isset($row[24]))if(strcmp($row[24],"رقم وطني")==0)echo 'selected="selected"' ?>>رقم وطني</option>
		<select/> <br>
		<label>رقم إثبات الشخصية</label>
		<input name ="pepnum"type="text"  value=" "size="4"value="<?php if(isset($row[25]))echo $row[25]?>"/><br>
		<label>  تاريخ الإصدار</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	     <input type="date" name="day5"value="<?php if(isset($row[26]))echo $row[26]?>">
		<br>
		<label>نهاية الصلاحية</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="date" name="day6"value="<?php if(isset($row[27]))echo $row[27]?>"/>
		<br>
		<label>مكان الإصدار</label>&nbsp&nbsp&nbsp
	<select name ="prblace">
		
		<option value="الخرطوم"<?php if(isset($row[28]))if(strcmp($row[28],"الخرطوم")==0)echo 'selected="selected"' ?>>الخرطوم</option>
		<option value="أمدرمان"<?php if(isset($row[28]))if(strcmp($row[28],"أمدرمان")==0)echo 'selected="selected"' ?>>أمدرمان</option>
		<option value="بحري"<?php if(isset($row[28]))if(strcmp($row[28],"بحري")==0)echo 'selected="selected"' ?>>بحري</option>
	    
		
	</select>
	<br>
		<label>العنوان</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input name ="adress"type="text" size="7"value="<?php if(isset($row[29]))echo $row[29]?>"/><br>
		
		<label>أهلية المالك</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name ="clver">
		<option value="عاقل"<?php if(isset($row[30]))if(strcmp($row[30],"عاقل")==0)echo 'selected="selected"' ?>>عاقل</option>
		<option value="قاصر"<?php if(isset($row[30]))if(strcmp($row[30],"قاصر")==0)echo 'selected="selected"' ?>>قاصر</option>
		<option value="مجنون"<?php if(isset($row[30]))if(strcmp($row[30],"مجنون")==0)echo 'selected="selected"' ?>>مجنون</option>
		<select/><br>
		<label>جنسية المالك</label>&nbsp&nbsp&nbsp&nbsp
	    <input name ="nationality"type="text"  value="<?php if(isset($row[31]))echo $row[31]?>"size="7"/>
		<br>
		<label>مساحة المالك </label>&nbsp&nbsp&nbsp
		<input name ="ownersize"type="text"  value="<?php if(isset($row[32]))echo $row[32]?>"size="7"/><br>
		<label>هاتف المالك</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input name ="phone"type="text" size="7"value="<?php if(isset($row[33]))echo $row[33]?>"/><br>
	
	&nbsp&nbsp <label>ملاحظات</label> <br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<textarea type="text" name ="notes"rows="5" cols="25"><?php if(isset($row[34]))echo $row[34]?></textarea><br><br>
	<input name ="save" type="submit"  value="Save" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input name ="save"type="submit"  value="Update" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input name ="save"type="submit"  value="Delete" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	</h5>
		</form>
</div>

	
	
	
	<div id="n4" style="display:none;background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
	<form method="post" enctype="multipart/form-data" action="http://localhost/project/documents.php">
	
     <h3>بيانات الوثائق </h3> 
	 <h4>
<br><br>
	<label>نوع الوثيقة</label>
	<select name="doctype" >
		<option value="إعلام شرعي"<?php if(isset($row[44]))if(strcmp($row[44],"إعلام شرعي")==0)echo 'selected="selected"' ?>>إعلام شرعي</option>
		<option value="عقد تنازل"<?php if(isset($row[44]))if(strcmp($row[44],"عقد تنازل")==0)echo 'selected="selected"' ?>> عقد تنازل</option>
		<option value="عقد إيجار"<?php if(isset($row[44]))if(strcmp($row[44],"عقد إيجار")==0)echo 'selected="selected"' ?>>عقد إيجار</option>
		<option value="حجز"<?php if(isset($row[44]))if(strcmp($row[44],"حجز")==0)echo 'selected="selected"' ?>>حجز</option>
		<option value="نقل إيجارة"<?php if(isset($row[44]))if(strcmp($row[44],"نقل إيجارة")==0)echo 'selected="selected"' ?>>نقل إيجارة</option>
	<option value="توكيل"<?php if(isset($row[44]))if(strcmp($row[44],"توكيل")==0)echo 'selected="selected"' ?>>توكيل</option>
	<option value="رهن"<?php if(isset($row[44]))if(strcmp($row[44],"رهن")==0)echo 'selected="selected"' ?>>رهن</option>
	<option value="تابع عقد إيجار"<?php if(isset($row[44]))if(strcmp($row[44],"تابع عقد إيجار")==0)echo 'selected="selected"' ?>>تابع عقد إيجار</option>
		<select/> <br><br>
		<label>موقع تخزين الوثيقة</label>
		<select name="ducplace">
		<option value="الأرشيف"<?php if(isset($row[45]))if(strcmp($row[45],"الأرشيف")==0)echo 'selected="selected"' ?>>الأرشيف</option>
		<select/><br><br>
		<label> إختيار الوثيقة</label>
		<input type="file"  name="file" id="file" value="" /><br><br>
		<div style="visibility: <?php if(isset($row[46])){}else{echo 'hidden';}?>">
		<img src="http://localhost/project/<?php if(isset($row[46]))echo $row[46]?>" alt="مستند مرفق"height="300" width="300" >
</div>
	
	
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
	<input name ="save" type="submit"  value="Save" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input name ="save"type="submit"  value="Update" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input name ="save"type="submit"  value="Delete" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	</h4>
			</form>
</div>

	
	<div id="n5" style="display:none;background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
		<form name="entires" method="post" action="http://localhost/project/entries_data.php">
     <h3> بيانات القيد  </h3> 
	 <h5>
	
	<label>مالك القيد</label>&nbsp&nbsp&nbsp&nbsp
	<input name ="owner1"type="text"  value="<?php if(isset($row[36]))echo $row[36]?>"size="15"/><br>
	  
					
	<label> تاريخ القيد</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="date" name="day7"value="<?php if(isset($row[37]))echo $row[37]?>"/>
		<br>
	<label>نوع القيد</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name ="type1">
	<option value="تصرف بأمر من مالك"<?php if(isset($row[38]))if(strcmp($row[38],"تصرف بأمر من مالك")==0)echo 'selected="selected"' ?>>تصرف بأمر من مالك</option>
		<option value="تصرف بأمر من الحكومة"<?php if(isset($row[38]))if(strcmp($row[38],"تصرف بأمر من الحكومة")==0)echo 'selected="selected"' ?>>تصرف بأمر من الحكومة</option>
		<select/> <br>
		<label>مساحة المالك</label>&nbsp&nbsp&nbsp&nbsp
		<input name ="ownsize3"type="text"  value="<?php if(isset($row[39]))echo $row[39]?>"size="7"/><br>
		<label>المساحة المقيدة</label>&nbsp
		<input name ="size2"type="text"  value="<?php if(isset($row[40]))echo $row[40]?>"size="7"/><br>
		<label>قيمة القيد</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input name ="price2"type="text"  value="<?php if(isset($row[41]))echo $row[41]?>"size="7"/><br>
		
	&nbsp&nbsp <label>بيانات </label> <br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<textarea name ="info1"type="text" rows="5" cols="25"><?php if(isset($row[42]))echo $row[42]?></textarea><br><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input name ="save" type="submit"  value="Save" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input name ="save"type="submit"  value="Update" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input name ="save"type="submit"  value="Delete" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
	</h5>
		</form>
	
</div>

<div id="n6" style="display:none;background-color:yellow;width:510;height:550;margin-top:-295px;margin-right:480px">
     <div>
	   <?php
 $connection =mysql_connect ("localhost","root",""); 
 $db = mysql_select_db('land_registeration', $connection) or die(mysql_error());
 $x= mysql_query ("select `report_id`,`report_date`,`readdress`,`body` from `reports` where  `isnew`='1'") or die(mysql_error()) ;
 $myreport = "hhh";
 while($myreport = mysql_fetch_array($x)) {
  echo'<a class="repo" href="#"style="text-align:center;"';echo">";echo $myreport[0] ;echo"</a>";
  echo"<br>";
 }
	
   ?><div id="repo_div"></div>
	 </div>
	<form >
	<h3> التقرير  </h3> 
	 <h5>				
	<label> تاريخ التقرير</label>&nbsp&nbsp&nbsp
		<input type="date" name="day8"value="">
	    <br>
	<label>عنوان التقرير</label>&nbsp&nbsp
	<input type="text"  name="reportaddress" value=""size="20"/><br>
	
	&nbsp&nbsp <label>الموضوع </label> <br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <textarea type="text" rows="20" cols="35" value = "<?php echo $myreport[0]; ?>"></textarea><br><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit"  value="إرسال" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="تعديل" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="حذف" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
	</h5>
	</form>
</div>


	<div id="n7" style="display:none;background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
	<form action="addemp.php" method="POST" >
     <h3> إضافة موظف جديد  </h3> 
	 <h5>				
	
	<label> اسم الموظف</label>&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="15" name="empname"/><br><br>
	<label>كلمة السر</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="15" name="emppass"/><br><br>
	<br><br>
	
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
	<input type="submit"  value="إضافة" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="buttom"  value="تعديل" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="buttom"  value="إالغاء" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
	</h5>
	</form>
</div>
<div id="n8" style="display:none;background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
	<form action="delemployee.php" method="POST">
     <h3> حذف موظف   </h3> 
	 <h5>				
	
	<label> اسم الموظف</label>&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="15"name="ename"/><br><br>
    <label> كلمة السر</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="15"name="epassword"/><br><br>
	
	<br><br>
	
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit"  value="حذف" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="تعديل" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="إالغاء" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
	</h5>
</div>
	
	
	<div id="n9" style="display:none;background-color:gray;width:510;height:550;margin-top:-300px;margin-right:480px">
	<form  action="http://localhost/project/change.php" method="POST">
     <h3> تغيير كلمة السر  </h3> 
	 <h5>				
	
	<label> أدخل كلمة السر القديمة</label>&nbsp&nbsp&nbsp&nbsp
	<input name ="pass1"type="password"  size="15"/><br><br>
	<label>أدخل كلمة السر الجديدة</label>&nbsp&nbsp&nbsp&nbsp
	<input name = "pass2"type="password"  size="15"/><br><br>
	<label>كرر كلمة السر الجديدة</label>&nbsp&nbsp&nbsp&nbsp&nbsp
	<input name ="pass3"type="password"  size="15"/><br><br>
	<br><br>
	
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit"  value="تغيير" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="تعديل" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="إالغاء" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	</h5>
	</form>
</div>
	
	
<div id="footer"style="background-color:green;width:1330;height:100;margin-right:-50px">
		
		
		<p align="center"> Posted by: Mohammed Ali</p><br>
		</div><!--footer--><!--footer-->

</body>
</div>
</html>