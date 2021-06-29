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
<br><br><br>
  <h1 style="text-align: center;"> نموذج حجز  </h1>
<div id="log" style="border-style: none;margin-left:30%;">
 <br><br><br><br><br><br>
<div style="text-align: center;width:50%; ">
<form method="post" >

<div id="b" style="float:right;"><input type=""  name="name">اسم المريض</div><br><br>
 
<div id="b"  style="height:42px; "><input type="text" name=" ">في حال كان المريض/ة قاصر
</div> 
<div id="b" style="float:right;height:42px;"><input type="text" name="namea">   اسم المرافق/ولي الامر</div>  <br><br>

<div id="b" style="float:right;"><input type="text" name="loc" >المدينة /البلدة</div> <br><br>

<div id="b" style="float:right;"><input type="phone" name="age" >عمر المريض</div><br><br>
<div id="b" style="float:right;"><input type="phone" name="phone" >رقم الجوال</div><br><br>

<div id="b" style="float:right;"><input type="number" name="telp">رقم الهاتف</div><br><br>


<div id="b" style="width: 55%;height: 100px;float:right;"><input type="text" name="not" style="width: 60%;height: 100px;">الملاحظات</div><br><br>
 
   </div>
    
<br><br><br><br>
<hr>
<div style="float: left;" >
<div  id="b" style="text-align: center;">
 <input type="submit" name="reg_user" value="حجز"> <div></div>


</div>

</div>
</form>
</div>
<?php include("contact.php")?>
<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$idd=$_GET['idd'];
 $id=$_SESSION['id'];
 
if (isset($_POST['reg_user'])) {
	 
 
  // receive all input values from the form
  $name= mysqli_real_escape_string($conn, $_POST['name']);
  $namea= mysqli_real_escape_string($conn, $_POST['namea']);
  $loc= mysqli_real_escape_string($conn, $_POST['loc']);
  $age= mysqli_real_escape_string($conn, $_POST['age']);
  $phone= mysqli_real_escape_string($conn, $_POST['phone']);
  $telp= mysqli_real_escape_string($conn, $_POST['telp']);
  $not= mysqli_real_escape_string($conn, $_POST['not']);
   
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Username is required"); }
  if (empty($namea)) { array_push($errors, "Username is required"); }
  if (empty($loc)) { array_push($errors, "Email is required"); }
  if (empty($age)) { array_push($errors, "Password is required"); }
  if (empty($phone)) { array_push($errors, "Username is required"); }
  if (empty($telp)) { array_push($errors, "Email is required"); }
  if (empty($not)) { array_push($errors, "Password is required"); }
   
  // first check the database to make sure 
 
  
  
 
  
    
  	 
 
  	$query = "INSERT INTO `rese`(`id`, `idu`, `idd`, `name`, `namea`, `contry`, `age`, `phone`, `telp`, `not`) VALUES  (NULL,'$id','$idd','$name','$namea','$loc','$age','$phone','$telp','$not')";
  			echo "تم التسجيل بنجاح";

         mysqli_query($conn, $query);
 
  
 }

?>
<div id="b" style="text-align: center;"onclick="history.back()">الرجوع لصفحة الرئيسية</div>
</div>
</body>
</html>