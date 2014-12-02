<html>
	<head>
	<link rel="stylesheet" href="/project/css/style.css" type="text/css">

	</head>
	<script type="text/javascript">
		var slideimages=new Array()
		function slideshowimages()
		{
			for (i=0;i<slideshowimages.arguments.length;i++)
			{
				slideimages[i]=new Image()
				slideimages[i].src=slideshowimages.arguments[i]
			}
		}
		
	</script>
	<body dir="rtl" background="ph.jpg">
	<div id="container">
		<div id="s">
		<center><label><h5> بسم الله الرحمن الرحيم <h5></label><center>
		<center><label><h4> جمهورية السودان <h4></label><center>
		<center><label><h2> نظام تسجيلات الأراضي<h2></label><center>
		</div>
		<div id="signin" >
				<form method="POST" action="loginAutentication.php"> 
				<h2><p align ="right"> تسجيل الدخول </p></h2>
				<label >الإسم</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input name="name" id="name" placeholder="الإسم" type="text"><br><br>
				<label  id="labl" for="password">كلمة السر</label> &nbsp
				<input name="password" id="password" placeholder="كلمة السر" type="password"> <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				 <input type="radio" name="manager" value="123"> مدير&nbsp&nbsp&nbsp
			    <input type="radio" name="manager" value="1234" > موظف<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				 <input type="submit" value="login" ><?PHP if(isset($_SESSION['msgerr'])) echo $_SESSION['msgerr']; ?>
				</form>
		</div> 
		<div id="img">
			<img src="a.jpg"  name="slide" width=""><a href="#"></a>
			<script type="text/javascript">
			slideshowimages("a.jpg","b.jpg","c.jpg","d.jpg","e.jpg")
		var slideshowspeed=1500
		var whichimage=0
		function slideit()
	{
		if (!document.images)
        return		
		document.images.slide.src=slideimages[whichimage].src
		if (whichimage<slideimages.length-1)
        whichimage++
		else
        whichimage=0
		setTimeout("slideit()",slideshowspeed)
	}
	slideit()
			</script>
		</div>
		
		<div id="footer">	
			<p align="center"> Posted by: Mohammed Ali</p><br>
		</div>
	</div>
	</body>
</html>