<!DOCTYPE html>
<html>
<head>
	<div id="basil">write a code by basilshraim</div>
	<title></title>
	<meta charset="UTF-8">
	<script src="j.js"></script>
   <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
	<link rel="stylesheet" type="text/css" href="ss.css">
</head>
<body>
<div style="display: none;"><?php include("log.php")?></div>
<div id="led">
	<h1 style="text-align: center;">  طلب شحن</h1>
<br>
	<div id="log">
<form method="post" >
<div id="b">
			
				<input type="" name="namem" id="namem"  value="<?php

				
			    echo $_SESSION['name'];
				//echo $username;
				?>" readonly>


	:الاسم  </div>

<br>
<div id="b"><input type="" name="monym" id="mmm" onchange="fun()" >:المبلغ الكلي    
 </div> <br>

<div id="b" ><input type="" name="daym" id="teo" readonly>:العمولة </div>

<br>

<div id="b"><input type="value" name="totm" id="te" readonly style="border-style: none;">:المبلغ الصافي </div>
<br>
<br>
<div id="b" style="text-align: center;"onclick="history.back()">الغاء</div>
<div id="b" style="text-align: center;">
  <button type="submit" name="reg_mon" > شحن </button> </div> 

</form>

</div>

<?php include("contact.php")?>

<?php
//session_start();

// initializing variables
$username = "";
$email    = "";
$nam= $_SESSION['name'];

$errors = array(); 
$dat=date("Y-m-d H:i:s");
// connect to the database
$user=$_SESSION['id'];
$stat=$_SESSION['stat'];
if (isset($_POST['reg_mon'])) {
	
  // receive all input values from the form
 // $namem = mysqli_real_escape_string($conn, $_POST['namem']);
 $namem= $_POST['namem'];
  //$monym = mysqli_real_escape_string($conn, $_POST['monym']);
 $monym=$_POST['monym'];
 // $daym = mysqli_real_escape_string($conn, $_POST['daym']);
  $daym=$_POST['daym'];
  //$totm = mysqli_real_escape_string($conn, $_POST['totm']);
$totm=$_POST['totm'];


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($namem)) { array_push($errors, "Username is required"); 
    
}
   if (empty($monym)) { array_push($errors, "Username is required"); 

}

 if (empty($daym)) { array_push($errors, "Username is required"); }
  if (empty($totm)) { array_push($errors, "Username is required"); } 
  

  // first check the database to make sure 
  // a user does not already exist with the same 
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO `req`(`id`, `name`, `mony`, `dis`, `tot`, `date`, `stat`) VALUES (NULL, '$namem', '$monym', '$daym', '$totm','$dat','$stat');";
  			$quer="INSERT INTO `notf`(`id`, `text`, `stat`, `date`, `idm`, `idmo`, `idu`, `mony`,`state`,`name`) VALUES (NULL,'mony req','unred','$dat','0','2','$user','$totm','$stat','$nam')";

echo "لقد تم تقديم طلب الشحن وسوف يتم الرد عليه قريبا";

  	mysqli_query($conn, $query);
    mysqli_query($conn, $quer);
  	$_SESSION['name'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  // header('location: log.php');
  }
else{
echo "لم تتم عملية تقديم الطلب بشكل صحيح الرجاء المحاولة فيما بعد";
}


}
?>

</div>

</body>
</html>