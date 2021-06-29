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
		<div id="right"><img src="br.png" alt="Smiley face" height="200px" width="100%"></div>
		<div id="left"><img src="bl.png" alt="Smiley face" height="200px" width="100%"></div>
		<div id="mad"><br><br><marquee><p > موقع لمسة موقع خاص بمدينة قلقيلية</p></marquee></div>
        
	</div>
<br>
 
<div id="bn">
	
<div id="but">
<a ><div id="b"><div style="display: none;"><?php include("log.php")?></div>
			
				اسم المستخدم:  <?php

			
				echo $_SESSION['namem'];

				//echo $username;
				?></div></a>	
<a ><div id="b">الرصيد : 
<?php

				echo $_SESSION['mony'];
				
				//echo $username;
				?>
</div></a>	

<a ><div id="b"><div style="display: none;"><?php include("log.php")?></div>
			
				اسم المحل:  <?php

			
				echo $_SESSION['name'];

				//echo $username;
				?></div></a>	


<a href="marct.php"><div id="b" style="text-align: center;">قائمة المحلات


	</div></a>
<a href="dector.php"><div id="b" style="text-align: center;">قائمة العيادات
</div></a>
	<a href="rt.php"><div id="b" style="text-align: center;">طلب تكسي
</div></a>

<a href="notf.php"><div id="b" style="text-align: center;">الاشعارات  
            <div style="display: none;"> <?php include("notf.php") ?></div><?php echo $count; ?>
        </div></a>
       <a href="notfs.php"><div id="b" style="text-align: center;"> اشعارات طلبات

<div style="display: none;"> <?php include("notfs.php") ?></div><?php echo $count; ?>



	</div></a>


	<a href="basket_salary.php"><div id="b" style="text-align: center;"> سلة المبيعات   

	</div></a>



	 <a href="basket.php"><div id="b" style="text-align: center;"> السلة</div></a>
	<a href="basketok.php"><div id="b" style="text-align: center;"> سلة المشتريات</div></a>

<a href="insert_prodect.php"><div id="b" style="text-align: center;"> اضافة منتج</div></a>
<a href=" fsal.php"><div id="b" style="text-align: center;">   معلومات المحل</div></a>

</div>
<br><br>
<!--juuuuu  -->

<div id="bt" style="text-align: left;">
 
 <div id="b" style=" height:50px; ">
<?php    date_default_timezone_set("Asia/Jerusalem");
$dat=date(DATE_RFC822);
echo $dat; ?>
</div>		
<a ><div id="b">المنطقة :<?php

				
echo $_SESSION['location'];
?></div></a>


<a href="contactus.php"><div id="b" style="text-align: center;">تواصلو معنا</div>	</a>
<a href="complaint.php"><div id="b" style="text-align: center;">اقتراحات وشكاوي</div></a>	
<a href="advertisement.php" style="text-decoration:none;"><div id="b" style="text-align: center;">اعلانات  
	<div style="display: none;"><?php include("advertisement.php")?></div>
	<?php echo $countad; ?>
 </div></a>
<a href="terms.php"><div id="b" style="text-align: center;">التعليمات</div></a>
<a href="logout.php"><div id="b" style="text-align: center;">تسجيل خروج</div></a>

</div>

</div>
<br><br><br>
<div id="data"> 
<div style="display: none;"><?php include("not.php")?></div>

<?php include("contact.php")?>
	<?php

$id=$_SESSION['id'];
 
echo $id;
$sql = "SELECT * FROM prodect where idu='$id';";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$image = $row['img'];
      

       echo '

       <form     method="post" style="display: inline;">
             <div id="lnk">
<div id="f"><div id="if">
<a href="Upload/'.$row["img"].'">
<img src="Upload/'.$image.'" 
style="width:100%;height:100%;"></a>

</div><div id="m"><div id="n"> '.$row["name"].'</div>    <div id="p" >'.$row["price"].'</div></div>  
 

</div>
 <div id="c" > 
 <button " name="ed" value="'.$row['id'].'" style="	height:30px; "><a href="updet.php?id='.$row['id'].'">  تعديل    </a></button> 
<button   name="do" value="'.$row['id'].'" style="	height:30px; ">   حذف  </button>
</div> 
</div>
</form>

 
';
 

    }
 

} 



  if(isset($_POST['do'])){
$b= $_POST['do'];
echo "fjfjjfjjfj";
echo $b;
$sql = "DELETE  FROM `prodect` WHERE id='$b';";
$result = mysqli_query($conn, $sql);
}

else {


    echo "0 results";
}

mysqli_close($conn);
?>


</div>
<div style="width: 100%;height: 30px;background-color:  #ecb390;;text-align: center;">
	<div style="text-align: right;"> design by :<a href="https://www.facebook.com/profile.php?id=100009943297669">Baselshrim </a></div>
	<div style="width: 100%;height: 30px;background-color:  #ecb390;;text-align: center;">

		@كافة الحقوق محفوظة 2020

	</div>
</div>

</div>


</body>
</html>