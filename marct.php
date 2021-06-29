<!DOCTYPE>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="ss.css">
	<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 {
  width: 50%; 
  float: right;   
  background-color: #ecb390;
}
</style>
</head>
	<div id="basil">write a code by basilshraim</div>
<body>

<div id="led">

<h1 style="text-align: center;">قائمة المحلات</h1>
<br>
<br>
<br>

<div id="data" >
	<?php include("contact.php")?>
	<div style="display: none;"><?php include("log.php")?></div>
	<?php




$sql = "SELECT * FROM `users` WHERE 1 ";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row

    echo '<table id="t01">
  <tr>

    <th>رقم الجوال</th>
    <th>:بأدارة</th> 
    <th>اسم المحل</th>
     <th>الرقم</th>
  </tr>

       ';

    while($row = mysqli_fetch_assoc($result)) {
    	
     
       echo '

     <tr>

    <th>'.$row["phon"].'</th>
    <th>'.$row["name"].' :بأدارة</th> 
    <th> <a href="prodect.php?id='.$row["id"].'&namem='.$row["namem"].' ">'.$row["namem"].' </a></th>
     <th>'.$row["id"].'</th>
  </tr>


      

       ';
    }
    
echo '</table>';
} else {

	
    echo "0 results";
}

mysqli_close($conn);
?>
	

</div>

<div id="b" style="text-align: center;"onclick="history.back()">الرجوع لصفحة الرئيسية</div>
</div>


</body>
</html>





















