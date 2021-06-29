<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="ss.css">
</head>
	
<body>
<div id="basil">write a code by basilshraim</div>
<div id="led" >

<h1 style="text-align: center;">أعلانات تجارية</h1>
<br>
<br>
<br>
<div style="text-align: center;height:50px;width:100%; ">
<a href="advertisement.php"><div id="b" style="text-align: center;"> الكل</div></a>
<a href="careers.php"><div id="b" style="text-align: center;"> وظائف </div></a>
<a href="joys.php"><div id="b" style="text-align: center;"> رسمية </div></a>
<a href="death.php"><div id="b" style="text-align: center;"> حالات وفاة </div></a>
<a href="formal.php"><div id="b" style="text-align: center;"> أفراح ومناسبات </div></a>
<a href="commercial.php"><div id="b" style="text-align: center;"> تجارية </div></a>


</div>

<br><br><br>
<div id="data" style="text-align: center;">
	<?php include("contact.php")?>
	<div style="display: none;"><?php include("log.php")?></div>
	<?php


$sno ="SELECT * FROM `add` ";
$ren = mysqli_query($conn, $sno);
//echo $n;
	echo '<div id="basil">write a code by basilshraim</div>';
if (mysqli_num_rows($ren) > 0) {
  $countad=0;
    // output data of each row
    while($row = mysqli_fetch_assoc($ren)) {
      $countad++;
    }

    $_SESSION['mm']=$count;

}


$sql = "SELECT * FROM `add` where `type`='commercial';";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	
     


 






 echo '<div id="not" style= "margin-right: 10%; width:30%;height:200px;margin-bottom:50px;overflow: hidden;text-align: center; ">
<a href="add.php?ida='.$row['id'].'"> <p > '.$row["add"].'</p> <br><br> '.$row["tex"].' </a>  </div> 
      

       ';









       
    
    }
    

} else {

	
    echo "0 results";
}

mysqli_close($conn);
?>
	


</div>

</div>
 <div id="b" style="text-align: center;"onclick="history.back()">الرجوع لصفحة الرئيسية</div>

</body>
</html>





















