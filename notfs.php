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
$id=    $_SESSION['idm'];
 $na= $_SESSION['name'];

echo $id;
$count=0;

$sql = "SELECT * FROM `notf` WHERE   idm='$id' and stat='unred';";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $mar=$row['idm'];
      $us=$row['idu'];
      $mon=$row['mony'];
      $idn=$row['id'];
$st=$row['state'];
    	$count++;
     $state=$row['stat'];

     if($state=='red'){
       echo '
     
     <form method="post" >
       <div id="not" ><a href="show.php?id='.$row["id"].' "><div id="notp"  style="background-color: #F48C1D;"> لقد طلب منك  بضاعة بقيمة  '.$row['mony'].' '.$row['name'].' </div></a><div id="notc"> <button name="notc" style="width:100% ;height: 20px;background-color: red;" value="'.$row['id'].'"> رفض </button>  </div><div  id="nota" > <button name="not" style="width:100% ;height: 20px;background-color: #53c653;" value="'.$row['id'].'">قبول  </button></div></div>
      
</form>
       ';
}
    
 if($state=='unred'){  
   

echo '
     
     <form method="post" >
       <div id="not" ><a href="show.php?id='.$row["id"].' "><div id="notp"  style="background-color:#ecb390;"> لقد طلب منك  بضاعة بقيمة  '.$row['mony'].' '.$row['name'].' </div></a><div id="notc"> <button name="notc" style="width:100% ;height: 20px;background-color: red;" value="'.$row['id'].'"> رفض </button>  </div><div  id="nota" > <button name="not" style="width:100% ;height: 20px;background-color: #53c653;" value="'.$row['id'].'">قبول  </button></div></div>
      
</form>
       ';




   }  
   
    echo "string";
  $userd= $row['idu'];
echo $count;
    $_SESSION['mm']=$count;





  }

  if(isset($_POST['not'])){
  
  
$b= $_POST['not'];
$sql = "SELECT * FROM `notf` WHERE   id='$b';";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
$un=$row['idu'];
$sn=$row['state'];
}}
echo "a";
echo $b;
  $sql = "UPDATE `notf` SET `stat` = 'red' WHERE `id` = '$b';";
    
$result = mysqli_query($conn, $sql);
echo $userd;
echo "dd";
echo $b;

  $quer="INSERT INTO `notf`(`id`, `text`, `stat`, `date`, `idm`, `idmo`, `idu`, `mony`,`state`,`name`) VALUES (NULL,'ans prodect acp','unred','$dat','0','2','$un','$mon','$sn','$na')";
      mysqli_query($conn, $quer);
echo "ff";
}

if(isset($_POST['notc'])){
  
$b= $_POST['notc'];
$sql = "SELECT * FROM `notf` WHERE   id='$b';";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
$un=$row['idu'];
$sn=$row['state'];
}}
echo "cc";
echo $b;
///////////////////////////////

$sql = "UPDATE `notf` SET `stat` = 'red' WHERE `id` = '$b';";
    
$result = mysqli_query($conn, $sql);
 /////////////////////////////////
  echo "bdj";
  echo $mar;
 $sqls = "SELECT * FROM users where idm='$mar';";
$resms = mysqli_query($conn, $sqls);
//echo $n;
echo "gfgbasel";
if (mysqli_num_rows($resms) > 0) {
  echo "ilov";
    // output data of each row
    while($row = mysqli_fetch_assoc($resms)) {
      echo "basil";
     $monys=$row["mony"];
    }
    echo $mon;
    echo $monys;
    $monys=$monys - $mon;
echo "stringeeeeee";
echo $monys;
/////////////////////

$_SESSION['mony']=$monys;


$sqls = "UPDATE `users` SET `mony` = '$monys' WHERE `idm` = '$mar';";
 mysqli_query($conn, $sqls);
}
///////////////////
    if($sn=='per'){
echo "per fjjfkmfkf";
 $sqlp = "SELECT * FROM userp where id='$un';";
$resmp = mysqli_query($conn, $sqlp);
//echo $n;

if (mysqli_num_rows($resmp) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($resmp)) {
      
     $monyp=$row["mony"];
    }
    echo $mon;
    echo $monyp;
    $monyp=$monyp + $mon;
echo "hjkkb";
echo $monyp;
/////////////////////
echo $sn;
echo "fbn";


$sql = "UPDATE `userp` SET `mony` = '$monyp' WHERE `id` = '$un';";
 mysqli_query($conn, $sql);


}
}
   if($sn=='sal'){
echo "sal fdfkkffkk";
 $sqlp = "SELECT * FROM users where id='$un';";
$resmp = mysqli_query($conn, $sqlp);
//echo $n;

if (mysqli_num_rows($resmp) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($resmp)) {
      
     $monyps=$row["mony"];
    }
    echo $mon;
    echo $monyps;
    $monyps=$monyps + $mon;
echo "hjkkb";
echo $monyp;
/////////////////////
echo $sn;
echo "fbn";


$sql = "UPDATE `users` SET `mony` = '$monyps' WHERE `id` = '$un';";
 mysqli_query($conn, $sql);


}
}
/////////////////
echo $monyp;
echo "fFfF";


  $quer="INSERT INTO `notf`(`id`, `text`, `stat`, `date`, `idm`, `idmo`, `idu`, `mony`,`state`,`name`) VALUES (NULL,'ans prodect cans','unred','$dat','0','2','$un','$mon','$sn','$na')";
      mysqli_query($conn, $quer);
echo "ffdddddd";
}
} else {

	
    echo "لا توجد اشعارات";
}



mysqli_close($conn);

?>
	


</div>
<div id="b" style="text-align: center;"onclick="history.back()">الغاء</div>
</div>


</body>
</html>

