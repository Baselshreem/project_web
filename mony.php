<!DOCTYPE>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="ss.css">
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
	<div id="basil">write a code by basilshraim</div>
<body>

<div id="led">

<h1 style="text-align: center;">الاشعارات</h1>
<br>
<br>
<br>

<div id="data">
	<?php include("contact.php")?>
	<div style="display: none;"><?php include("log.php")?></div>
	<?php
$id= $_SESSION['id'];
  date_default_timezone_set("Asia/Jerusalem");
$dat=date(DATE_RFC822);


$sql = "SELECT * FROM `notf` WHERE idmo='2'  and text='mony req';";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	 $state=$row['stat'];
     if($state=='red'){

       echo '
          <form method="post" >
       <div id="not"><a href="show.php?id='.$row["id"].' "><div id="notp" style="background-color:#F48C1D;"> لقد قام '.$row["idu"].' بطلب شحن '.$row["mony"].'</div></a> <div id="notc"> <button name="notc" style="width:100% ;height: 20px;background-color: red;" value="'.$row['id'].'"> رفض </button>  </div> <a href="s.php?id='.$row["id"].'"><div id="nota" >قبول</div></a></div>

</form>
       ';
}

 if($state=='unred'){ 

 echo '
          <form method="post" >
       <div id="not"><a href="show.php?id='.$row["id"].' "><div id="notp" style="background-color:#ecb390;"> لقد قام '.$row["idu"].' بطلب شحن '.$row["mony"].'</div></a> <div id="notc"> <button name="notc" style="width:100% ;height: 20px;background-color: red;" value="'.$row['id'].'"> رفض </button>  </div> <a href="s.php?id='.$row["id"].'"><div id="nota" >قبول</div></a></div>

</form>
       ';
}


    $u=$row['idu'];

    }

if(isset($_POST['not'])){
$b= $_POST['not'];

 $sql = "UPDATE `notf` SET `stat` = 'red' WHERE `id` = '$b';";
    $result = mysqli_query($conn, $sql);
$sqlc = "SELECT * FROM `notf` WHERE id='$b';";
$resultc = mysqli_query($conn, $sqlc);
//echo $n;

if (mysqli_num_rows($resultc) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($resultc)) {
       $sn=$row['state'];
$nn=$row['name'];
}}

$quer="INSERT INTO `notf`(`id`, `text`, `stat`, `date`, `idm`, `idmo`, `idu`, `mony`,`state`,`name`) VALUES (NULL,'ans mony acp','unred','$dat','0','2','$u','0','$sn','$nn')";
      mysqli_query($conn, $quer);
}

if(isset($_POST['notc'])){
$b= $_POST['notc'];
echo "d";

$sql = "UPDATE `notf` SET `stat` = 'red' WHERE `id` = '$b';";
    
$result = mysqli_query($conn, $sql);
$sqlc = "SELECT * FROM `notf` WHERE id='$b';";
$resultc = mysqli_query($conn, $sqlc);
//echo $n;

if (mysqli_num_rows($resultc) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($resultc)) {
       $sn=$row['state'];
$nn=$row['name'];
}}

echo "string";
$quer="INSERT INTO `notf`(`id`, `text`, `stat`, `date`, `idm`, `idmo`, `idu`, `mony`,`state`,`name`) VALUES (NULL,'ans mony cans','unred','$dat','0','2','$u','0','$sn','$nn')";
      mysqli_query($conn, $quer);

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





















