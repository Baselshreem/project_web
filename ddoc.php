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
  <h1 style="text-align: center;">   معلومات العيادة  </h1>

 
<?php include("contact.php")?>
<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$id=$_GET['idd'];
// connect to the database
$sqlin = "SELECT * FROM infdoc where   idd='$id';";
$result = mysqli_query($conn, $sqlin);
//echo $n;
$count=0;
if (mysqli_num_rows($result) > 0) {
  
    // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
      $count++;
       
       echo '<div id="log" style="border-style: none;">

<form method="post" >
  
 

<br>
<div id="b">  اسم  العيادة : '.$row['name'].'</div> <br>
<div id="b">  المدينة /البلدة :'.$row['contry'].' </div> <br>
<div id="b">    بقرب من : '.$row['betwen'].'</div> 
<div id="b" style="margin-right: 208px;">  الحي الشارع :'.$row['stret'].'  </div>  <br>
 

<div id="b"> رقم الجوال :'.$row['phone'].' </div><br>

<div id="b"> رقم الهاتف : '.$row['telp'].'</div><br>

<div id="b">  ايام العمل :'.$row['days'].' </div><br>
<div id="b">  ساعات العمل :'.$row['hour'].' </div><br>

 <br>
 
   <hr>
 
</form>

</div>
 ';
 }}
 
?>

<div id="b" style="text-align: center;"onclick="history.back()">الرجوع لصفحة الرئيسية</div>
</div>
</body>
</html>