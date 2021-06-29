 <!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title></title>
	<script src="j.js"></script>
	<link rel="stylesheet" type="text/css" href="ss.css">
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
  <div id="basil">write a code by basilshraim</div>
<body >

<div id="led">

<h1 style="text-align: center;"> </h1>
<br>
<br>
<br>
<div id="t" style="background-color: red;text-align: center;">شكرا لشرائكم سوف نقوم بتوصيل مشترياتكم في اسرع وقت</div>

<div style="display: none;"><?php include("log.php")?></div>
<?php include("contact.php")?>

<?php 
$f=$_GET["id"];
$sql = "UPDATE `notf` SET `stat` = 'red' WHERE `id` = '$f';";
    
$result = mysqli_query($conn, $sql);
echo $f;
  date_default_timezone_set("Asia/Jerusalem");
$dat=date(DATE_RFC822);
$stat=$_SESSION['stat'];
$na= $_SESSION['name'];
echo $stat;
 $sqlm = "SELECT * FROM notf where id='$f';";
$resm = mysqli_query($conn, $sqlm);
//echo $n;

if (mysqli_num_rows($resm) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($resm)) {
      
     $mony=$row['mony'];
     $u=$row['idu'];
     $stat=$row['state'];
     $nam=$row['name'];
    }}

echo $mony;

echo $u;
if($stat=='per'){
 $sql = "SELECT * FROM userp where id='$u';";

$resu = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($resu) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($resu)) {
      
      $monyp=$row["mony"];
    }}
    $monyp=$monyp+$mony;

echo $monyp;

$quer="INSERT INTO `notf`(`id`, `text`, `stat`, `date`, `idm`, `idmo`, `idu`, `mony`,`state`,`name`) VALUES (NULL,'ans mony acp','unred','$dat','0','2','$u','$mony','$stat','$nam')";
      mysqli_query($conn, $quer);
$sm = "UPDATE `userp` SET `mony` = '$monyp' WHERE `id` = $u;";
 mysqli_query($conn, $sm);


}

if($stat=='sal'){
 $sql = "SELECT * FROM users where id='$u';";

$resu = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($resu) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($resu)) {
      
      $monys=$row["mony"];
    }}
    $monys=$monys+$mony;

echo $monys;
$quer="INSERT INTO `notf`(`id`, `text`, `stat`, `date`, `idm`, `idmo`, `idu`, `mony`,`state`,`name`) VALUES (NULL,'ans mony acp','unred','$dat','0','2','$u','$mony','$stat','$nam')";
      mysqli_query($conn, $quer);

$sm = "UPDATE `users` SET `mony` = '$monys' WHERE `id` = $u;";
 mysqli_query($conn, $sm);




}


 ?>