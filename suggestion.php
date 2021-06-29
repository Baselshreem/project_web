<!DOCTYPE>
<html>
<head>
	<meta charset="UTF-8">
    <title></title>
      <script src="j.js"></script>
       <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <link rel="stylesheet" type="text/css" href="ss.css">
</head>
  <div id="basil">write a code by basilshraim</div>
<body>


    <h1 style="text-align: center;"> إضافة إقتراح</h1>
    <form method="POST" action="">
<div id="led" style="width: 50%;height: 200px;margin-left: 30%; background-color: #BF7500;">

   
<p style="text-align: right;background-color: #BF7500;">(: 
	أضف اقتراح لنا
</p>
<div id="b" style="margin-left: 250px;background-color: #BF7500;border-style: none;"><input type=""  name="add" style="background-color:  #BF7500;">: العنوان </div>
<br>
<textarea name="te" style="width: 100%;height: 100px;text-align: right;resize: none;"></textarea>
<hr>
<div id="b" style="text-align: center; float: right;">
  
  <button  type="submit" name="sug" > إرسال </button> </div> 
 <div id="b" style="text-align: center; float: left;">
  <button type="submit" name="reg_mon" ><a href="complaint.php"> الرجوع لصفحة الرئيسية</a></button></div> </form>



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
if (isset($_POST['sug'])) {

  // receive all input values from the form
  $add = mysqli_real_escape_string($conn, $_POST['add']);
  $te = mysqli_real_escape_string($conn, $_POST['te']);
  if (empty($add)) {
    array_push($errors, "Username is required");
    echo "الرجاء ادخال عنوان";
exit;
  }
  if (empty($te)) {
    array_push($errors, "Password is required");
  }
  
  if (count($errors) == 0) {
  	


  	$query = "INSERT INTO `sug` (`id`, `idu`, `par`, `add`) VALUES (NULL, '$uid', '$te', '$add');";
  			echo "تمت الاضافة بنجاح شكرا لكم";
  	mysqli_query($conn, $query);
  	
  
  }
else{
echo "لم تتم اضافة الرجاء المحاولة فيما بعد";
}
}


?>

</div>



</div>
</body>
</html>
