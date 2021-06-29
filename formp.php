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
  
  body {
  background-image: url(backfs.jpg);
}
</style>
  <div id="basil">write a code by basilshraim</div>
<body>

<div id="led">
  <h1 style="text-align: center;"> حساب شخصي  </h1>

<div id="log" style="border-style: none;">

<form method="post" >

<div id="b"><input type=""  name="name">الاسم </div>
<br>
<div id="b"><input type="email" name="email">الايميل</div> <br>

<div id="b"><input type="text" name="loc" >المنطقة</div> <br>

<div id="b"><input type="phone" name="phone" >رقم الجوال</div><br>
<div id="b"><input type="phone" name="telp" >رقم الهاتف</div><br>

<div id="b"><input type="number" name="idp">رقم الهوية</div><br>


<div id="b"><input type="password" name="pasword" >كلمة  المرور</div><br>
<br>
<div id="b" style="width: 40%;background-color: none;border-style: none;">
  <input style="float: right;" type="checkbox" name="accpt" value="accpt">
  <a href="terms.php" for="vehicle1" style="text-decoration:none;"> 
    <pre>لقد قرأت شروط الاستخدام وسياسة الموقع  </pre>  </a>
   </div>
   <hr>
<div style="float: left;" >
<div  id="b" style="text-align: center;">
 <input type="submit" name="reg_user" value="تسجيل   "> <div></div>


</div>

</div>
</form>
<?php include("contact.php")?>
<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database

// REGISTER USER
if (isset($_POST['reg_user'])) {
	
  // receive all input values from the form
  $nam = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $loc = mysqli_real_escape_string($conn, $_POST['loc']);
  $phon = mysqli_real_escape_string($conn, $_POST['phone']);
  $tel = mysqli_real_escape_string($conn, $_POST['telp']);
$id = mysqli_real_escape_string($conn, $_POST['idp']);
$pasword = mysqli_real_escape_string($conn, $_POST['pasword']);
  $accpt = mysqli_real_escape_string($conn, $_POST['accpt']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($nam)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Username is required"); }
  if (empty($loc)) { array_push($errors, "Email is required"); }
  if (empty($phon)) { array_push($errors, "Password is required"); }
    if (empty($tel)) { array_push($errors, "Username is required"); }
  if (empty($id)) { array_push($errors, "Email is required"); }
  if (empty($pasword)) { array_push($errors, "Password is required"); }
  
 
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM userp WHERE phone='$phon' OR idp='$id' or email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['idp'] === $id) {
      array_push($errors, "Username already exists");
   echo "string11";
    }

    if ($user['phone'] === $phon) {
      array_push($errors, "email already exists");
    }

     if ($user['email'] ===  $email) {
      array_push($errors, "email already exists");
    }

    

  }

  // Finally, register user if there are no errors in the form
   if (count($errors) == 0 && $nam != 'admin') {
  	$paswordd = md5($pasword);//encrypt the password before saving in the database


  	$query = "INSERT INTO `userp` (`id`, `name`, `location`, `phone`, `telpon`, `idp`, `pasword`, `mony`, `idm`,`stat`,`term`,`email`) VALUES (NULL, '$nam', '$loc', '$phon', '$tel', '$id', '$paswordd', '0', '0','per','$accpt',' $email');";
  			echo "تم التسجيل بنجاح";

         mysqli_query($conn, $query);

 $_SESSION['name'] = $nam;
 $_SESSION['location']=$loc;
 $_SESSION['phone']=$phon;
 $_SESSION['telpon']=$tel;
 $_SESSION['idp']=$id;
 $_SESSION['mony']=0;
 $_SESSION['idm']=0;
 $_SESSION['stat']='per';
 $_SESSION['term']='$accpt';
 $_SESSION['email']='$email';
      
      
       
      
  
 
      $_SESSION['success'] = "You are now logged in";
      echo $username;
      echo$add;
      header('location: hom.php');
  	 
  	$_SESSION['success'] = "You are now logged in";
  // header('location: log.php');
  }
}
?>
</div>
</body>
</html>