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


 $user=$_SESSION['id'];
$id=$_SESSION['id'];
 $stat=$_SESSION['stat'];
 $mony=$_SESSION['mony'];
 date_default_timezone_set("Asia/Jerusalem");
$dat=date("Y-m-d H:i:s");
   $fm=date('i');

$sql = "SELECT * FROM `pial` where idu='$id' and (stat='$stat') and (sto !='ok');";
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
     $idpp=$row["idp"];
    $key=$row['key'];
       $coun=0;

	?>
    
    
  <form method="post" >
<div id="bac" >
 
  <div  style="text-align: left;display: inline-block;width: 20%;">
    <div id="b" name="bbs"> نوع التوصيل
 
 <select class="selectpicker" onchange="myFunction()" name="td" required style="margin-left: 10px;"> 
  
<option value="مع خدمة توصيل">مع خدمة توصيل </option>
<option value="بدون خدمة توصبل">بدون خدمة توصيل</option>
</select>
  
</div>
  

     <div id="b" name="bbs"> شركة التوصيل   
 
   
  <select class="selectpicker" name="dd" required style="margin-left: 10px;">
 <option value="">  ds  شركة التوصيل</option>  
<?php  
  $sqls = "SELECT * FROM userc ";
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
   
 
 
 
       <button style="background-color: yellow;margin-left:20%; " name="ss" value="'.$row['id'].'">تأكيد الطلب</button>
  
         </div>
 
  <?php
 if(isset($_POST['td'])){
$r=$_POST['dd'];
if($r=='بدون خدمة توصيل')
echo "sss";
}
echo $cm;  
echo $c;    
$so = "SELECT * FROM `order` where idpil='$c' and idm='$cm'; ";

$reo = mysqli_query($conn, $so);

      if (mysqli_num_rows($reo) > 0 ) {
      	//$e=$_POST["bbs"];
      	
 echo '  <table id="t01">
  ';

   while(  $row = mysqli_fetch_assoc($reo)) {
    if($row["idpil"]==$c){
   	$coun=$coun+($row["pric"]*$row["qin"]);
    $nao=$row['name'];
$ba=$coun+10;
    $sql = mysqli_query($conn," UPDATE pial SET tot='$ba' WHERE id = '$c' ");
    echo "ff";
    echo $sta;
   $vv= "عملية شحن";
   

echo '

  <tr>
    <th style="background-color: red;">   
 
 
 
       <button style="background-color: yellow;margin-left:50%; " name="s" value="'.$row['id'].'">حذف</button>
    </th>
   <th style="background-color: red;">'.$row["pric"].': السعر</th>
    <th style="background-color: #ecb390;">'.$row["qin"].':الكمية</th> 
    <th style="background-color:#ecb390;">اسم البضاعة: '.$row["name"].' </th>
  </tr>
       

       


';


}
}
 
echo '  

<tr>

    <td style="background-color: red;" name="pt">المجموع :54 </td>
    <th colspan="2" style="background-color: white;">ثمن خدمة التوصيل</th>
    
  </tr>
<tr>

    <td style="background-color: red;" name="pt">المجموع :'.$ba.' </td>
    <th colspan="2" style="background-color: white;"></th>
    
  </tr>


 
 
</table>';
}
  echo '  </div></form>';



  

}




 }



 else {

	
    echo "0 results";
}
 
if(isset($_POST['ss'])){
$td=$_POST['td'];
$dd=$_POST['dd'];
   

$b= $_POST['ss'];
echo $c;
 echo "dddsss";
echo $user;
echo $td;
echo $dd;//UPDATE `pial` SET  `datend` = '$dat', `del` = '$td', `named` = '$dd', sto='ok'   WHERE id = '$b'
 
  
$sqls =  mysqli_query($conn,"UPDATE `pial` SET  `datend` = 'end', `del` = '$td', `named` = '$dd', sto='ok'   WHERE id = '$c' ");

 //$smql=" UPDATE `pial` SET    sto='ok'   WHERE id = '$c';";
//mysqli_query($conn, $smql);
echo "cccx";
////////////////////////////

 $queryz = "INSERT INTO `delavry` (`id`, `date`,`idu`,`name`, `namem`, `named`,`dater`,`dates`,`stat`) VALUES (NULL, '$dat','$dd','$nam', '$namm', '$dd',NULL,NULL,NULL);";
        echo " تم التسجيل بنجاح";
    mysqli_query($conn, $queryz);
      
 
$soo = "SELECT * FROM `pial` where id='$c'; ";

$reoo = mysqli_query($conn, $soo);

      if (mysqli_num_rows($reoo) > 0 ) {
      	//$e=$_POST["bbs"];
      	
 

   while(  $row = mysqli_fetch_assoc($reoo)) {
$bs=$row['idm'];
}}
echo "dssssssssaaaaaaaaaaaaaaaaaaaaa";
echo $bs;
echo "dsxxx";
///////////////////////////
 
/* 
if($qu-$qin<0){
echo '<div id="t" style="background-color: red;text-align: center;">ناسف منكم لم تتوفر الكمية</div>';
echo $qin;
echo 'cccc';
echo $qu;
}*/

//if (count($errors) == 0 &&($qu-$qin>=0) &&  ($mony-($pric*$qin)>=0) && ($qin>0)) {
if (count($errors) == 0 &&  ($mony-$ba >=0)) { 
  $tot=($pric*$qin);
  $mony=$mony-$ba;
  $qu=$qu-$qin;


echo "string";
echo $idmm;
if($stat=='sal' && ($idmm==$mid)){
  echo "non patr";
exit();   
return;
  echo "no pay";
}//end
 
elseif($stat=='per'){
echo "pars";
$q = "UPDATE `prodect` SET `qin` = '$qu' WHERE `id` = $b;";
  mysqli_query($conn, $q);//update product
 $sql = "UPDATE `userp` SET `mony` = '$mony' WHERE `id` = $user;";
 mysqli_query($conn, $sql);

  $sqlm = "SELECT * FROM users where idm='$bs';";
$resm = mysqli_query($conn, $sqlm);
//echo $n;

if (mysqli_num_rows($resm) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($resm)) {
      
      $monys=$row["mony"];
    }
    $monys=$monys+$coun;
}//end
$sm = "UPDATE `users` SET `mony` = '$monys' WHERE `idm` = $bs;";
 mysqli_query($conn, $sm);
///////////////////////
echo "basil";
echo $monys;
 





 
 $quer="INSERT INTO `notf`(`id`, `text`, `stat`, `date`, `idm`, `idmo`, `idu`, `mony`,`state`,`name`) VALUES (NULL,'prodect req','unred','$dat','$idmm','0','$user','$pric','$stat','$nam')";
         mysqli_query($conn, $quer);


}//end pers


elseif($stat=='tixu'){
echo "pars";
$q = "UPDATE `prodect` SET `qin` = '$qu' WHERE `id` = $b;";
  mysqli_query($conn, $q);//update product
 $sql = "UPDATE `usertu` SET `mony` = '$mony' WHERE `id` = $user;";
 mysqli_query($conn, $sql);

  $sqlm = "SELECT * FROM users where idm='$bs';";
$resm = mysqli_query($conn, $sqlm);
//echo $n;

if (mysqli_num_rows($resm) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($resm)) {
      
      $monys=$row["mony"];
    }
   $monys=$monys+$coun;
}//end
$sm = "UPDATE `users` SET `mony` = '$monys' WHERE `idm` = $bs;";
 mysqli_query($conn, $sm);
///////////////////////

 

$query = "
INSERT INTO `order`(`id`, `name`, `pric`, `date`, `dateen`, `key`, `idu`,`idm`,`idpil`, `qin`, `namem`) VALUES(NULL, '$name', '$tot', '$dat','$dateen','$v','$user','$idmm',LAST_INSERT_ID(),'$qin','$namem');";
mysqli_query($conn, $query);
echo "order tttttttt";




 
///////////////////////
 $quer="INSERT INTO `notf`(`id`, `text`, `stat`, `date`, `idm`, `idmo`, `idu`, `mony`,`state`,`name`) VALUES (NULL,'prodect req','unred','$dat','$idmm','0','$user','$pric','$stat','$nam')";
         mysqli_query($conn, $quer);


}//end tixu






elseif($stat=='tix'){
echo "pars";
$q = "UPDATE `prodect` SET `qin` = '$qu' WHERE `id` = $b;";
  mysqli_query($conn, $q);//update product
 $sql = "UPDATE `usert` SET `mony` = '$mony' WHERE `id` = $user;";
 mysqli_query($conn, $sql);

  $sqlm = "SELECT * FROM users where idm='$bs';";
$resm = mysqli_query($conn, $sqlm);
//echo $n;

if (mysqli_num_rows($resm) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($resm)) {
      
      $monys=$row["mony"];
    }
     $monys=$monys+$coun;
}//end
$sm = "UPDATE `users` SET `mony` = '$monys' WHERE `idm` = $bs;";
 mysqli_query($conn, $sm);
///////////////////////

 
 $quer="INSERT INTO `notf`(`id`, `text`, `stat`, `date`, `idm`, `idmo`, `idu`, `mony`,`state`,`name`) VALUES (NULL,'prodect req','unred','$dat','$idmm','0','$user','$pric','$stat','$nam')";
         mysqli_query($conn, $quer);


}//end tix



elseif($stat=='doct'){
echo "pars";
$q = "UPDATE `prodect` SET `qin` = '$qu' WHERE `id` = $b;";
  mysqli_query($conn, $q);//update product
 $sql = "UPDATE `userd` SET `mony` = '$mony' WHERE `id` = $user;";
 mysqli_query($conn, $sql);

  $sqlm = "SELECT * FROM users where idm='$bs';";
$resm = mysqli_query($conn, $sqlm);
//echo $n;

if (mysqli_num_rows($resm) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($resm)) {
      
      $monys=$row["mony"];
    }
    $monys=$monys+$coun;
}//end
 

$query = "
INSERT INTO `order`(`id`, `name`, `pric`, `date`, `dateen`, `key`, `idu`,`idm`,`idpil`, `qin`, `namem`) VALUES(NULL, '$name', '$tot', '$dat','$dateen','$v','$user','$idmm',LAST_INSERT_ID(),'$qin','$namem');";
mysqli_query($conn, $query);
echo "order tttttttt";






 

///////////////////////
 $quer="INSERT INTO `notf`(`id`, `text`, `stat`, `date`, `idm`, `idmo`, `idu`, `mony`,`state`,`name`) VALUES (NULL,'prodect req','unred','$dat','$idmm','0','$user','$pric','$stat','$nam')";
         mysqli_query($conn, $quer);


}//end doct





else{
  echo "ni";
$q = "UPDATE `prodect` SET `qin` = '$qu' WHERE `id` = $b;";
  mysqli_query($conn, $q);
 $smu = "UPDATE `users` SET `mony` = '$mony' WHERE `id` = $user;";
 mysqli_query($conn, $smu);

$sqlm = "SELECT * FROM users where idm='$idmm';";
$resm = mysqli_query($conn, $sqlm);
//echo $n;

if (mysqli_num_rows($resm) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($resm)) {
      
      $monys=$row["mony"];
    }
     $monys=$monys+$coun;
}//end

$sm = "UPDATE `users` SET `mony` = '$monys' WHERE `idm` = $bs;";
 mysqli_query($conn, $sm);
///////////////////////


 
$quer="INSERT INTO `notf`(`id`, `text`, `stat`, `date`, `idm`, `idmo`, `idu`, `mony`,`state`,`name`) VALUES (NULL,'prodect req','unred','$dat','$idmm','0','$user','$pric','$stat','$nam')";
         mysqli_query($conn, $quer);




}//end sal

$_SESSION['mony']=$mony;
$_SESSION['qin']=$qu;
echo '<div id="t" style="background-color: red;text-align: center;">شكرا لشرائكم سوف نقوم بتوصيل مشترياتكم في اسرع وقت</div>';
}//end if cond

else{

echo '<div id="t" style="background-color: red;text-align: center;">عذرا رصيدكم الحالي غير كافي لاتمام عملية الشراء</div>';



}
}
 
if(isset($_POST['s'])){

   

$b= $_POST['s'];
echo $b;
 
 $sql = mysqli_query($conn," DELETE FROM  `order` WHERE id='$b'; ");
}

if(isset($_POST['rw'])){
$b= $_POST['rw'];
    $sql = mysqli_query($conn," UPDATE pial SET del = 'بدون خدمة توصيل  ' ,named='$dd' WHERE id = '1'");
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