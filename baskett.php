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

 $nam= $_SESSION['namem'];

echo $id;
$count=0;
echo $nam;
$sql = "SELECT * FROM `delavry` WHERE  namem='$nam';";
$result= mysqli_query($conn, $sql);
//echo $n;
echo "ddd";
if (mysqli_num_rows($result) > 0) {
	echo "dDD";
       while($row = mysqli_fetch_assoc($result)) {
      

      $st=$row['stat'];
echo $st;      
 
 if($st=='d'){
        echo '
      
     
     <form method="post" >
       <div id="not" ><a href="showt.php?id='.$row["id"].' "><div id="notp"  style="background-color: #ecb390;"> 
       <pre> ('.$row['namem'].') لقد  تم طلب خدمة التوصيل  من المحل 
            ('.$row['name'].')    الى الزبون 
                </pre>
        </div></a></div>
      
</form>
       ';
 }

/* if($st =='accp' or ($st=='cans')){
        echo '
      
     
     <form method="post" >
       <div id="not" ><a href="showt.php?id='.$row["id"].' "><div id="notp"   style="background-color: #F48C1D;"> 
       <pre> ('.$row['namem'].') لقد  تم طلب خدمة التوصيل  من المحل 
            ('.$row['name'].')    الى الزبون 
                </pre>
        </div></a></div>
      
</form>
       ';

}*/




  }}  else {

	
    echo "لا توجد اشعارات";
}



mysqli_close($conn);

?>
	


</div>
<div id="b" style="text-align: center;"onclick="history.back()">الرجوع لصفحة الرئيسية</div>
</div>


</body>
</html>

