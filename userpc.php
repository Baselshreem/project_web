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
  padding: 5px;
  text-align: left;    
}
</style>
</head>
	<div id="basil">write a code by basilshraim</div>
<body>

<div id="led">

<h1 style="text-align: center;">مستخدمين الحسابات الشخصية</h1>
<br>
<br>
<br>

<div id="data" >
	<?php include("contact.php")?>
	<div style="display: none;"><?php include("log.php")?></div>
	<?php
$id= $_SESSION['id'];

   
$count=0;

$sql = "SELECT * FROM `userp`";
$result = mysqli_query($conn, $sql);
//echo $n;
     echo '<table style="width:100%">
  <tr>
    <td>الرقم</td>
    <td >اسم المستخدم </td>
    
       <td>المنطقة</td>
    <td >رقم الحوال</td>
    <td> رقم الهاتف</td>
   <td>الهوية الشخصية</td>
   
    <td>كلمة المرور</td>
       <td>الرصيد</td>
        <td>رقم رخصة المحل</td>

    <td >الحالة</td>
    <td>الشروط</td>
   <td>الايميل</td>
    
</tr>';
if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	
     

echo '
<tr>
    <td>'.$row['id'].'</td>
    <td >'.$row['name'].'</td>
    
    <td >'.$row['location'].'</td>
    <td>'.$row['phone'].'</td>
   <td>'.$row['telpon'].'</td>
    <td >'.$row['idp'].'</td>
    
    <td>'.$row['pasword'].'</td>
       <td>'.$row['mony'].'</td>
       <td>'.$row['idm'].'</td>
    <td >'.$row['stat'].'</td>
    <td>'.$row['term'].'</td>
   <td>'.$row['email'].'</td>
    
</tr>



';


}
echo '</table>';
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





















