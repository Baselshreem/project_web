<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
		
.image-upload > input
{
    display: none;
}

.image-upload img
{
    width: 80px;
    cursor: pointer;
}

	</style>
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

			
				echo $_SESSION['name'];

				//echo $username;
				?></div></a>	
<a ><div id="b">الرصيد : 
<?php

				echo $_SESSION['mony'];
				
				//echo $username;
				?>
</div></a>	
<a ><div id="b"><div style="display: none;"><?php include("log.php")?></div>
			
				 اسم الشركة :<?php

			
				echo $_SESSION['namem'];

				//echo $username;
				?></div></a>


<a href="marct.php"><div id="b" style="text-align: center;">قائمة المحلات

	</div></a>

<a href="dector.php"><div id="b" style="text-align: center;">قائمة العيادات
</div></a>
	<a href="rt.php"><div id="b" style="text-align: center;">طلب تكسي
</div></a>	
	
	 <a href="basket.php"><div id="b" style="text-align: center;"> السلة</div></a>
	<a href="basketok.php"><div id="b" style="text-align: center;"> سلة المشتريات</div></a>			
<a href="notf.php"><div id="b" style="text-align: center;">الاشعارات  
            <div style="display: none;"> <?php include("notf.php") ?></div><?php echo $count; ?>
        </div></a>


	



	<a href="baskettu.php"><div id="b" style="text-align: center;"> طلبات شحن</div></a>
 

</div>

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
	<?php echo $count; ?>
 </div></a>
<a href="terms.php"><div id="b" style="text-align: center;">التعليمات</div></a>
<a href="log.php"><div id="b" style="text-align: center;">تسجيل خروج</div></a>

</div>

</div>
<div id="data"> 
<div style="display: none;"><?php include("not.php")?></div>

<?php include("contact.php")?>

<div style="width: 100%;height:1000px;">

<form method="post" enctype='multipart/form-data'>
<div class="image-upload">
    <label for="file-input">
        <img src="add.png"/>
    </label>


    <input id="file-input" name="f" type="file"/>
 

    <div id="b" style="text-align: center;"><input type="submit" name="sav" value=" حفظ  "></div><br>
</div>

</form>

	<?php 

if(isset($_POST['sav'])){


 $picture_name=$_FILES['f']['name'];
$picture_type=$_FILES['f']['type'];
$picture_tmp_name=$_FILES['f']['tmp_name'];
$picture_size=$_FILES['f']['size'];




if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
   if($picture_size<=50000000)
   
    
      $pic_name=time()."_".$picture_name;
  echo $pic_name;
$sqli = "UPDATE `usertu` SET `img` = '$pic_name' WHERE `id` = $id;";
$result = mysqli_query($conn, $sqli);


  move_uploaded_file($picture_tmp_name,"Upload/".$pic_name);   
echo "تمت عملية اضافة خلفية ";
}}

$sql = "SELECT * FROM userc where id='$id'; ";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {



echo '
<a href="Upload/'.$row["img"].'">
<img src="Upload/'.$row["img"].'" 
style="width:100%;height:100%;"></a>';

}}
	?>


</div>
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