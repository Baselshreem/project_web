 <?php include("contact.php")?>
<div style="display: none;"><?php include("log.php")?></div>

<?php
//session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$dat=date(DATE_RFC822);
// connect to the database
$user=$_SESSION['id'];
$idm= $_SESSION['idm'];
$namem= $_SESSION['namem'];
$id=$_GET['id'];
 
if(isset($_POST['in_prod']))
{



$picture_name=$_FILES['img']['name'];
$picture_type=$_FILES['img']['type'];
$picture_tmp_name=$_FILES['img']['tmp_name'];
$picture_size=$_FILES['img']['size'];
  
  $add= $_POST['add']; 
  $name=$_POST['name'];
  $price=$_POST['pric'];
  $qin=$_POST['qin'];
 


   echo $daym;
 
 

      $pic_name=time()."_".$picture_name;

 
   

         $quer= "UPDATE `prodect` SET  `add`= '$add', `name`='$name',`price`='$price',`qin`='$qin',`img`='$pic_name' WHERE id='$id';";

   
    mysqli_query($conn, $quer);
      move_uploaded_file($picture_tmp_name,"Upload/".$pic_name);
    echo "تمت عملية اضافة المنتج بشكل صحيح";

 
 
mysqli_close($conn);
 }
 
 
?>
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

<div id="led" >
    <h1 style="text-align: center;">  اضافة منتج  </h1>
<?php  
 
$sql = "SELECT * FROM prodect where id='$id';";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
echo '
   <div id="log" style="border-style: none;">
<form method="post"  >

<div id="b"><input type=""  name="add" value="'.$row['add'].'">   :العنوان   </div>
<br>


<div id="b"><input type="text" name="name"  value="'.$row['name'].'" >:الاسم</div> <br>

<div id="b"><input type="phone" name="pric"  value="'.$row['price'].'">:السعر</div><br>
<div id="b"><input type="file" name="img"  value="'.$row['img'].'">:الصورة</div><br>
<div id="b"><input type="phone" name="qin"  value="'.$row['qin'].'">:  لكمية</div><br>




<div style="float: left;" >
<div  id="b" style="text-align: center;">
 <input type="submit" name="in_prod" value="  تعديل  المنتج "> </div></div>



</form>
</div>

';

}

}

?>
   
<br>
   
 
 
 </div> 
     

</body>
</html>