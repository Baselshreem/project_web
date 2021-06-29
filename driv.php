<!DOCTYPE html>
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
margin-top: 5%;

margin-left: 40%;
  width: 30%;    
  background-color: #f1f1c1;
}
</style>
	<link rel="stylesheet" type="text/css" href="ss.css">
</head>
	<div id="basil">write a code by basilshraim</div>
<body>


<div id="led">
	

	<div id="ad">
		<div id="right"><img src="br.png" alt="Smiley face" height="200px" width="100%"></div>
		<div id="left"><img src="bl.png" alt="Smiley face" height="200px" width="100%"></div>
		<div id="mad"><br><br><marquee><p > موقع لمسة موقع خاص بمدينة قلقيلية</p></marquee></div>
        
	</div>
<br>
 
<div id="data"> 
<div style="display: none;"><?php include("log.php")?></div>

<?php include("contact.php")?>




 <?php
$nam=$_SESSION['namem'];
  
$sql = "SELECT * FROM usertu where (namem='$nam');";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
 
 echo ' <table id="t01">
  ';
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      
  $s=$row["statt"];
     
if($s=='طلب عادي  '){
echo "d";
       echo '   <tr>
    <th style="background-color: red;">حالة السائق   :'.$row["statt"].' </th>
   
    <th style="background-color:#ecb390;">  

'.$row["name"].': اسم السائق 
    </th>
  </tr>


';
}

if($s=='طلب للموقع '){
echo"h";
       echo '   <tr>
    <th style="background-color: green;">حالة السائق   :'.$row["statt"].' </th>
   
    <th style="background-color:#ecb390;">  

'.$row["name"].': اسم السائق 
    </th>
  </tr>


';
}
if($s=='شاغر '){
echo "d";
       echo '   <tr>
    <th style="background-color: yellow;">حالة السائق   :'.$row["statt"].' </th>
   
    <th style="background-color:#ecb390;">  

'.$row["name"].': اسم السائق 
    </th>
  </tr>


';
}
}

echo '</table>';

}

?>









</div>
<div style="width: 100%;height: 30px;background-color:  #ecb390;;text-align: center;">
	<div style="text-align: right;"> design by :<a href="https://www.facebook.com/profile.php?id=100009943297669">Baselshrim </a></div>
	<div style="width: 100%;height: 30px;background-color:  #ecb390;;text-align: center;">

		@كافة الحقوق محفوظة 2020

	</div>
</div>

</div>


</body>
</html>