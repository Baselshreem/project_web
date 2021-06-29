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

<h1 style="text-align: center;"> سلة الطلبات</h1>
<br>
<br>
<br>

<br>
<div id="bn">
  
<div id="but">
<a ><div id="b"><div style="display: none;"><?php include("log.php")?></div>
      
        اسم المستخدم:  <?php

        
        echo $_SESSION['name'];

        //echo $username;
        ?></div></a>  
</div>

<!--juuuuu  -->

<div id="bt" style="text-align: left;">
  
<a ><div id="b">المنطقة :<?php

        
echo $_SESSION['location'];
?></div></a>


</div>

</div>

<div id="data">

<div style="display: none;"><?php include("log.php")?></div>
<?php include("contact.php")?>
<?php


//$user=$_SESSION['id'];
$id=$_SESSION['idm'];
 $stat=$_SESSION['stat'];

 date_default_timezone_set("Asia/Jerusalem");
$dat=date("Y-m-d H:i:s");
   $fm=date('i');

$sql = "SELECT * FROM `pial` where idm='$id' ;";
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

    $key=$row['key'];
       $coun=0;



         
$so = "SELECT * FROM `order` where idpil='$c'";

$reo = mysqli_query($conn, $so);

      if (mysqli_num_rows($reo) > 0 ) {
      	//$e=$_POST["bbs"];
      	
 

   while(  $row = mysqli_fetch_assoc($reo)) {
    if($row["idpil"]==$c){
   	$coun=$coun+$row["pric"];
    
   
    
       



}
}

}
  



  

}




 }



 else {

	
    echo "0 results";
}

if(isset($_POST['s'])){
$b= $_POST['s'];
$coun=$coun+7;
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

}//end if
}//end w
}













}

if(isset($_POST['rw'])){
$b= $_POST['rw'];
    $sql = mysqli_query($conn," UPDATE pial SET del = 'بدون خدمة توصيل  ' ,datend='$dat' WHERE id = '$b' ");
   // $result = mysqli_query($conn, $sql);

}




mysqli_close($conn);
?>
	
	


       






     
<div style="margin-right: 0px;"></div>


</div>


<div id="b" style="text-align: center;"onclick="history.back()">الغاء</div>



</div>


</body>
</html>