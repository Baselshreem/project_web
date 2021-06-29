<!DOCTYPE>
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

<div id="led" >
    <h1 style="text-align: center;">  اضافة اعلان  </h1>

   
<br>
    <div id="log" style="border-style: none;">
<form method="post" >

<div id="b"><input type=""  name="add">:العنوان </div>
<br>


<div id="b"><input type="text" name="name" >:نص الاعلان</div> <br>



<div id="b" style="margin-right:15%;"><select name="cars" id="cars">
  <option value="commercial">تجارية</option>
  <option value="joys">افراح</option>
  <option value="death">وفاة</option>
  <option value="formal">رسمي</option>
 <option value="careers">وظائف</option>
</select></div>


<div style="float: left;" >
<div  id="b" style="text-align: center;">
 <input type="submit" name="in_prod" value="  إضافة إعلان"> </div></div>



</form>
</div>


<?php include("contact.php")?>
<div style="display: none;"><?php include("log.php")?></div>


  	<?php
//session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$dat=date(DATE_RFC822);
// connect to the database
$user=$_SESSION['id'];
$idm= $_SESSION['idm'];
if (isset($_POST['in_prod'])) {
	echo "stringd";
  // receive all input values from the form
 // $namem = mysqli_real_escape_string($conn, $_POST['namem']);
 $add= $_POST['add'];
  //$monym = mysqli_real_escape_string($conn, $_POST['monym']);
 $name=$_POST['name'];
 $type=$_POST['cars'];
 // $daym = mysqli_real_escape_string($conn, $_POST['daym']);
  
  if (empty($add)) { array_push($errors, "Username is required"); }
  if (empty($name)) { array_push($errors, "Email is required"); }
 
  // first check the database to make sure 
  // a user does not already exist with the same 
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$password = md5($password_1);//encrypt the password before saving in the database
    echo "string";
echo "تم اضافة المنتج  بنجاح  ";
  		$quer="INSERT INTO `add`(`id`, `idu`, `add`, `tex`,`type`) VALUES (NULL,'$user','$add','$name','$type')";



    mysqli_query($conn, $quer);
  	$_SESSION['name'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  // header('location: log.php');
  }
}
?>
</div>
</body>
</html>