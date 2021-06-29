<!DOCTYPE >
<html>
<head>
	<meta charset="UTF-8">

	<title></title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
 text-align: right;
}
table#t01 {
margin-top: 10%;
float: right;
  width: 30%;    
  background-color: #f1f1c1;
}
</style>
	<link rel="stylesheet" type="text/css" href="ss.css">
   <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
  <div id="basil">write a code by basilshraim</div>
<body>

<div id="led">

<h1 style="text-align: center;"> سلة المشتريات</h1>
<br>
<br>
<br>

<div id="data">

<div style="display: none;"><?php include("log.php")?></div>
<?php include("contact.php")?>
<?php


//$user=$_SESSION['id'];
$id=$_SESSION['id'];
 $stat=$_SESSION['stat'];
 $mony=$_SESSION['mony'];
 date_default_timezone_set("Asia/Jerusalem");
$dat=date("Y-m-d H:i:s");
   $fm=date('i');

$sql = "SELECT * FROM `piald` where idu='$id' and (stat='$stat');";
$s="SELECT SUM(pric)FROM `order`  ";
//echo $n;

$result = mysqli_query($conn, $sql);
$rs = mysqli_query($conn, $s);

//$row = mysqli_fetch_assoc($result);
//$c=$row["key"];
//$rf=$row["dateen"];
//$rfn=$row["date"];
$coun=0;
if (mysqli_num_rows($result) > 0 ) {
	 while($row = mysqli_fetch_assoc($result)) {
    	$c=$row["id"];
      $nam=$row["nam"];
        $namm=$row["namem"];
    $cm=$row["idm"];
    $sta=$row["del"];
     
    $key=$row['key'];
       $coun=0;

	 
 $so = "SELECT * FROM `orderd` where idpil='$c' and idm='$cm'; ";

$reo = mysqli_query($conn, $so);

      if (mysqli_num_rows($reo) > 0 ) {
      	//$e=$_POST["bbs"];
      	
 echo '  <table id="t01">
  ';

   while(  $row = mysqli_fetch_assoc($reo)) {
    if($row["idpil"]==$c){
   	$coun=$coun+$row["pric"];
    $nao=$row['name'];
    $sql = mysqli_query($conn," UPDATE pial SET tot='$coun' WHERE id = '$c' ");
    echo "ff";
    echo $sta;
   $vv= "عملية شحن";
   

echo '
<form method="post" >
  <tr>
  <th style="background-color: red;"><input type="submit" value="حذف">  </th>
    <th style="background-color: red;">'.$row["pric"].': السعر</th>
    <th style="background-color: #ecb390;">'.$row["qin"].':الكمية</th> 
    <th style="background-color:#ecb390;">اسم البضاعة: '.$row["name"].' </th>

  </tr>
      </form> 

       


';


}
}
echo '  


<tr>

    <td style="background-color: red;" name="pt">المجموع :'.$coun.' </td>
    <th colspan="2" style="background-color: white;"></th>
    
  </tr>
</table>';
}
  echo '  </div>';



  

}




 }



 else {

	
    echo "0 results";
}

if(isset($_POST['s'])){

  if($mony-7>=0){
    $mony=$mony-7;
    if($stat=='per'){
    $sm = "UPDATE `userp` SET `mony` = '$mony' WHERE `id` = $id;";
 mysqli_query($conn, $sm);
   }
    if($stat=='sal'){
    $sm = "UPDATE `users` SET `mony` = '$mony' WHERE `id` = $id;";
 mysqli_query($conn, $sm);
   }


    $_SESSION['mony']=$mony;
$b= $_POST['s'];
echo "cccc";
echo $coun;
$coun=$coun+7;
$query = "
INSERT INTO `order`(`id`, `name`, `pric`, `date`, `dateen`, `key`, `idu`,`idm`,`idpil`, `qin`, `namem`) VALUES(NULL, 'عملية شحن ' , '7', NULL,NULL,NULL,NULL,'$cm','$b',NULL,NULL);";
mysqli_query($conn , $query);
echo "ddddd";
echo $coun;
    $sql = mysqli_query($conn," UPDATE pial SET del = 'مع خدمة توصيل ',datend='$dat',tot='$coun' WHERE id = '$b' ");
    //$result = mysqli_query($conn, $sql);
$count=0;
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
echo $i;

echo "ddd";
echo $coun;

$query = "INSERT INTO `delavry` (`id`, `idu`, `date`,`name`, `namem`, `named`,`dater`,`dates`,`stat`) VALUES (NULL, '$i', '$dat','$nam', '$namm', NULL ,NULL,NULL,NULL);";
        echo " تم التسجيل بنجاح";
    mysqli_query($conn, $query);

  /*$quer = " UPDATE `delavry`
SET `delavry`.`idu` = '44'
WHERE `delavry`.`stat` <> 'accp'
AND TIMESTAMPDIFF('MINT', `delavry`.`date`, now()) >= 5";

 mysqli_query($conn, $quer);

*/



$sql = "SELECT * FROM `delavry` WHERE 1;";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
  
       while($row = mysqli_fetch_assoc($result)) {
$da=$row['date'];
$id=$row['id'];
$stat=$row['stat'];
  }
  //$e= $fm+5;
  //$date=date("Y-m-d H:$e:s");
  //echo $date;
$cenvertedTime = date('Y-m-d H:i:s',strtotime('+0 hour +5 minutes +0 seconds',strtotime($da)));
  //echo $da;
echo $cenvertedTime;
while($dat>=$cenvertedTime){
if($stat=='' or $stat=='cans')
{

$sql = "UPDATE `delavry` SET `idu` =  '55'  WHERE `id` = $id;";
    
$result = mysqli_query($conn, $sql);
}
}//end if
}//end w
}

else{
echo "لا يوجد رصيد لطلب خدمة التوصيل";
}












}

if(isset($_POST['rw'])){
$b= $_POST['rw'];
    $sql = mysqli_query($conn," UPDATE piald SET del = 'بدون خدمة توصيل  ' ,datend='$dat' WHERE id = '$b' ");
   // $result = mysqli_query($conn, $sql);

}




mysqli_close($conn);
?>
	
	


       






     
<div style="margin-right: 0px;"></div>


</div>


<div id="b" style="text-align: center;"onclick="history.back()">الرجوع لصفحة الرئيسية</div>



</div>


</body>
</html>