<?php include("contact.php")?>
<div style="display: none;"><?php include("forget.php")?></div>
<?php  
  
     
     $name=$_SESSION['name'];
      $uid=$_SESSION['idp'];
       $op=$_SESSION['op'];
echo $name;
echo $uid;
echo $op;
if (isset($_POST['new_password'])) {
  
  $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
  echo $new_pass;
  $new_pass_c = mysqli_real_escape_string($conn, $_POST['new_pass_c']);

  // Grab to token that came from the email link

  if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
  if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
  if (count($errors) == 0) {
    // select email address of user from the password_reset table 


$new_passs=md5($new_pass);

if($op==1){
echo $new_pass;
      $sql = "UPDATE `userp` SET `pasword`='$new_passs' WHERE `idp`='$uid'";
      $results = mysqli_query($conn, $sql);
    header('location: log.php');
   

}

if($op==2){

      $sql = "UPDATE `users` SET `pasword`=' $new_passs' WHERE `idp`='$uid'";
      $results = mysqli_query($conn, $sql);
      header('location: log.php');
   

}

if($op==3){

      $sql = "UPDATE `usert` SET `pasword`=' $new_passs' WHERE `idp`='$uid'";
      $results = mysqli_query($conn, $sql);
      header('location: log.php');
   

}

if($op==4){

      $sql = "UPDATE `usertu` SET `pasword`=' $new_passs' WHERE `idp`='$uid'";
      $results = mysqli_query($conn, $sql);
      header('location: log.php');
   

}

if($op==5){

      $sql = "UPDATE `userd` SET `pasword`=' $new_passs' WHERE `idp`='$uid'";
      $results = mysqli_query($conn, $sql);
      header('location: log.php');
   

}

if($op==6){

      $sql = "UPDATE `userc` SET `pasword`=' $new_passs' WHERE `idp`='$uid'";
      $results = mysqli_query($conn, $sql);
      header('location: log.php');
   

}











    }

  
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="ss.css">
</head>

  <div id="basil">write a code by basilshraim</div>
<body >

<div id="led" >
    <h1 style="text-align: center;color: red;"> forget password</h1>

   
<br>
    <div id="log" style="border-style: none;">
      <br><br><br>
<form method="post" >
<div id="b"><input type="password"  name="new_pass">: كلمة المرور</div>
<br>

<div id="b">

	<input type="password" name="new_pass_c">:تاكيد  كلمة المرور </div> 
	 <br><br>

<div id="b" name="login" style="text-align: center;">
  <button type="submit"  name="new_password" > تغير  </button> </div> 



</div>
</form>


</div>
</body>
</html>