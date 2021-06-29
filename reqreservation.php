<!DOCTYPE >
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
<body>
 
 <?php include("contact.php")?>
<br><br><br>
  <h1 style="text-align: center;"> طلبات حجز  </h1>

 <div id="led"> 
 <div id="b" style="text-align: center;"onclick="history.back()">الرجوع لصفحة الرئيسية</div>
 
  
 
 
<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$id= $_SESSION['id'];
$count=0;
 $sql = "SELECT * FROM rese where idd='$id';";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
  
    // output data of each row
echo '<div id="log" style="border-style: none;margin-left:30%;">';
    while($row = mysqli_fetch_assoc($result)) {
      $count++;
       echo '  
<div style="text-align: center;width:50%; ">
<br><br><br><br><br><br>
<form method="post" >
<div id="b" style="width: 55%;height: 50px; text-align: center;float:right;"> '.$row['stat'].'   </div><br> <br> <br> 
<div id="b"  style="float:right;"><input type=""  name="name" value="'.$row['name'].'" disabled  >اسم المريض</div><br> <br>
 
<div id="b"  style="height:42px; "><input type="email" name="email" disabled> في حال كان المريض/ة قاصر
</div>
<div id="b" style="  height:42px;float:right;"><input type="email" name="email" value="'.$row['namea'].'" disabled> اسم المرافق/ولي الامر</div>  <br>

<div id="b" style="float:right;"><input type="text" name="loc" value="'.$row['contry'].'" disabled>المدينة /البلدة</div> <br><br> 

<div id="b" style="float:right;"><input type="phone" name="phone" value="'.$row['age'].'" disabled>عمر المريض</div><br><br> 
<div id="b" style="float:right;"><input type="phone" name="telp" value="'.$row['phone'].'" disabled> رقم الجوال  </div> <br><br>

<div id="b" style="float:right;"><input type="number" name="idp" value="'.$row['telp'].'" disabled>رقم الهاتف</div><br><br>
<div id="b" style="height:42px;float:right;"><input type="phone" name="date" value="'.$row['date'].'"  >الموعد(اليوم و التاريخ)
</div><br><br><br>

<div id="b" style="height:42px;float:right;"><input type="number" name="time" value="'.$row['time'].'"  >الموعد (الساعة)</div><br><br><br>

<div id="b" style="width: 55%;height: 100px;float:right;"><input type="text" name="idp" style="width: 60%;height: 100px;" value="'.$row['not'].'" disabled>الملاحظات</div><br><br>
 
    
    <br>
 <br><br><br><br>
<div style="width: 30%;"> 
<button name="cans" style="width:20% ;"  value="'.$row['id'].'"> رفض </button>
<button name="accp" style="width:20% ;"  value="'.$row['id'].'"> قبول </button>

 </div>
</form>
</div>
 ';

}
echo '</div>';
}

if (isset($_POST['accp'])) {
echo "ff";
$ip= $_POST['accp'];
echo $ip;
echo "fa";
 $dat = mysqli_real_escape_string($conn, $_POST['date']);
  $time = mysqli_real_escape_string($conn, $_POST['time']);
 $query = "UPDATE `rese` SET `date` = '$dat', `time`='$time',`stat`='تم قبول الحجز' WHERE `id` ='$ip';";
      
         mysqli_query($conn, $query);

 $quer="INSERT INTO `notf`(`id`, `text`, `stat`, `date`, `idm`, `idmo`, `idu`, `mony`,`state`,`name`) VALUES (NULL,'doct req','unred','$dat','$idmm','0','$id','$pric','$stat','$nam')";
         mysqli_query($conn, $quer);

}

if (isset($_POST['cans'])) {
echo "gggg";
$ip= $_POST['cans'];
 $dat = mysqli_real_escape_string($conn, $_POST['date']);
  $time = mysqli_real_escape_string($conn, $_POST['time']);
 $query = "UPDATE `rese` SET  `stat`='تم رفض الحجز' WHERE `id` =  '$ip';";
      
         mysqli_query($conn, $query);
 $quer="INSERT INTO `notf`(`id`, `text`, `stat`, `date`, `idm`, `idmo`, `idu`, `mony`,`state`,`name`) VALUES (NULL,'doct req','unred','$dat','$idmm','0','$id','$pric','$stat','$nam')";
         mysqli_query($conn, $quer);

}

?>
 </div>
  
</body>
</html>