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

$b= $_GET['deld'];
 $user=$_SESSION['id'];
 $nam=$_SESSION['name'];
 $mony=$_SESSION['mony'];
 $qin= $_POST['qin'];
  $mid=$_SESSION['idm'];
 $stat=$_SESSION['stat'];
 $v=rand();
echo "Ddd";
echo $b;
 date_default_timezone_set("Asia/Jerusalem");
$dat=date("Y-m-d H:i:s");
 

////////////////////////////////////




   $fd=date('d');
   $fh=date('H');
   $fm=date('i');
 
$nameOfDay = date('D', strtotime($dat));
 
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
         echo  $idmm;
       echo '
jffjjj
      ';
    }
    
      
}
 echo "Ffff";
echo $b;
echo $idmm;
$pi="INSERT INTO `piald`(`id`, `nam`, `dtat`, `datend`,`key`,`idu`,`idm`,`stat`,`namem`) VALUES (NULL,'$nam','$dat','$dateen','$v','$user','$idmm','$stat','$namem');";
mysqli_query($conn, $pi);
echo "pial ni";

$query = "
INSERT INTO `orderd`(`id`, `name`, `pric`, `date`, `dateen`, `key`, `idu`,`idm`,`idpil`, `qin`, `namem`) VALUES(NULL, '$name', '$tot', '$dat','$dateen','$v','$user','$idmm',LAST_INSERT_ID(),'$qin','$namem');";
 mysqli_query($conn, $query);
echo "oreder ssssss";




?>


</div>
      
</body>
</html>