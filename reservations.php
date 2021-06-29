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
<style type="text/css">
  
 
</style>
  <div id="basil">write a code by basilshraim</div>
<body>

<div id="led"  >
<?php include("contact.php")?>
<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$id= $_SESSION['id'];
 $sql = "SELECT * FROM rese where idd='$id';";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
  echo '<br><br><br>
  <h1 style="text-align: center;"> حجوزات  </h1> ';
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      
       echo '
 
 <div style="text-align: center;width:50%; ">
<form method="post" >
 <div id="b" style="height:150px;">
<div id="b" style="text-align: center;">الحالة</div><br>
<div id="b"><button name="tm" style="width:100%;height:30px;text-align: center;background-color:green;" value="'.$row['id'].'"> تم </button> </div><br>
<div id="b"><button name="let" style="width:100%;height:30px;text-align: center;background-color:yellow;" value="'.$row['id'].'"> تم تأجيل الموعد </button></div><br>
<div id="b"><button name="no" style="width:100%;height:30px;text-align: center;background-color: red;" value="'.$row['id'].'"> لم يحضر </button></div><br>
<div id="b"><button name="agin" style="width:100%;height:30px;text-align: center;background-color: ;" value="'.$row['id'].'"> له مراجعة اخرى </button></div><br>
 
</div>

<div id="log" style="border-style: none;margin-left:30%;">
 
<div id="b" style="width: 55%;height: 50px;float:right;text-align: center;"> '.$row['state'].'   </div><br><br><br>
<div id="b" style="float:right;"><input type=""  name="name" value="'.$row['name'].'" disabled>اسم المريض</div>
<br><br>
<div id="b" style="height:42px; " ><input type="email" name="email" disabled>في حال كان المريض/ة قاصر
</div>
<div id="b" style="float:right;height:42px;"><input type="email" name="email" value="'.$row['namea'].'" disabled> اسم المرافق/ولي الامر</div> <br>

<div id="b" style="float:right;"><input type="text" name="loc" value="'.$row['contry'].'" disabled>المدينة /البلدة</div> <br><br>

<div id="b" style="float:right;"><input type="phone" name="phone" value="'.$row['age'].'" disabled>عمر المريض</div><br><br>
<div id="b" style="float:right;"><input type="phone" name="telp" value="'.$row['phone'].'" disabled>رقم الجوال</div><br><br>
<div id="b" style="float:right;"><input type="phone" name="telp" value="'.$row['telp'].'" disabled>رقم الجوال</div><br><br>

<div id="b" style="height:40px;float:right;"><input type="phone" name="telp" value="'.$row['date'].'" disabled>الموعد(اليوم و التاريخ)
</div><br><br><br>

<div id="b" style="height:40px;float:right;"><input type="number" name="idp" value="'.$row['time'].'" disabled>الموعد(الساعة)
</div><br><br><br>

 

 
<div id="b" style="width: 55%;height: 100px;float:right;"><input type="text" name="idp" style="width: 60%;height: 100px;" value="'.$row['not'].'" disabled>الملاحظات</div><br><br>
 
 
 

 
</form>
 </div>
 </div> 
 
<hr>
';
}
 
}

         mysqli_query($conn, $query);
  
if (isset($_POST['tm'])) {
 $ip= $_POST['tm'];
$query = "UPDATE `rese` SET `state` = 'نم'  WHERE `id` =  '$ip';";
      
         mysqli_query($conn, $query);

}

if (isset($_POST['let'])) {
  $ip= $_POST['let'];
$query = "UPDATE `rese` SET `state` = 'تم تأجيل الموعد'  WHERE `id` =  '$ip';";
      
         mysqli_query($conn, $query);

}


if (isset($_POST['no'])) {
  $ip= $_POST['no'];
$query = "UPDATE `rese` SET `state` = 'لم يحضر'  WHERE `id` =  '$ip';";
      
         mysqli_query($conn, $query);

}

if (isset($_POST['agin'])) {
  $ip= $_POST['agin'];
$query = "UPDATE `rese` SET `state` =  'له مراجعة اخرى'  WHERE `id` =  '$ip';";
      
         mysqli_query($conn, $query);

}

?>

 
 <div id="b" style="text-align: center;"onclick="history.back()">الرجوع لصفحة الرئيسية</div>
 
  
  </div>
</body>
</html>