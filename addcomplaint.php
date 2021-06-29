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
<body>


    <h1 style="text-align: center;"> إضافة شكوى</h1>
    <form method="POST">
<div id="led" style="width: 50%;height: 200px;margin-left: 30%; background-color: #BF7500;">
   
<p style="text-align: right;background-color: #BF7500;">(: أضف شكواك لنا
</p>
<div id="b" style="margin-left: 250px;background-color: #BF7500;border-style: none;"><input type=""  name="add" style="background-color:  #BF7500;">: العنوان </div>
<br>
<textarea name="te" style="width: 100%;height: 100px;text-align: right;resize: none;"></textarea>
<hr>
<div id="b" style="text-align: center; float: right;">
  <button type="submit" name="com" > إرسال </button> </div> 
  <div id="b" style="text-align: center; float: left;">
  <button type="submit" name="reg_mon" ><a href="complaint.php"> الرجوع لصفحة الرئيسية </a></button></div>
</form>
<?php include("contact.php")?>
<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

$uid= $_SESSION['id'];
// connect to the database

// REGISTER USER
if (isset($_POST['com'])) {
	 
  // receive all input values from the form
  $add = mysqli_real_escape_string($conn, $_POST['add']);
  $te = mysqli_real_escape_string($conn, $_POST['te']);
  if (empty($add)) {
 array_push($errors, "Password is required");
    echo"الرجاء ادخال عنوان";
    exit;
  }
  if (empty($te)) {
    array_push($errors, "Password is required");
  }
  
  if (count($errors) == 0) {
  	


  	$query = "INSERT INTO `conc` (`id`, `idu`, `par`, `add`) VALUES (NULL, '$uid', '$te', '$add');";
  			echo " تمت الاضافة شكرا لكم";
  	mysqli_query($conn, $query);
  	
  
  }

else{
echo "لم تتم اضافة شكواك الرجاء المحاولة فيما بعد";

}
}
?>
</div>

</body>
</html>
