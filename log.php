<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="ss.css">
</head>

  <div id="basil">write a code by basilshraim</div>
<body >

<div id="led" style="background-image: url(backl.jpg);height: 1000px;">
    <h1 style="text-align: center;color: red;">  تسجيل دخول</h1>

   
<br>
    <div id="log" style="border-style: none;">
      <br><br><br>
<form method="post" >
<div id="b"><input type=""  name="user_name">:اسم المستخدم </div>
<br>

<div id="b">

	<input type="password" name="user_pass">:كلمة المرور </div> 
	 <br><br>

<div id="b">

 <select name="op">
  <option value="1" selected>حساب شخصي</option>
  <option value="2">حساب تجاري</option>
  <option value="3">حساب مكتب تكسي</option>
  <option value="4" >حساب سائق</option>
  <option value="5" >حساب طبيب</option>
  <option value="6" >حساب شركة توصيل</option>
</select>: اختر نوع الحساب</div> 
   <br><br>

<a href="forget.php" style ="background: #ecb390;">نسيت كلمة المرور </a><br><br>
<div id="b" name="login" style="text-align: center;">
  <button type="submit"  name="login_user" > تسجيل دخول </button> </div> 
<a href="sign.php"><div id="b" style="text-align: center;">إنشاء حساب </div> </a>


</div>
</form>

<?php include("contact.php")?>
<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$uid ="";
$mid="";
$add="";
$mon ="";
$namem="";
$stat="";
$errors = array(); 

// connect to the database



// LOGIN USER
if (isset($_POST['login_user'])) {
    
  $username = mysqli_real_escape_string($conn, $_POST['user_name']);
  $password = mysqli_real_escape_string($conn, $_POST['user_pass']);
 
  $op= $_POST['op'];
  echo $op;
  if (empty($username)) {
    array_push($errors, "Username is required");
    
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {

    




   if($op==1){
    $query = "SELECT * FROM userp WHERE name='$username' AND pasword='" . md5($password) . "'";

        $results = mysqli_query($conn, $query);

 if (mysqli_num_rows($results) == 1) {
      $row=mysqli_fetch_assoc( $results );
      $uid=$row['id'];
      $add=$row['location'];
      $mon=$row['mony'];
      $namem=$row['namem'];
       $stat=$row['stat'];
      $_SESSION['stat']=$stat;
      $_SESSION['namem']=$namem;
      $_SESSION['name'] = $username;
      $_SESSION['id']=$uid;
        $_SESSION['mony']=$mon;
       $_SESSION['location']=$add;
echo $uid;
      $_SESSION['success'] = "You are now logged in";
      echo $username;
      echo$add;
      header('location: hom.php');
      echo "dd";
    }








  }


if($op==2){

       $qu = "SELECT * FROM users WHERE name='$username' AND pasword='" . md5($password) . "' ";
     $resu = mysqli_query($conn, $qu);




 if (mysqli_num_rows($resu) == 1 ) {
$row=mysqli_fetch_assoc( $resu );
      $uid=$row['id'];
      $mid=$row['idm'];
      $add=$row['location'];
      $mon=$row['mony'];
      $namem=$row['namem'];
      $_SESSION['namem']=$namem;
$tyem=$row['tyem'];
      $_SESSION['tyem']=$tyem;
       $stat=$row['stat'];
      $_SESSION['stat']=$stat;
      $_SESSION['name'] = $username;
      $_SESSION['id']=$uid;
      $_SESSION['idm']=$mid;
      $_SESSION['location']=$add;
      $_SESSION['mony']=$mon;
echo $mon;
      $_SESSION['success'] = "You are now logged in";
      echo $username;
      echo$add;
  
      header('location: homs.php');
      echo "dd";
    }





}
if($op==3){

    $queryt = "SELECT * FROM usert WHERE name='$username' AND pasword='" . md5($password) . "'";
    $resultst = mysqli_query($conn, $queryt);



if (mysqli_num_rows($resultst) == 1 ) {
$row=mysqli_fetch_assoc( $resultst );
      $uid=$row['id'];
      $mid=$row['idm'];
      $add=$row['location'];
      $mon=$row['mony'];
      $namem=$row['namem'];
      $_SESSION['namem']=$namem;

       $stat=$row['stat'];
      $_SESSION['stat']=$stat;
      $_SESSION['name'] = $username;
      $_SESSION['id']=$uid;
      $_SESSION['idm']=$mid;
      $_SESSION['location']=$add;
      $_SESSION['mony']=$mon;
echo $mon;
      $_SESSION['success'] = "You are now logged in";
      echo $username;
      echo$add;
  
      header('location: homt.php');
      echo "dd";
    }









}
  
if($op==4){
     $querytu = "SELECT * FROM usertu WHERE name='$username' AND pasword='" . md5($password) . "'";
     $resultstu = mysqli_query($conn, $querytu);



if (mysqli_num_rows($resultstu) == 1 ) {
$row=mysqli_fetch_assoc( $resultstu );
      $uid=$row['id'];
      $mid=$row['idm'];
      $add=$row['location'];
      $mon=$row['mony'];
      $namem=$row['namem'];
       $statt=$row['statt'];
      $_SESSION['namem']=$namem;

       $stat=$row['stat'];
      $_SESSION['stat']=$stat;
      $_SESSION['statt']=$statt;
      $_SESSION['name'] = $username;
      $_SESSION['id']=$uid;
      $_SESSION['idm']=$mid;
      $_SESSION['location']=$add;
      $_SESSION['mony']=$mon;
echo $mon;
      $_SESSION['success'] = "You are now logged in";
      echo $username;
      echo$add;
  
      header('location: homtu.php');
      echo "dd";
    }



}



if($op==5){

       $qu = "SELECT * FROM userd WHERE name='$username' AND pasword='" . md5($password) . "' ";
     $resu = mysqli_query($conn, $qu);




 if (mysqli_num_rows($resu) == 1 ) {
$row=mysqli_fetch_assoc( $resu );
      $uid=$row['id'];
      $mid=$row['idm'];
      $add=$row['location'];
      $mon=$row['mony'];
      $namem=$row['namem'];
      $_SESSION['namem']=$namem;

       $stat=$row['stat'];
      $_SESSION['stat']=$stat;
      $_SESSION['name'] = $username;
      $_SESSION['id']=$uid;
      $_SESSION['idm']=$mid;
      $_SESSION['location']=$add;
      $_SESSION['mony']=$mon;
echo $mon;
      $_SESSION['success'] = "You are now logged in";
      echo $username;
      echo$add;
  
      header('location: homd.php');
      echo "dd";
    }





}


if($op==6){
     $querytu = "SELECT * FROM userc WHERE name='$username' AND pasword='" . md5($password) . "'";
     $resultstu = mysqli_query($conn, $querytu);



if (mysqli_num_rows($resultstu) == 1 ) {
$row=mysqli_fetch_assoc( $resultstu );
      $uid=$row['id'];
      $mid=$row['idm'];
      $add=$row['location'];
      $mon=$row['mony'];
      $namem=$row['namem'];
       $statt=$row['statt'];
      $_SESSION['namem']=$namem;

       $stat=$row['stat'];
      $_SESSION['stat']=$stat;
      $_SESSION['statt']=$statt;
      $_SESSION['name'] = $username;
      $_SESSION['id']=$uid;
      $_SESSION['idm']=$mid;
      $_SESSION['location']=$add;
      $_SESSION['mony']=$mon;
echo $mon;
      $_SESSION['success'] = "You are now logged in";
      echo $username;
      echo$add;
  
      header('location: homc.php');
      echo "dd";
    }



}

      $querya = "SELECT * FROM admin WHERE name='$username' AND pasword='" . md5($password) . "'";
        $resultsa = mysqli_query($conn, $querya);



      


if (mysqli_num_rows($resultsa) == 1 ) {
      $row=mysqli_fetch_assoc( $resultsa );
      $uid=$row['id'];
       $mid=$row['idm'];
      $add=$row['location'];
      $mon=$row['mony'];
      $namem=$row['namem'];
       $stat=$row['stat'];
      $_SESSION['stat']=$stat;
      $_SESSION['namem']=$namem;
      $_SESSION['name'] = $username;
      $_SESSION['id']=$uid;
        $_SESSION['idm']=$mid;
        $_SESSION['mony']=$mon;
       $_SESSION['location']=$add;
echo $uid;
      $_SESSION['success'] = "You are now logged in";
      echo $username;
      echo$add;
      header('location: admin.php');
      echo "dd";
    }


   
   // echo $password;
    

     
  /*elseif (mysqli_num_rows($results) == 1 && $username=='admin' && $password=='111') {
      $row=mysqli_fetch_assoc( $results );
      $uid=$row['id'];
       $mid=$row['idm'];
      $add=$row['location'];
      $mon=$row['mony'];
      $namem=$row['namem'];
       $stat=$row['stat'];
      $_SESSION['stat']=$stat;
      $_SESSION['namem']=$namem;
      $_SESSION['name'] = $username;
      $_SESSION['id']=$uid;
        $_SESSION['idm']=$mid;
        $_SESSION['mony']=$mon;
       $_SESSION['location']=$add;
echo $uid;
      $_SESSION['success'] = "You are now logged in";
      echo $username;
      echo$add;
      header('location: admin.php');
      echo "dd";
    }

*/
     
 
    

    else {
       
        array_push($errors, "Wrong username/password combination");
          echo "كلمة المرور او اسم المستخدم غير صحيح";


    }
  }
}

?>
</div>
</body>
</html>