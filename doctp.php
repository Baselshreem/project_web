<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="ss.css">
</head>
	<div id="basil">write a code by basilshraim</div>
<body>

<div id="led">
	

	<div id="ad">
		<div id="right">f</div>
		<div id="left">f</div>
		<div id="mad"><br><br><marquee><p > موقع لمسة موقع خاص بمدينة قلقيلية</p></marquee></div>
        
	</div>
<br>
<div id="bn">
	
<div id="but">
<a ><div id="b"><div style="display: none;"><?php include("log.php")?></div>
			
				اسم المستخدم:  <?php

				
				echo $_SESSION['name'];

				//echo $username;
				?></div></a>	
<a ><div id="b">الرصيد : 
<?php

				echo $_SESSION['mony'];
				
				//echo $username;
				?>
</div></a>	
<a href="marct.php"><div id="b" style="text-align: center;">قائمة المحلات


	</div></a>	

<a href="notf.php"><div id="b" style="text-align: center;">الاشعارات  
            <div style="display: none;"> <?php include("notf.php") ?></div><?php echo $count; ?></div></a>
	<a href="basket.php"><div id="b" style="text-align: center;"> سلة  المشتريات</div></a>



</div>

<!--juuuuu  -->

<div id="bt" style="text-align: left;">
	
<a ><div id="b">المنطقة :<?php

				
echo $_SESSION['location'];
?></div></a>
 

<a href="contactus.php"><div id="b" style="text-align: center;">تواصلو معنا</div>	</a>
<a href="complaint.php"><div id="b" style="text-align: center;">اقتراحات وشكاوي</div></a>	
<a href="advertisement.php" style="text-decoration:none;"><div id="b" style="text-align: center;">اعلانات  
	<div style="display: none;"><?php include("advertisement.php")?></div>
	<?php echo $count; ?>
 </div></a>
<a href="terms.php"><div id="b" style="text-align: center;">التعليمات</div></a>	

<a href="log.php"><div id="b" style="text-align: center;">تسجيل خروج</div></a>

</div>

</div>
 
<div id="data"> 
<div style="display: none;"><?php include("not.php")?></div>
<?php include("contact.php")?>
	<?php

 $id=$_GET['idd'];
 $namem = $_GET['namem'];
 echo $id;
 $idm=$_SESSION['idm'];
 $stat=$_SESSION['stat'];

 echo '<div id="b" style="text-align: center;width: 100%;">    '. $namem.'
  </div>

<br><br><br>
 <a href="reservation.php?idd='.$id.'"><div id="b" style="text-align: center;margin-left:50%; display: inline-block;">حجز


	</div></a>	

<a href="ddoc.php?idd='.$id.'"><div id="b" style="text-align: center;margin-left:50%;display: inline-block;">معلومات العيادة


	</div></a>	
';
 
 $sql = "SELECT * FROM userd where id='$id'; ";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

echo "dd";

echo '
<a href="Upload/'.$row["img"].'">
<img src="Upload/'.$row["img"].'" 
style="width:100%;height:100%;"></a>';

}}

mysqli_close($conn);
 
?>
 
</div>


</div>


</body>
</html>