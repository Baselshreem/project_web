<!DOCTYPE>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="ss.css">
</head>
  <div id="basil">write a code by basilshraim</div>
<body>

<div id="led">

<h1 style="text-align: center;">الاقتراحات</h1>
<br>
<br>
<br>

<div id="data" >
  <?php include("contact.php")?>
  <div style="display: none;"><?php include("log.php")?></div>
  <?php
$id= $_SESSION['id'];

   
$count=0;

$sql = "SELECT * FROM `sug` ";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    
        echo 'dds<div id="not"><a href="show.php?id='.$row["id"].' "><div id="notp" > '.$row["par"].'    </div></a></div>


       ';
   

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





















