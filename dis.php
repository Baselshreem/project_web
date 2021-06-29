<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
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
  <h1 style="text-align: center;">     معلومات المحل</h1>
 
<?php include("contact.php")?>
<?php
session_start();
 $idp = $_GET['idp'];
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

$sql = "SELECT * FROM prodect where id='$idp';";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      
       echo ' 
<div id="b" style="width: 30%; height: 300px;float: left;"><img src="Upload/'.$row['img'].'" 
style="width:100%;height:100%;"> </div>
<div style="width: 20%;background-color: white;height: 250px;float: right;"> 

<div id="b"> '.$row['name'].' اسم المنتج </div><br>
<div id="b"> '.$row['price'].'   السعر</div><br>
<div id="b"> '.$row['qin'].' العدد </div><br>
<div id="b"> '.$row['namem'].' الوصف  </div><br>

</div>';
 }}
?>
</div>
</body>
</html>