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

<div id="data">

<div style="display: none;"><?php include("log.php")?></div>
<?php include("contact.php")?>
<?php


//$user=$_SESSION['id'];
$id=$_SESSION['id'];
$idm=$_SESSION['idm'];
 $stat=$_SESSION['stat'];
 $name=$_SESSION['name'];
 date_default_timezone_set("Asia/Jerusalem");
$dat=date("Y-m-d H:i:s");

$sql = "SELECT * FROM `pial` where (nam !='$name' or stat !='$stat');";
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
    
       $coun=0;
	echo '


  <div id="b" style="margin-left: 50%;"> <form method="post" >


<button style="background-color: green;margin-right: 50px;" name ="rw" value="'.$row['id'].'"> تم الاستلام</button>
</form> </div>


<div id="bac" >
  <div  style="text-align: left;display: inline-block;width: 20%;">
    <div id="b" name="bbs">'.$row["key"].': كلمة الاستلام</div>
    <div id="b" name="bbs">'.$row["nam"].': اسم المشتري</div>
    <div id="b" name="bbs">حالة الطلب   :'.$row["del"].' </div>
   <div id="b" name="bbs">حالة الطلب   :'.$row["finsh"].' </div>
   
         </div>';
$so = "SELECT * FROM `order` where idpil='$c' and idm='$idm'; ";

$reo = mysqli_query($conn, $so);

      if (mysqli_num_rows($reo) > 0 ) {
      	//$e=$_POST["bbs"];
      	
 echo ' <table id="t01">

   
  ';

   while(  $row = mysqli_fetch_assoc($reo)) {
    if($row["idpil"]==$c){
   	$coun=$coun+$row["pric"];

echo '

  <tr>
    <th style="background-color: red;">'.$row["pric"].': السعر</th>
    <th style="background-color: #ecb390;">'.$row["qin"].':الكمية</th> 
    <th style="background-color:#ecb390;">اسم البضاعة: '.$row["name"].' </th>
    <th style="background-color:#ecb390;">اسم المحل: '.$row["namem"].' </th>
  </tr>
       

       


';
}
}
echo '  <tr>
    <td style="background-color: red;">المجموع :'.$coun.' </td>
    <th colspan="3" style="background-color: white;"></th>
    
  </tr>
</table>';
}
  echo '  </div>';



  

}




 }


if(isset($_POST['rw'])){

$b= $_POST['rw'];
    $sql = mysqli_query($conn," UPDATE pial SET finsh = 'تم الاستلام' ,datend='$dat' WHERE id = '$b' ");

}


 else {

	
    echo "0 results";
}

mysqli_close($conn);
?>
	
	


       






     
<div style="margin-right: 0px;"></div>


</div>

<div id="b" style="text-align: center;"onclick="history.back()">الرجوع لصفحة الرئيسية</div>


</div>


</body>
</html>