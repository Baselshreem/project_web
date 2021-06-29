<!DOCTYPE>
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
  <div id="basil">write a code by basilshraim</div>
<body>

<div id="led">

<h1 style="text-align: center;">الاشعارات</h1>
<br>
<br>
<br>

<div id="data" >
  <?php include("contact.php")?>
  <div style="display: none;"><?php include("log.php")?></div>
  <?php
 $na= $_SESSION['name'];
   
$count=0;

$sql = "SELECT * FROM `notft` WHERE    namet='$na' and stat='unred';";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
  

      $count++;
    
 
      
echo 'dds<div id="not"><a href="show.php?id='.$row["id"].' "><div id="notp" style="background-color: #F48C1D;"> 
<pre>
   ('.$row['name'].')   الى  المشتري     ('.$row['namem'].')  على طلب التوصيل  من    ('.$row['nametu'].') لقد وافق  </div></a></div>

</pre>
       ';
  



  

    }

  
     echo $count;
    $_SESSION['mm']=$count;


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





















