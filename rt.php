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

<div id="led" >
  <h1 style="text-align: center;">  طلب تكسي</h1>



<div style="display: none;"><?php include("log.php")?></div>

  <div style="display: none;"><?php include("contact.php")?>
	</div>
<?php
 date_default_timezone_set("Asia/Jerusalem");
$dat=date("Y-m-d H:i:s");
 $id = $_GET['id'];
 $nt= $_SESSION['namem'];
$nam=$_SESSION['name'];
$sql = "SELECT * FROM `delavry` WHERE  id='$id';";
$result = mysqli_query($conn, $sql);
//echo $n;

 
    echo '
 
<div style="background-color:#cad2c5;width: 40%;height: 250px;margin-left: 30%;">
  
 
<br><br>
 <form method="post" >
<div style="float: right;"> <div id="b" name="bbs" style="background-color: #f77f00;">  اسم المكتب  
  
  <select class="selectpicker" name="bb" required style="margin-left: 10px;background-color: #f77f00;"> <option value="">    اسم المكتب</option>  '; ?>

<?php  
  $sqls = "SELECT * FROM usert ";
 $results = mysqli_query($conn, $sqls); //echo $n;  
if (mysqli_num_rows($results) > 0) {
      // output data of each row    
 while($rows = mysqli_fetch_assoc($results)) { 
            $m=$rows["nameme"];
 echo '
   <option value="'.$rows["namem"].'"> '.$rows["namem"].' </option>  '; 
 }   
} 
 
?> 
 
 </select>
  
 </div>
 <br>
<div id="b" style="background-color: #f77f00;"><input style="background-color: #f77f00;" type="" name="de">مكان الاستلام</div> <br>
<div id="b" style="background-color: #f77f00;"><input style="background-color: #f77f00;" type="" name="ds">مكان التوصيل</div> <br>
</div>
<div style="width: 100%;display: inline-block;height: 30px;text-align: center;margin-top: 5%;">
 
<button style="width:20%;height: 25px;" name="hht" value="'.$row['id'].'" onclick="history.back()">الغاء</button>
<button style="width:20%;height: 25px;" name="t" value="'.$row['id'].'">أطلب</button>

</div>
</div>
</form>

 
 

<?php include("contact.php")?>
<?php

if(isset($_POST['t'])){
 $n = $_POST["n"];
 $bb = $_POST["bb"];
 $de= mysqli_real_escape_string($conn, $_POST['de']);
 $ds= mysqli_real_escape_string($conn, $_POST['ds']);
 $querys= "INSERT INTO `delavry` (`id`, `date`, `idu`, `name`, `namem`, `named`, `dater`, `dates`, `stat`, `red`) VALUES (NULL, '$dat', '5', '$nam', '$bb', '$ds', '$de', 'd', 'd', 'w');";
        echo " تم التسجيل بنجاح";
    mysqli_query($conn, $querys);
	}

if(isset($_POST['c'])){
 $sql = "SELECT * FROM `usert`";
if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $count=mysqli_num_rows($result);
  printf("Result set has %d rows.\n",$count);
  // Free result set
  mysqli_free_result($result);
  }
echo "string";
echo $count;
$i=rand(1, $count);

$sql = "UPDATE `delavry` SET `idu` =  '$i', `stat`='cans'  WHERE `id` = $id;";
    
$result = mysqli_query($conn, $sql);
//echo $n;
  }


mysqli_close($conn);
?>


</div>
</body>
</html>