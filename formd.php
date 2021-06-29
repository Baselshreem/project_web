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
<style type="text/css">
  
  body {
  background-image: url(backfs.jpg);
}
</style>
  <div id="basil">write a code by basilshraim</div>
<body >

<div id="led">
  <h1 style="text-align: center;">  حساب طبيب عيادة</h1>

<div id="log" style="border-style: none;">

<form method="post" >
<a ><div id="b"><input type="" name="name">الاسم</div></a>
<br>
<div id="b"><input type="email" name="email">الايميل</div> <br>
<div id="b"><input type="" name="namem">اسم العيادة</div> <br>

<div id="b"><input type="" name="loc">المنطقة</div> <br>

<div id="b"><input type="" name="pho">رقم الجوال</div><br>

<div id="b"><input type="" name="tel">رقم الهاتف</div><br>

<div id="b"><input type="" name="id">رقم الهوية</div><br>
<div id="b"><input type="" name="idm">رقم الرخصة</div><br>

<div id="b"><input type="password" name="pas">كلمة المرور</div><br>
<br>
<div id="b" style="width: 40%;background-color: none;border-style: none;">
  <input style="float: right;" type="checkbox" name="accpt" value="accpt">
  <a href="terms.php" for="vehicle1" style="text-decoration:none;"> 
    <pre>لقد قرأت شروط الاستخدام وسياسة الموقع  </pre>  </a>
   </div>
   <hr>
<div style="float: left;">
<div id="b" style="text-align: center;"><input type="submit" name="reg_user" value="تسجيل   "></div><br>
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

// connect to the database

if (isset($_POST['reg_user'])) {
  
  // receive all input values from the form
  $nam = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
  $namm= mysqli_real_escape_string($conn, $_POST['namem']);
  $loc = mysqli_real_escape_string($conn, $_POST['loc']);
  $phon= mysqli_real_escape_string($conn, $_POST['pho']);
  $tel = mysqli_real_escape_string($conn, $_POST['tel']);
  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $idm = mysqli_real_escape_string($conn, $_POST['idm']);
  $pasword = mysqli_real_escape_string($conn, $_POST['pas']);
  $accpt = mysqli_real_escape_string($conn, $_POST['accpt']);
  // form validation: ensure that the form is correctly filled .

  // by adding (array_push()) corresponding error unto $errors array
  echo $accpt;
   if (empty($accpt)) { array_push($errors, "Username is required"); 
echo "لم تقم بلموافقة على شروط الاستخدام";

 }
  if (empty($nam)) { array_push($errors, "Username is required"); }
  if (empty($loc)) { array_push($errors, "Email is required"); }
  if (empty($phon)) { array_push($errors, "Password is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM userd WHERE idp='$id' OR (idm='$idm') or (phon='$phon') LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['idp'] === $id) {
      array_push($errors, "Username already exists");
   echo "يوجد حساب مرتبط برقم الهوية";
    }

    if ($user['phon'] === $phon) {
      array_push($errors, "email already exists");
   echo "يوجد حساب مرتبط برقم الجوال";
    }
    if ($user['idm'] === $idm) {
      array_push($errors, "email already exists");
    echo "يوجد حساب مرتبط برقم الرخصة";

    }
     if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    echo "يوجد حساب مرتبط برقم الرخصة";

    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0 && $nam !='admin') {
    $paswordd = md5($pasword);//encrypt the password before saving in the database

    $query = "INSERT INTO `userd`(`id`, `name`, `namem`, `location`, `phon`, `telp`, `idp`, `idm`, `pasword`, `mony`,`stat`,`term`,`email`) VALUES (NULL, '$nam', '$namm','$loc', '$phon', '$tel', '$id','$idm', '$paswordd','0','doct','$accpt','$email');";
        echo " تم التسجيل بنجاح";
        // header('location: homs.php');
    mysqli_query($conn, $query);
  
 $_SESSION['name'] = $nam;
 $_SESSION['namem'] = $namm;
 $_SESSION['location']=$loc;
 $_SESSION['phone']=$phon;
 $_SESSION['telpon']=$tel;
 $_SESSION['idp']=$id;
 $_SESSION['mony']=0;
 $_SESSION['idm']=$idm;
 $_SESSION['stat']='doct';
 $_SESSION['term']='$accpt';
 $_SESSION['email']='$email'; 
$_SESSION['ty']='$tyem';
      
      
       
      
  
 
      $_SESSION['success'] = "You are now logged in";
      echo $username;
      echo$add;
      header('location: homd.php');
  	 
  	$_SESSION['success'] = "You are now logged in";
  }
}
?>
</div>
</body>
</html>