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
<body >

<div id="led">

<h1 style="text-align: center;"> </h1>
<br>
<br>
<br>


<div style="display: none;"><?php include("log.php")?></div>

<?php include("contact.php")?>

<?php 

$b= $_POST['del'];
 $user=$_SESSION['id'];
 $nam=$_SESSION['name'];
 $mony=$_SESSION['mony'];
 $qin= $_POST['qin'];
  $mid=$_SESSION['idm'];
 $stat=$_SESSION['stat'];
 $v=rand();

 date_default_timezone_set("Asia/Jerusalem");
$dat=date("Y-m-d H:i:s");

if($qin==0){
//echo '<div id="t" style="background-color: red;text-align: center;">الرجاء التاكد من ادخال الكمية</div>';
 header('location: masge.html');
exit();
}

////////////////////////////////////




   $fd=date('d');
   $fh=date('H');
   $fm=date('i');
   echo $fd;
   echo $fh;
   echo $fm;
$nameOfDay = date('D', strtotime($dat));
echo $nameOfDay;
switch ($nameOfDay) {
  case "Fri":
         $fd=$fd+3;
         $fh=23-$fh;
         $fm=59-$fm;
        break;

   case "Sat":
        $fd=$fd+2;
        $fh=23-$fh;
        $fm=59-$fm;
        break;
    case "Sun":
        $fd=$fd+1;
        $fh=23-$fh;
        $fm=59-$fm;
        break;
   case "Mon":
         $fd=$fd+0;
         $fh=23-$fh;
         $fm=59-$fm;
        break;
            case "Tue":
         $fd=$fd+2;
         $fh=23-$fh;
         $fm=59-$fm;
        break;
        case "Wed":
         $fd=$fd+1;
         $fh=23-$fh;
         $fm=59-$fm;
        break;
     
        case "Thu":
        $fd=$fd+0;
        $fh=23-$fh;
        $fm=59-$fm;
        break;
       
        
        
       
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

$dateen=date("Y-m-$fd 23:59:s");
echo $dateen;

///////////////////////////////////////
$sql = "SELECT * FROM prodect where id=$b";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $name=$row["name"];
      $pric=$row["price"];
      $namem=$row['namem'];
      $idm=$row["idu"];
      $idmm=$row["idm"];
      $qu=$row["qin"];
      $_SESSION["qin"]=$qu;
$pricc=$pric*$qin;
         echo  $idmm;
       echo '
jffjjj
     ';
echo $pricc;
    }
    
      
}
if($qu-$qin<0){
echo '<div id="t" style="background-color: red;text-align: center;">ناسف منكم لم تتوفر الكمية</div>';

}

 
 
 

  

 
///////////////////////
elseif($stat=='per'){
$sqb = "SELECT * FROM pial where datend  != 'en' and(idu='$user') and(stat='$stat') and (sto !='ok'); ";
$resb = mysqli_query($conn, $sqb);

if (mysqli_num_rows($resb) > 0) {
  
while($row = mysqli_fetch_assoc($resb) ) {
   $idp=$row["id"];
   echo "vbvbvbvvb";
   echo $q;
$query = "
INSERT INTO `order`(`id`, `name`, `pric`, `date`, `dateen`, `key`, `idu`,`idm`,`idpil`, `qin`, `namem`,`idp`) VALUES(NULL, '$name', '$pric', '$dat','en','$v','$user','$idmm',LAST_INSERT_ID(),'$qin','$namem','$b');";
mysqli_query($conn , $query);

 

}
 
}
 

else{
$pi="INSERT INTO `pial`(`id`, `nam`, `dtat`, `datend`,`key`,`idu`,`idm`,`stat`,`namem`) VALUES (NULL,'$nam','$dat','en','$v','$user','$idmm','$stat','$namem');";
mysqli_query($conn, $pi);
 

$query = "
INSERT INTO `order`(`id`, `name`, `pric`, `date`, `dateen`, `key`, `idu`,`idm`,`idpil`, `qin`, `namem`,`idp`) VALUES(NULL, '$name', '$pric', '$dat','en','$v','$user','$idmm',LAST_INSERT_ID(),'$qin','$namem','$b');";
mysqli_query($conn , $query);






}

///////////////////////
  


}//end pers


elseif($stat=='tixu'){
 
$sqb = "SELECT * FROM pial where datend != 'en' and(idu='$user') and(stat='$stat'); ";
$resb = mysqli_query($conn, $sqb);

if (mysqli_num_rows($resb) > 0) {
  
while($row = mysqli_fetch_assoc($resb) ) {
   $idp=$row["id"];
   echo "vbvbvbvvb";
   echo $q;
$query = "
INSERT INTO `order`(`id`, `name`, `pric`, `date`, `dateen`, `key`, `idu`,`idm`,`idpil`, `qin`, `namem`,`idp`) VALUES(NULL, '$name', '$pric', '$dat','en','$v','$user','$idmm',LAST_INSERT_ID(),'$qin','$namem','$b');";
mysqli_query($conn , $query);
echo "oredr tixu";

}
}
else{
$pi="INSERT INTO `pial`(`id`, `nam`, `dtat`, `datend`,`key`,`idu`,`idm`,`stat`,`namem`) VALUES (NULL,'$nam','$dat','en','$v','$user','$idmm','$stat','$namem');";
mysqli_query($conn, $pi);
echo "pial tixu";

$query = "
INSERT INTO `order`(`id`, `name`, `pric`, `date`, `dateen`, `key`, `idu`,`idm`,`idpil`, `qin`, `namem`,`idp`) VALUES(NULL, '$name', '$pric', '$dat','en','$v','$user','$idmm',LAST_INSERT_ID(),'$qin','$namem','$b');";
mysqli_query($conn , $query);
echo "order tttttttt";






}

///////////////////////
 

}//end tixu






elseif($stat=='tix'){
echo "pars";
 

$sqb = "SELECT * FROM pial where  datend != 'en' and(idu='$user') and(stat='$stat'); ";
$resb = mysqli_query($conn, $sqb);

if (mysqli_num_rows($resb) > 0) {
  
while($row = mysqli_fetch_assoc($resb) ) {
   $idp=$row["id"];
   echo "vbvbvbvvb";
   echo $q;
$query = "
INSERT INTO `order`(`id`, `name`, `pric`, `date`, `dateen`, `key`, `idu`,`idm`,`idpil`, `qin`, `namem`,`idp`) VALUES(NULL, '$name', '$pric', '$dat','en','$v','$user','$idmm',LAST_INSERT_ID(),'$qin','$namem','$b');";
mysqli_query($conn , $query);

echo "oredr tixu";

}
}
else{
$pi="INSERT INTO `pial`(`id`, `nam`, `dtat`, `datend`,`key`,`idu`,`idm`,`stat`,`namem`) VALUES (NULL,'$nam','$dat','en','$v','$user','$idmm','$stat','$namem');";
mysqli_query($conn, $pi);
echo "pial tixu";

$query = "
INSERT INTO `order`(`id`, `name`, `pric`, `date`, `dateen`, `key`, `idu`,`idm`,`idpil`, `qin`, `namem`,`idp`) VALUES(NULL, '$name', '$pric', '$dat','en','$v','$user','$idmm',LAST_INSERT_ID(),'$qin','$namem','$b');";
mysqli_query($conn , $query);
echo "order tttttttt";






}

///////////////////////
 


}//end tix



elseif($stat=='doct'){
echo "pars";
 

$sqb = "SELECT * FROM pial where datend  != 'en' and(idu='$user') and(stat='$stat'); ";
$resb = mysqli_query($conn, $sqb);

if (mysqli_num_rows($resb) > 0) {
  
while($row = mysqli_fetch_assoc($resb) ) {
   $idp=$row["id"];
   echo "vbvbvbvvb";
   echo $q;
$query = "
INSERT INTO `order`(`id`, `name`, `pric`, `date`, `dateen`, `key`, `idu`,`idm`,`idpil`, `qin`, `namem`,`idp`) VALUES(NULL, '$name', '$pric', '$dat','en','$v','$user','$idmm',LAST_INSERT_ID(),'$qin','$namem','$b');";
mysqli_query($conn , $query);

echo "oredr tixu";

}
}
else{
$pi="INSERT INTO `pial`(`id`, `nam`, `dtat`, `datend`,`key`,`idu`,`idm`,`stat`,`namem`) VALUES (NULL,'$nam','$dat','en','$v','$user','$idmm','$stat','$namem');";
mysqli_query($conn, $pi);
echo "pial tixu";

$query = "
INSERT INTO `order`(`id`, `name`, `pric`, `date`, `dateen`, `key`, `idu`,`idm`,`idpil`, `qin`, `namem`,`idp`) VALUES(NULL, '$name', '$pric', '$dat','en','$v','$user','$idmm',LAST_INSERT_ID(),'$qin','$namem','$b');";
mysqli_query($conn , $query);
echo "order tttttttt";






}

///////////////////////
 

}//end doct





else{
  


$sqb = "SELECT * FROM pial where  datend  != 'en' and (idu='$user')  and(stat='$stat');";
$resb = mysqli_query($conn, $sqb);

if (mysqli_num_rows($resb) > 0) {
while($row = mysqli_fetch_assoc($resb) ) {

 $idp=$row["id"];
$query = "
INSERT INTO `order`(`id`, `name`, `pric`, `date`, `dateen`, `key`, `idu`,`idm`,`idpil`, `qin`, `namem`,`idp`) VALUES(NULL, '$name', '$pric', '$dat','en','$v','$user','$idmm',LAST_INSERT_ID(),'$qin','$namem','$b');";
mysqli_query($conn , $query);
echo "order ni";

}
}
else{
$pi="INSERT INTO `pial`(`id`, `nam`, `dtat`, `datend`,`key`,`idu`,`idm`,`stat`,`namem`) VALUES (NULL,'$nam','$dat','en','$v','$user','$idmm','$stat','$namem');";
mysqli_query($conn, $pi);
echo "pial ni";

$query = "
INSERT INTO `order`(`id`, `name`, `pric`, `date`, `dateen`, `key`, `idu`,`idm`,`idpil`, `qin`, `namem`,`idp`) VALUES(NULL, '$name', '$pric', '$dat','en','$v','$user','$idmm',LAST_INSERT_ID(),'$qin','$namem','$b');";
mysqli_query($conn , $query);
echo "oreder ssssss";





}


 ///////////////////////
 




}//end sal

 
 





?>


</div>
      
</body>
</html>