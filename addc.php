<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="ss.css">
</head>
	
<body>
<div id="basil">write a code by basilshraim</div>
<div id="led" >

<h1 style="text-align: center;">إعلانات هامة</h1>
<br>
<br>
<br>

<div id="data">
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
    echo $countad;
    $_SESSION['mm']=$count;

}


$sql = "SELECT * FROM `add` ";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	
     
       echo '<div id="not" style="margin-right: 15%;"><a href="show.php?id='.$row["id"].' "><div id="notp" style="margin-right: 10%;"><p > '.$row["add"].'</p>  '.$row["tex"].'</div></a></div>
      

       ';
    
    }
    

} else {

	
    echo "0 results";
}

mysqli_close($conn);
?>
	


</div>

</div>


</body>
</html>





















