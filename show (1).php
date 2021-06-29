  <div style="display: none;"><?php include("contact.php")?>
	</div>
<?php

 $id = $_GET['id'];
 

$sql = "SELECT * FROM `notf` WHERE  id='$id';";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {


$st=$row['text'];






if($st=='ans prodect acp'){

echo '

<div style="width: 40%;border-style: solid;border-width: 3px;background-color: green;text-align: right;margin-left:400px;overflow: scroll;">
'.$row["name"].'    لقد تمت عملية الموافقة على طلبك من قبل   
</div>


       ';
   }

   if($st=='ans mony acp'){

   	echo '
<div style="width: 40%;border-style: solid;border-width: 3px;background-color: red;text-align: right;margin-left:400px;overflow: scroll;">
'.$row["name"].' لقد قام    بلموافقة على طلب الشحن 
</div>


       ';
   }

   if($st=='ans prodect cans'){

   	echo '

<div style="width: 40%;border-style: solid;border-width: 3px;background-color: red;text-align: right;margin-left:400px;overflow: scroll;">
'.$row["name"].' لقد قام   برفض طلبك  
</div>


       ';
   }

   if($st=='ans mony cans'){

   	echo '

<div style="width: 40%;border-style: solid;border-width: 3px;background-color: red;text-align: right;margin-left:400px;overflow: scroll;">
'.$row["name"].' لقد قام   برفض طلب   الشحن  
</div>

   	


       ';
   }
    
    }
     


}




$sql = "UPDATE `notf` SET `stat` = 'red' WHERE `id` = $id;";
    
$result = mysqli_query($conn, $sql);
//echo $n;
	

mysqli_close($conn);
?>
