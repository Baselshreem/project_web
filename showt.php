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
  <h1 style="text-align: center;">  حساب تجاري</h1>



<div style="display: none;"><?php include("log.php")?></div>

  <div style="display: none;"><?php include("contact.php")?>
	</div>
<?php

 $id = $_GET['id'];
 $nt= $_SESSION['namem'];

$sql = "SELECT * FROM `delavry` WHERE  id='$id';";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($rows = mysqli_fetch_assoc($result)) {
    
echo '
 
<div style="background-color:#cad2c5;width: 40%;height: 250px;margin-left: 30%;">'. $rows ["dates"].'

  
<div> ('.$rows['name'].')  لقد  تم طلب خدمة التوصيل  من المحل  ('.$rows['namem'].')
               الى الزبون  
              </div>
<br><br>
 <form method="post" >
<div style="float: right;">
  <div style="width: 100%;display: inline-block;height: 30px;text-align: center;margin-top: 5%;">

<div id="b" style="background-color: #f77f00;">  '.$rows["dater"].': مكان الاستلام</div> <br>
<div id="b" style="background-color: #f77f00;"> '. $rows ["dates"].'
: مكان التوصيل</div> <br>
 
 
<div style="float: right;"> <div id="b" name="bbs" style="background-color: #f77f00;">  اسم السائق
  
  <select class="selectpicker" name="bb" required style="margin-left: 10px;background-color: #f77f00;"> <option value="">    اسم السائق</option>  '; 
}}
  ?>

<?php  
  $sqls = "SELECT * FROM usertu ";
 $results = mysqli_query($conn, $sqls); //echo $n;  
if (mysqli_num_rows($results) > 0) {
      // output data of each row    
 while($rows = mysqli_fetch_assoc($results)) { 
            $m=$rows["nameme"];
 echo '
   <option value="'.$rows["name"].'"> '.$rows["name"].' </option>  '; 
 }   
} 
 
?> 
 <?php
echo '
 </select>
  
 
<div style="width: 100%;display: inline-block;height: 30px;text-align: center;margin-top: 5%;">

<button style="width:20%;height: 25px;" name="c"   value="'.$row['id'].'"> رفض</button>
<button style="width:20%;height: 25px;" name="t" value="'.$row['id'].'">قبول </button>

</div>
</div>
</form>
';
 ?>

 


<?php

if(isset($_POST['t'])){
 $n = $_POST["bb"];
   
$sqln = "SELECT * FROM `delavry` WHERE  id='$id';";
$resultn = mysqli_query($conn, $sqln);
//echo $n;

if (mysqli_num_rows($resultn) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
$name=$row['name'];
$namem=$row['namem'];


}}

$query="INSERT INTO `notft` (`id`, `idn`, `name`, `namem`, `namet`, `nametu`, `stat`) VALUES (NULL, '$id', '$name', '$namem', '$nt', '$n', 'whit');";
   mysqli_query($conn, $query);

$sql = "UPDATE `delavry` SET `named` =  '$n' ,`stat`='accp'  WHERE `id` = $id;";
    
$result = mysqli_query($conn, $sql);
//echo $n;
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