<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="ss.css">
</head>

  <div id="basil">write a code by basilshraim</div>
<body >

<div id="led" style="height: 1000px;">
    <h1 style="text-align: center;color: red;">  نسيت كلمة المرور</h1>

   
<br>
    <div id="log" style="border-style: none;">
      <br><br><br>
<form method="post" >
<div id="b"><input type=""  name="user_name">:اسم المستخدم </div>
<br>

<div id="b">

  <input type="number" name="id">:رقم الهوية </div> 
   <br><br>

<div id="b">

 <select name="op">
  <option value="1" selected>حساب شخصي</option>
  <option value="2">حساب بائع</option>
  <option value="3">حساب مكتب تكسي</option>
  <option value="4" >حساب سائق</option>
  <option value="5" >حساب طبيب</option>
  <option value="6" >حساب شركة توصيل</option>
</select>: اختر نوع الحساب</div> 
   <br><br>


<div id="b" name="login" style="text-align: center;">
  <button type="submit"  name="login_user" > إعادة ضبط كلمة المرور </button> </div> 



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
  $idp = mysqli_real_escape_string($conn, $_POST['id']);
 
  $op= $_POST['op'];
  echo $op;
  if (empty($username)) {
    array_push($errors, "Username is required");
    
  }
  if (empty($idp)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {

    




   if($op==1){
    $query = "SELECT * FROM userp WHERE name='$username' AND idp='$idp'";

        $results = mysqli_query($conn, $query);

 if (mysqli_num_rows($results) == 1) {
      $row=mysqli_fetch_assoc( $results );
       
      $uid=$row['idp'];
      $name=$row['name'];
      $_SESSION['name'] = $name;
      $_SESSION['idp']=$uid;
       $_SESSION['op']=$op;

      header('location: newpass.php');
      echo "dd";
    }








  }


if($op==2){

       $qu = "SELECT * FROM users WHERE name='$username' AND idp='$idp' ";
     $resu = mysqli_query($conn, $qu);




 if (mysqli_num_rows($resu) == 1 ) {
$row=mysqli_fetch_assoc( $resu );
     
     $uid=$row['idp'];
      $name=$row['name'];
      $_SESSION['name'] = $name;
      $_SESSION['idp']=$uid;
       $_SESSION['op']=$op;  
           header('location: newpass.php');
      echo "dd";
    }





}
if($op==3){

    $queryt = "SELECT * FROM usert WHERE name='$username' AND idp='$idp' ";
    $resultst = mysqli_query($conn, $queryt);



if (mysqli_num_rows($resultst) == 1 ) {
$row=mysqli_fetch_assoc( $resultst );
      $uid=$row['idp'];
      $name=$row['name'];
      $_SESSION['name'] = $name;
      $_SESSION['idp']=$uid;
       $_SESSION['op']=$op;
           header('location: newpass.php');
      echo "dd";
    }









}
  
if($op==4){


     $querytu = "SELECT * FROM usertu WHERE name='$username' AND idp='$idp' ";
     $resultstu = mysqli_query($conn, $querytu);



if (mysqli_num_rows($resultstu) == 1 ) {
$row=mysqli_fetch_assoc( $resultstu );
  
   $uid=$row['idp'];
      $name=$row['name'];
      $_SESSION['name'] = $name;
      $_SESSION['idp']=$uid;
       $_SESSION['op']=$op;
           header('location: newpass.php');
      echo "dd";
    }



}



if($op==5){

       $qu = "SELECT * FROM userd WHERE name='$username' AND idp='$idp' ";
     $resu = mysqli_query($conn, $qu);




 if (mysqli_num_rows($resu) == 1 ) {
$row=mysqli_fetch_assoc( $resu );
     
     $uid=$row['idp'];
      $name=$row['name'];
      $_SESSION['name'] = $name;
      $_SESSION['idp']=$uid;
       $_SESSION['op']=$op;  
           header('location: newpass.php');
      echo "dd";
    }





}
if($op==6){

       $qu = "SELECT * FROM userc WHERE name='$username' AND idp='$idp' ";
     $resu = mysqli_query($conn, $qu);




 if (mysqli_num_rows($resu) == 1 ) {
$row=mysqli_fetch_assoc( $resu );
     
     $uid=$row['idp'];
      $name=$row['name'];
      $_SESSION['name'] = $name;
      $_SESSION['idp']=$uid;
       $_SESSION['op']=$op;  
           header('location: newpass.php');
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