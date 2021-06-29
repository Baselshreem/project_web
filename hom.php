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
		 <img src="cccc.jpg" alt="Smiley face" height="200px" width="100%"> 
	
        
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
 	
 

<a href="notf.php"><div id="b" style="text-align: center;">الاشعارات  
            <div style="display: none;"> <?php include("notf.php") ?></div><?php echo $count; ?></div></a>
        <a href="basket.php"><div id="b" style="text-align: center;"> السلة</div></a>
	<a href="basketok.php"><div id="b" style="text-align: center;"> سلة المشتريات</div></a>



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
	<?php echo $countad; ?>
 </div></a>
<a href="terms.php"><div id="b" style="text-align: center;">التعليمات</div></a>	

<a href="logout.php"><div id="b" style="text-align: center;">تسجيل خروج</div></a>

</div>

</div>
<div id="data"> 
	<div id="data"> 
<div style="display: none;"><?php include("not.php")?></div>

<?php include("contact.php")?>

 
<div style="display: none;"><?php include("not.php")?></div>

<?php include("contact.php")?>
	<?php





$sql = "SELECT * FROM prodect  where 1;";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	 echo "ddjjjjjj";
 

       echo '
pay
       <form action="pay.php? " method="post" style="display: inline;">
             <div id="lnk">'.$row["add"].'
<div id="f"><div id="if"><a href="Upload/'.$row["img"].'">
<img src="Upload/'.$row["img"].'" 
style="width:100%;height:100%;"></a></div><div id="m"><div id="n"> '.$row["name"].'</div>    <div id="p" >'.$row["price"].'</div></div>  </div>
<div style="height: 30px;text-align:center;"><input type="" name="qin" id="teo" >:  الكمية </div>

<div id="c" >  <button type="submit" name="del" value="'.$row['id'].'" style="	height:30px;width: 100%;">
               شراء  </button> <br>
  



</div>
</div> 
</form>';
}
}
 
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