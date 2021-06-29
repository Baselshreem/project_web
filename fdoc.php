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
  <h1 style="text-align: center;">     معلومات العيادة</h1>

<div id="log" style="border-style: none;">

<form method="post" >
  
 

<br>
<div id="b"><input type=" " name="name"> اسم   العيادة</div> <br>
<div id="b"><input type="" name="contry"> المدينة/البلدة  </div> <br>
  
<div id="b"><input type=" " name="bet">   بقرب من</div>
<div id="b" style="margin-right: 208px;"><input type="" name="loc"  > الحي الشارع  </div>  <br>

<div id="b"><input type="" name="pho">رقم الجوال  </div><br>

<div id="b"><input type="" name="tel">رقم الهاتف</div><br>

<div id="b"><input type="" name="day"> ايام العمل </div><br>
<div id="b"><input type="" name="tim"> ساعات العمل  </div><br>

 <br>
 
   <hr>
 <div style="float: left;">
<div id="b" style="text-align: center;"><input type="submit" name="reg_user" value="تسجيل   "></div><br>
</div>
 
</form>
</div>
<?php include("contact.php")?>
<?php
session_start();
$id= $_SESSION['id'];
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database

if (isset($_POST['reg_user'])) {
  
  // receive all input values from the form
 
   $name = mysqli_real_escape_string($conn, $_POST['name']);
  $contry= mysqli_real_escape_string($conn, $_POST['contry']);
  $bet = mysqli_real_escape_string($conn, $_POST['bet']);
  $loc = mysqli_real_escape_string($conn, $_POST['loc']);
  $phon= mysqli_real_escape_string($conn, $_POST['pho']);
  $tel = mysqli_real_escape_string($conn, $_POST['tel']);
 
  $day = mysqli_real_escape_string($conn, $_POST['day']);
  $tim = mysqli_real_escape_string($conn, $_POST['tim']);
 
 
 
  if (empty($nam)) { array_push($errors, "Username is required"); }
  if (empty($loc)) { array_push($errors, "Email is required"); }
  if (empty($phon)) { array_push($errors, "Password is required"); }
  

 

 



 
  
 

  // Finally, register user if there are no errors in the form
  

    $query = "INSERT INTO `infdoc`(`id`, `idd`, `name`, `contry`, `stret`, `betwen`, `phone`, `telp`, `days`, `hour`) VALUES (NULL, '$id', '$name','$contry','$bet','$loc', '$phon', '$tel', '$day','$tim' );";
        echo " تم التسجيل بنجاح";
        // header('location: homs.php');
    mysqli_query($conn, $query);
    $_SESSION['name'] = $username;
    $_SESSION['success'] = "You are now logged in";
   header('location: homs.php');
  
 
}
?>

<div id="b" style="text-align: center;"onclick="history.back()">الرجوع لصفحة الرئيسية</div>
</div>
</body>
</html>