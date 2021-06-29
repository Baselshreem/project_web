<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="ss.css">
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
	
<body>
<div id="basil">write a code by basilshraim</div>
<div id="led">

<h1 style="text-align: center;">الاشعارات</h1>
<br>
<br>
<br>

<div id="data" >
	<?php include("contact.php")?>
	<div style="display: none;"><?php include("log.php")?></div>
	<?php
  date_default_timezone_set("Asia/Jerusalem");
$dat=date(DATE_RFC822);
$id=    $_SESSION['id'];
 $na= $_SESSION['name'];
  $nt= $_SESSION['namem'];
   $mony=$_SESSION['mony'];
echo $nt;
echo "string";
echo $id;
$count=0;

$sql = "SELECT * FROM `delavry` WHERE  named='$nt';";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
       while($row = mysqli_fetch_assoc($result)) {
           
       $st=$row['stat'];
        
        echo '
     
     <form method="post" >
       <div id="not" ><a href="showt.php?id='.$row["id"].' "><div id="notp"  style="background-color: #ecb390;"> 
       <pre> ('.$row['namem'].') لقد  تم طلب خدمة التوصيل  من المحل 
            ('.$row['name'].')    الى الزبون 
                </pre>
        </div></a>
<div id="notc"> <button name="notc" style="width:100% ;height: 20px;background-color: red;" value="'.$row['id'].'"> رفض </button>  </div><div  id="nota" > <button name="not" style="width:100% ;height: 20px;background-color: #53c653;" value="'.$row['id'].'">قبول  </button></div></div>


      
</form>
       ';
 

/*
if($st =='no' or ($st=='ok')){
        echo '
     
     <form method="post" >
       <div id="not" ><a href="showt.php?id='.$row["id"].' "><div id="notp"  style="background-color: #F48C1D;"> 
       <pre> ('.$row['namem'].') لقد  تم طلب خدمة التوصيل  من المحل 
            ('.$row['name'].')    الى الزبون 
                </pre>
        </div></a>
<div id="notc"> <button name="notc" style="width:100% ;height: 20px;background-color: red;" value="'.$row['id'].'"> رفض </button>  </div><div  id="nota" > <button name="not" style="width:100% ;height: 20px;background-color: #53c653;" value="'.$row['id'].'">قبول  </button></div></div>


      
</form>
       ';
}*/



  }}  else {

	
    echo "لا توجد اشعارات";
}

 if(isset($_POST['not'])){
$b= $_POST['not'];

$sqln = "SELECT * FROM `delavry` WHERE  id='$b';";
$resultn = mysqli_query($conn, $sqln);
//echo $n;

if (mysqli_num_rows($resultn) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($resultn)) {

$name=$row['name'];
$namem=$row['namem'];



}}





$query="INSERT INTO `notft` (`id`, `idn`, `name`, `namem`, `namet`, `nametu`, `stat`) VALUES (NULL, '$b', '$name', '$namem', '$nt', '$na', 'ok');";
   mysqli_query($conn, $query);
$mony=$mony+7;
$sm = "UPDATE `usertu` SET `mony` = '$mony' WHERE `id` = $id;";
 mysqli_query($conn, $sm);
$_SESSION['mony']=$mony;

$sql = "UPDATE `delavry` SET `stat` =  'ok'  WHERE `id` = $b;";
    
$result = mysqli_query($conn, $sql);
 }
 if(isset($_POST['notc'])){
$b= $_POST['notc'];

$sql = "UPDATE `delavry` SET `stat` =  'no'  WHERE `id` = $b;";
    
$result = mysqli_query($conn, $sql);
 }
mysqli_close($conn);

?>
	


</div>
<div id="b" style="text-align: center;"onclick="history.back()">الرجوع لصفحة الرئيسية</div>
</div>


</body>
</html>

