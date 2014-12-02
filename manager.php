<html>
<head>


		<div id="s" style="height:100px;width:1330px;margin-top:-20px;background-color:red">
<form>

<center><label><h5> بسم الله الرحمن الرحيم <h5></label><center>
<center><label><h4> جمهورية السودان <h4></label><center>
<center><label><h2> نظام تسجيل الأراضي<h2></label><center>
</form>
</div>
</head>



<div id="container"style="width:1330px;height:600;background-color:none">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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
</script>

<body dir="rtl"background="../../Desktop/ph.jpg"width= 1330	>
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
<li><a href="#" onclick="showem()"><button style="background-color:yellow" id="b7"> عرض التقارير</button></a></li>
<li><a href="#" onclick="showem()"><button style="background-color:yellow" id="b8">اضافة موظف</button></a></li>
<li><a href="#" ><button style="background-color:yellow" id="b9">حذف موظف</button></a></li>
<li><a href="#"><button style="background-color:yellow"id="b11">تغيير كلمة السر</button></a></li>
<li><a href="project.html"><button style="background-color:yellow" id="b10">تسجيل الخروج</button></a></li>

		
</ul>
<div/>
<div id="ser" style="height:260px;width:350px;margin-right:250px;margin-top:-490px">
<form>
     <h3>بحث عن قطعة </h3> 
	 <h5>
	<label>المدينة</label>&nbsp&nbsp&nbsp&nbsp&nbsp
	<select>
		<option>اختر المدينة</option>
		<option>الخرطوم</option>
		<option>أمدرمان</option>
		<option>بحري</option>
	    <option>الحاج يوسف</option>
		
	</select>
	<br>
	<label>الحي</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select>
    	<option> اختر الحي</option>
		<option>الشجرة</option>
		<option> حي المطار</option>
		<option> بري</option>
		<option> الجريف غرب</option>
		<option> الرياض</option>
		<option> المعمورة</option>               
		<option> المربعات</option>
		<option> محطة سراج</option>
		<option> الموردة</option>
		<option> الصالحة</option>
		<option> سوق ليبيا</option>
		<option> الشعبية</option>
		<option> الكدرو</option>
		<option> الدروشاب</option>
		<option> السامراب</option>
		<option> شارع واحد</option>
		<option> الردمية</option>
		<option> الوحدة</option>
	</select>
	<br>
	<label>المربع</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select>
		<option>اختر المربع</option>
		<option>1</option>
	    <option>2</option>
   		<option>3</option>
  		<option>4</option>
  		<option>5</option>
  		<option>6</option>
  		<option>7</option>
  		<option>8</option>
		<option>9</option>
  		<option>10</option>
  		<option>11</option>
 		<option>12</option>
  		<option>13</option>
  		<option>14</option>
 		<option>15</option>
  		<option>16</option>
  		<option>17</option>
  		<option>18</option>
  		<option>19</option>
  		<option>20</option>



	</select><br>
	<label>رقم القطعة</label>
	<input type="text"  value=" "size="8"/><br>
	 <h5/>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" value="بحث" >
	</form>
	</div>
	
	<!--  تسجيل جديد -->
	
	
	<div/>
	<div id="n1" style=" background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
	<form>
     <h3>بيانات القطعة </h3> 
	 <h5>
	 <label>المدينة</label>&nbsp&nbsp&nbsp&nbsp&nbsp
	<select>
		<option>اختر المدينة</option>
		<option>الخرطوم</option>
		<option>أمدرمان</option>
		<option>بحري</option>
	    <option>الحاج يوسف</option>
		
	</select>
	<br>
	<label>الحي</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select>
    	<option> اختر الحي</option>
		<option>الشجرة</option>
		<option> حي المطار</option>
		<option> بري</option>
		<option> الجريف غرب</option>
		<option> الرياض</option>
		<option> المعمورة</option>               
		<option> المربعات</option>
		<option> محطة سراج</option>
		<option> الموردة</option>
		<option> الصالحة</option>
		<option> سوق ليبيا</option>
		<option> الشعبية</option>
		<option> الكدرو</option>
		<option> الدروشاب</option>
		<option> السامراب</option>
		<option> شارع واحد</option>
		<option> الردمية</option>
		<option> الوحدة</option>
	</select>
	<br>
	<label>المربع</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select>
		<option>اختر المربع</option>
		<option>1</option>
	    <option>2</option>
   		<option>3</option>
  		<option>4</option>
  		<option>5</option>
  		<option>6</option>
  		<option>7</option>
  		<option>8</option>
		<option>9</option>
  		<option>10</option>
  		<option>11</option>
 		<option>12</option>
  		<option>13</option>
  		<option>14</option>
 		<option>15</option>
  		<option>16</option>
  		<option>17</option>
  		<option>18</option>
  		<option>19</option>
  		<option>20</option>



	</select><br>
	
	<label>المساحة</label>&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="7"/><br>
	<label>نوع الملكية</label>
	<select>
		<option >ملكية منغعة</option>
		<option>ملكية عين</option>
		<select/> <br>
		<label>الغرض</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select>
		<option >سكني</option>
		<option>تجاري</option>
		<option>زراعي</option>
		<option>صناعي</option>
		<select/><br>
		<label>الدرجة</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select>
		<option >الاولى</option>
		<option>الثانية</option>
		<option>الثالثة</option>
		
		<select/><br>
		<label>تاريخ فتح السجل</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<label> يوم</label>
	<select>
		<option >1</option>
		<option>2</option>
		<option>3</option>
		<option >4</option>
		<option>5</option>
		<option >6</option>
		<option>7</option>
		<option >8</option>
		<option>9</option>
		<option>10</option>
		<option >11</option>
		<option>12</option>
		<option >13</option>
		<option>14</option>
		<option >15</option>
		<option>16</option>
		<option>17</option>
		<option >18</option>
		<option>19</option>
		<option >20</option>
		<option>21</option>
		<option >22</option>
		<option>23</option>
		<option>24</option>
		<option >25</option>
		<option>26</option>
		<option >27</option>
		<option>28</option>
		<option >29</option>
		<option>30</option>
		<option>31</option>
	
		
		<select/>
		<label> شهر</label>
		<select>
		<option>1</option>
	    <option>2</option>
   		<option>3</option>
  		<option>4</option>
  		<option>5</option>
  		<option>6</option>
  		<option>7</option>
  		<option>8</option>
		<option>9</option>
  		<option>10</option>
  		<option>11</option>
 		<option>12</option>
		
		<select/>
		<label> سنة</label>
		<select>
		<option >1990</option>
		<option>1991</option>
		<option>1992</option>
		<option>1993</option>
		<option>1994</option>
		<option>1995</option>
		<option>1996</option>
		<option>1997</option>
		<option>1998</option>
		<option>1999</option>
		<option>2000</option>
		<option>2001</option>
		<option>2002</option>
		<option>2003</option>
		<option>2004</option>
		<option>2005</option>
		<option>2006</option>
		<option>2007</option>
	    <option>2008</option>
		<option>2009</option>
     	<option>2010</option> 
		<option>2011</option>
		<option>2012</option>
		<option>2013</option>
		<option>2014</option>
		<select/><br>
		<label>نمرة العقد</label>&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="7"/><br>
		<label>نوع المدة</label>&nbsp&nbsp&nbsp&nbsp
	<select>
		<option >مدة ابتدائية</option>
		<option>مدة نهائية</option>
		<select/> <br>
		<label>تاريخ العقد</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<label> يوم</label>
	<select>
		<option >1</option>
		<option>2</option>
		<option>3</option>
		<option >4</option>
		<option>5</option>
		<option >6</option>
		<option>7</option>
		<option >8</option>
		<option>9</option>
		<option>10</option>
		<option >11</option>
		<option>12</option>
		<option >13</option>
		<option>14</option>
		<option >15</option>
		<option>16</option>
		<option>17</option>
		<option >18</option>
		<option>19</option>
		<option >20</option>
		<option>21</option>
		<option >22</option>
		<option>23</option>
		<option>24</option>
		<option >25</option>
		<option>26</option>
		<option >27</option>
		<option>28</option>
		<option >29</option>
		<option>30</option>
		<option>31</option>
	
		
		<select/>
		<label> شهر</label>
		<select>
		<option>1</option>
	    <option>2</option>
   		<option>3</option>
  		<option>4</option>
  		<option>5</option>
  		<option>6</option>
  		<option>7</option>
  		<option>8</option>
		<option>9</option>
  		<option>10</option>
  		<option>11</option>
 		<option>12</option>
		
		<select/>
		<label> سنة</label>
		<select>
		<option >1990</option>
		<option>1991</option>
		<option>1992</option>
		<option>1993</option>
		<option>1994</option>
		<option>1995</option>
		<option>1996</option>
		<option>1997</option>
		<option>1998</option>
		<option>1999</option>
		<option>2000</option>
		<option>2001</option>
		<option>2002</option>
		<option>2003</option>
		<option>2004</option>
		<option>2005</option>
		<option>2006</option>
		<option>2007</option>
	    <option>2008</option>
		<option>2009</option>
     	<option>2010</option> 
		<option>2011</option>
		<option>2012</option>
		<option>2013</option>
		<option>2014</option>
		<select/><br>
		<label>الإيجارت السنوية</label>&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="7"/><br>
	
	<label>ملاحظات</label> <br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <textarea type="text" rows="5" cols="25"></textarea><br><br>
	<input type="submit"  value="حفظ" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="تعديل" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="حذف" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	</h5>
</div>
  
  
	<div id="n2" style="display:none; background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
	<form>
     <h3>السجل التاريخي للقطعة: </h3> 
	 <h4>
	<label>رقم الإجراء</label>&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="7"/><br>
	<label>نوع الإجراء </label>
	<select>
		<option >مدة إبتدائية</option>
		<option>تنازل</option>
		<option>هبة</option>
		<option>رهن</option>
		<option>تصحيح إسم</option>
		<option>مبادلة</option>
		<option>ورثة</option>
		<option>حكم محكمة</option>
		<select/> <br>
		
		<label>تاريخ السجل</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<label> يوم</label>
	<select>
		<option >1</option>
		<option>2</option>
		<option>3</option>
		<option >4</option>
		<option>5</option>
		<option >6</option>
		<option>7</option>
		<option >8</option>
		<option>9</option>
		<option>10</option>
		<option >11</option>
		<option>12</option>
		<option >13</option>
		<option>14</option>
		<option >15</option>
		<option>16</option>
		<option>17</option>
		<option >18</option>
		<option>19</option>
		<option >20</option>
		<option>21</option>
		<option >22</option>
		<option>23</option>
		<option>24</option>
		<option >25</option>
		<option>26</option>
		<option >27</option>
		<option>28</option>
		<option >29</option>
		<option>30</option>
		<option>31</option>
	
		
		<select/>
		<label> شهر</label>
		<select>
		<option>1</option>
	    <option>2</option>
   		<option>3</option>
  		<option>4</option>
  		<option>5</option>
  		<option>6</option>
  		<option>7</option>
  		<option>8</option>
		<option>9</option>
  		<option>10</option>
  		<option>11</option>
 		<option>12</option>
		
		<select/>
		<label> سنة</label>
		<select>
		<option >1990</option>
		<option>1991</option>
		<option>1992</option>
		<option>1993</option>
		<option>1994</option>
		<option>1995</option>
		<option>1996</option>
		<option>1997</option>
		<option>1998</option>
		<option>1999</option>
		<option>2000</option>
		<option>2001</option>
		<option>2002</option>
		<option>2003</option>
		<option>2004</option>
		<option>2005</option>
		<option>2006</option>
		<option>2007</option>
	    <option>2008</option>
		<option>2009</option>
     	<option>2010</option> 
		<option>2011</option>
		<option>2012</option>
		<option>2013</option>
		<option>2014</option>
		<select/><br>
		
	
	<label>بيانات الإجراء</label> <br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <textarea type="text" rows="5" cols="25"></textarea><br><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit"  value="حفظ" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="تعديل" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="حذف" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	</h4>
</div>
	
	
	
	
	
	<div id="n3" style="display:none;background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
	<form>
     <h3> بيانات المالك  </h3> 
	 <h5>
	 <input type="checkbox" name="gov" value="gov">حكومة السودان<br>
	<label>إسم المالك</label>&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="7"/><br>
	  <label>الجنس  </label>
	<input type="radio" id="male" name="male" value="male">
     <label>ذكر</label>
	<input type="radio" id="female" name="female" value="female">
	<label>انثى</label>
					<br>
					
					<label> تاريخ الميلاد</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<label> يوم</label>
	<select>
		<option >1</option>
		<option>2</option>
		<option>3</option>
		<option >4</option>
		<option>5</option>
		<option >6</option>
		<option>7</option>
		<option >8</option>
		<option>9</option>
		<option>10</option>
		<option >11</option>
		<option>12</option>
		<option >13</option>
		<option>14</option>
		<option >15</option>
		<option>16</option>
		<option>17</option>
		<option >18</option>
		<option>19</option>
		<option >20</option>
		<option>21</option>
		<option >22</option>
		<option>23</option>
		<option>24</option>
		<option >25</option>
		<option>26</option>
		<option >27</option>
		<option>28</option>
		<option >29</option>
		<option>30</option>
		<option>31</option>
	
		
		<select/>
		<label> شهر</label>
		<select>
		<option>1</option>
	    <option>2</option>
   		<option>3</option>
  		<option>4</option>
  		<option>5</option>
  		<option>6</option>
  		<option>7</option>
  		<option>8</option>
		<option>9</option>
  		<option>10</option>
  		<option>11</option>
 		<option>12</option>
		
		<select/>
		<label> سنة</label>
		<input type="text"  value=" "size="4"/><br>
	<label>نوع إثبات الشخصية</label>
	<select>
		<option >بطاقة شخصية</option>
		<option>جنســية</option>
		<option>رقم وطني</option>
		<select/> <br>
		<label>رقم إثبات الشخصية</label>
		<input type="text"  value=" "size="4"/><br>
		<label>  تاريخ الإصدار</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<label> يوم</label>
	<select>
		<option >1</option>
		<option>2</option>
		<option>3</option>
		<option >4</option>
		<option>5</option>
		<option >6</option>
		<option>7</option>
		<option >8</option>
		<option>9</option>
		<option>10</option>
		<option >11</option>
		<option>12</option>
		<option >13</option>
		<option>14</option>
		<option >15</option>
		<option>16</option>
		<option>17</option>
		<option >18</option>
		<option>19</option>
		<option >20</option>
		<option>21</option>
		<option >22</option>
		<option>23</option>
		<option>24</option>
		<option >25</option>
		<option>26</option>
		<option >27</option>
		<option>28</option>
		<option >29</option>
		<option>30</option>
		<option>31</option>
	
		
		<select/>
		<label> شهر</label>
		<select>
		<option>1</option>
	    <option>2</option>
   		<option>3</option>
  		<option>4</option>
  		<option>5</option>
  		<option>6</option>
  		<option>7</option>
  		<option>8</option>
		<option>9</option>
  		<option>10</option>
  		<option>11</option>
 		<option>12</option>
		
		<select/>
		<label> سنة</label>
		<input type="text"  value=" "size="4"/><br>
		<label>نهاية الصلاحية</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<label> يوم</label>
	<select>
		<option >1</option>
		<option>2</option>
		<option>3</option>
		<option >4</option>
		<option>5</option>
		<option >6</option>
		<option>7</option>
		<option >8</option>
		<option>9</option>
		<option>10</option>
		<option >11</option>
		<option>12</option>
		<option >13</option>
		<option>14</option>
		<option >15</option>
		<option>16</option>
		<option>17</option>
		<option >18</option>
		<option>19</option>
		<option >20</option>
		<option>21</option>
		<option >22</option>
		<option>23</option>
		<option>24</option>
		<option >25</option>
		<option>26</option>
		<option >27</option>
		<option>28</option>
		<option >29</option>
		<option>30</option>
		<option>31</option>
	
		
		<select/>
		<label> شهر</label>
		<select>
		<option>1</option>
	    <option>2</option>
   		<option>3</option>
  		<option>4</option>
  		<option>5</option>
  		<option>6</option>
  		<option>7</option>
  		<option>8</option>
		<option>9</option>
  		<option>10</option>
  		<option>11</option>
 		<option>12</option>
		
		<select/>
		<label> سنة</label>
		<input type="text"  value=" "size="4"/><br>
		
		<label>مكان الإصدار</label>&nbsp&nbsp&nbsp
	<select>
		
		<option>الخرطوم</option>
		<option>أمدرمان</option>
		<option>بحري</option>
	    <option>الحاج يوسف</option>
		
	</select>
	<br>
		<label>العنوان</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text"  value=" "size="7"/><br>
		
		<label>أهلية المالك</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select>
		<option >عاقل</option>
		<option>قاصر</option>
		<option>مجنون</option>
		<select/><br>
		<label>جنسية المالك</label>&nbsp&nbsp&nbsp&nbsp
	<select>
		<option >سوداني</option>
		<option>سعودي</option>
		<option>أثيوبي</option>
		<option>صومالي</option>
		<option>تشادي</option>
		<option>صيني</option>
		
		<select/><br>
		<label>مساحة المالك </label>&nbsp&nbsp&nbsp
		<input type="text"  value=" "size="7"/><br>
		<label>هاتف المالك</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text"  value=" "size="7"/><br>
	
	&nbsp&nbsp <label>ملاحظات</label> <br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <textarea type="text" rows="5" cols="25"></textarea><br><br>
	<input type="submit"  value="حفظ" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="تعديل" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="حذف" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="إضافة مالك اخر" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	</h5>
</div>

	
	
	
	<div id="n4" style="display:none;background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
	<form>
	
     <h3>بيانات الوثائق </h3> 
	 <h4>
<br><br>
	<label>نوع الوثيقة</label>
	<select>
		<option >إعلام شرعي</option>
		<option> عقد تنازل</option>
		<option>عقد إيجار</option>
		<option>حجز</option>
		<option>نقل إيجارة</option>
		<option>توكيل</option>
		<option>رهن</option>
		<option>تابع عقد إيجار</option>
		<select/> <br><br>
		<label>موقع تخزين الوثيقة</label>
		<select>
		<option >الأرشيف</option>
		<select/><br><br>
		<label> إختيار الوثيقة</label>
		<input type="text"  value=" "size="7"/>
		<input type="submit"  value="browse..."><br><br>
	
	
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit"  value="حفظ" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="تعديل" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="حذف" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="إضافة وثيقة أخرى" >
	</h4>
</div>

	
	<div id="n5" style="display:none;background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
	<form>
     <h3> بيانات القيد  </h3> 
	 <h5>
	
	<label>المالك</label>&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="15"/><br>
	  
					
	<label> تاريخ القيد</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<label> يوم</label>
	<select>
		<option >1</option>
		<option>2</option>
		<option>3</option>
		<option >4</option>
		<option>5</option>
		<option >6</option>
		<option>7</option>
		<option >8</option>
		<option>9</option>
		<option>10</option>
		<option >11</option>
		<option>12</option>
		<option >13</option>
		<option>14</option>
		<option >15</option>
		<option>16</option>
		<option>17</option>
		<option >18</option>
		<option>19</option>
		<option >20</option>
		<option>21</option>
		<option >22</option>
		<option>23</option>
		<option>24</option>
		<option >25</option>
		<option>26</option>
		<option >27</option>
		<option>28</option>
		<option >29</option>
		<option>30</option>
		<option>31</option>
	
		
		<select/>
		<label> شهر</label>
		<select>
		<option>1</option>
	    <option>2</option>
   		<option>3</option>
  		<option>4</option>
  		<option>5</option>
  		<option>6</option>
  		<option>7</option>
  		<option>8</option>
		<option>9</option>
  		<option>10</option>
  		<option>11</option>
 		<option>12</option>
		
		<select/>
		<label> سنة</label>
		<input type="text"  value=" "size="4"/><br>
	<label>نوع القيد</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select>
		<option >تصرف بأمر من مالك</option>
		<option>تصرف بأمر من الحكومة</option>
		<select/> <br>
		<label>مساحة المالك</label>&nbsp&nbsp&nbsp&nbsp
		<input type="text"  value=" "size="7"/><br>
		<label>المساحة المقيدة</label>&nbsp
		<input type="text"  value=" "size="7"/><br>
		<label>قيمة القيد</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text"  value=" "size="7"/><br>
		
	&nbsp&nbsp <label>بيانات </label> <br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <textarea type="text" rows="5" cols="25"></textarea><br><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit"  value="حفظ" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="تعديل" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="حذف" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
	</h5>
</div>

<div id="n6" style="display:none;background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
	<form>
     <h3> التقرير  </h3> 
	 <h5>				
	<label> تاريخ التقرير</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<label> يوم</label>
	<select>
		<option >1</option>
		<option>2</option>
		<option>3</option>
		<option >4</option>
		<option>5</option>
		<option >6</option>
		<option>7</option>
		<option >8</option>
		<option>9</option>
		<option>10</option>
		<option >11</option>
		<option>12</option>
		<option >13</option>
		<option>14</option>
		<option >15</option>
		<option>16</option>
		<option>17</option>
		<option >18</option>
		<option>19</option>
		<option >20</option>
		<option>21</option>
		<option >22</option>
		<option>23</option>
		<option>24</option>
		<option >25</option>
		<option>26</option>
		<option >27</option>
		<option>28</option>
		<option >29</option>
		<option>30</option>
		<option>31</option>
	
		
		<select/>
		<label> شهر</label>
		<select>
		<option>1</option>
	    <option>2</option>
   		<option>3</option>
  		<option>4</option>
  		<option>5</option>
  		<option>6</option>
  		<option>7</option>
  		<option>8</option>
		<option>9</option>
  		<option>10</option>
  		<option>11</option>
 		<option>12</option>
		
		<select/>
		<label> سنة</label>
		<input type="text"  value=" "size="4"/><br>
	<label>عنوان التقرير</label>&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="15"/><br>
	
	&nbsp&nbsp <label>الموضوع </label> <br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <textarea type="text" rows="20" cols="35"></textarea><br><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit"  value="إرسال" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="تعديل" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="حذف" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
	</h5>
</div>

	
	<div id="n7" style="display:none;background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
	<form name="addemp" method="post" action="addemp.php">
     <h3> إضافة موظف جديد  </h3> 
	 <h5>				
	
	<label> اسم الموظف</label>&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="15" name="empname"/><br><br>
	<label>كلمة السر</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="15"name="emppass"/><br><br>
	<br><br>
	
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit"  value="إضافة" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="تعديل" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="إالغاء" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
	</h5>
</div>
<div id="n8" style="display:none;background-color:yellow;width:510;height:550;margin-top:-310px;margin-right:480px">
	<form>
     <h3> حذف موظف   </h3> 
	 <h5>				
	
	<label> اسم الموظف</label>&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="15"/><br><br>
	<label>كلمة السر</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="15"/><br><br>
	
	<br><br>
	
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit"  value="حذف" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="تعديل" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="إالغاء" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
	</h5>
</div>
	
	
	<div id="n9" style="display:none;background-color:gray;width:510;height:550;margin-top:-300px;margin-right:480px">
	<form>
     <h3> تغيير كلمة السر  </h3> 
	 <h5>				
	
	<label> أدخل كلمة السر القديمة</label>&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="15"/><br><br>
	<label>أدخل كلمة السر الجديدة</label>&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="15"/><br><br>
	<label>كرر كلمة السر الجديدة</label>&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="text"  value=" "size="15"/><br><br>
	<br><br>
	
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit"  value="تغيير" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="تعديل" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"  value="إالغاء" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
	</h5>
</div>
	
	
<div id="footer"style="background-color:green;width:1330;height:100;margin-right:-50px">
		
		
		<p align="center"> Posted by: Mohammed Ali</p><br>
		</div><!--footer--><!--footer-->

</body>
</div>
</html>