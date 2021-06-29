<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="ss.css">

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jun 12, 2020  23:30:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
  var phpadd= add(1,2);
    clearInterval(x);
 document.getElementById("demo").innerHTML = phpadd;
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</head>
	<div id="basil">write a code by basilshraim</div>
<body>
 <p id="demo"></p> 
<div id="led">
	

	<div id="ad">
		<div id="right"><img src="br.png" alt="Smiley face" height="200px" width="100%"></div>
		<div id="left"><img src="bl.png" alt="Smiley face" height="200px" width="100%"></div>
		<div id="mad"><br><br><marquee><p > موقع لمسة موقع خاص بمدينة قلقيلية</p></marquee></div>
        
	</div>
<br>
<div id="bn">
	
<div id="but">
<a ><div id="b"><div style="display: none;"><?php include("log.php")?></div>
			
				اسم المستخدم:  <?php

				echo $_SESSION['id'];
				echo $_SESSION['name'];

				//echo $username;
				?></div></a>
				<a ><div id="b">المنطقة :<?php

				
echo $_SESSION['location'];
?></div></a>	
<a ><div id="b">الرصيد : 
<?php

				echo $_SESSION['mony'];
				
				//echo $username;
				?>
</div></a>	



<a href="notfs.php"><div id="b" style="text-align: center;">الاشعارات  
            <div style="display: none;"> <?php include("notfs.php") ?></div><?php echo $count; ?></div></a>
	

</div>

<!--juuuuu  -->

<div id="bt" style="text-align: left;"> 
	

<a href="mony.php"><div id="b" style="text-align: center;"> طلبات شحن</div>	</a>
<a href="request.php"><div id="b" style="text-align: center;"> طلب شحن</div>	</a>
<a href="request.php"><div id="b" style="text-align: center;"> طلبات الحجز</div>	</a>
<a href="request.php"><div id="b" style="text-align: center;"> الحجوزات</div>	</a>
<a href="mony.php"><div id="b" style="text-align: center;"> طلبات توصيل</div>	</a>
<a href="basket_admin.php"><div id="b" style="text-align: center;"> سلة المبيعات </div></a>


<a href="insert_add.php"><div id="b" style="text-align: center;"> إضافة إعلان</div></a>	

<a href="addc.php"><div id="b" style="text-align: center;"> التحكم في الاعلانات</div></a>	
<a href="userpc.php"><div id="b" style="text-align: center;">مستخدمين الحسابات الشخصية</div></a>
<a href="usersc.php"><div id="b" style="text-align: center;">مستخدمين الحسابات التجارية</div></a>

<a href="userpc.php"><div id="b" style="text-align: center;">مستخدمين حساب مكتب تكسي</div></a>
<a href="usersc.php"><div id="b" style="text-align: center;">مستخدمين حسابات سائق</div></a>
<a href="userd.php"><div id="b" style="text-align: center;">مستخدمين حسابات طبيب</div></a>



<a href="prodectc.php"><div id="b" style="text-align: center;">المنتجات</div></a>
<a href="confc.php"><div id="b" style="text-align: center;">الشكاوي</div></a>
<a href="suggestionc.php"><div id="b" style="text-align: center;">الاقتراحات</div></a>
<a href="marct.php"><div id="b" style="text-align: center;">اسماء المحلات</div></a>
<a href="termsc.php"><div id="b" style="text-align: center;"> سياسة الموقع</div></a>
<a href="msg.php"><div id="b" style="text-align: center;">مراسلات</div></a>	
<a href="msg.php"><div id="b" style="text-align: center;">اضافة ادمن</div></a>	
<a href="logout.php"><div id="b" style="text-align: center;">تسجيل خروج</div></a>



</div>

</div>
 
<div style="display: none;"><?php include("not.php")?></div>

<?php include("contact.php")?>
	<?php
 
function add($a,$b){
  $c=$a+$b;
  return $c;
}



?>
	



</div>


</body>
</html>