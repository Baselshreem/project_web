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
$tyem= $_SESSION['tyem'];
$namem= $_SESSION['namem'];


if(isset($_POST['in_prod']))
{



   $picture_name=$_FILES['img']['name'];
$picture_type=$_FILES['img']['type'];
$picture_tmp_name=$_FILES['img']['tmp_name'];
$picture_size=$_FILES['img']['size'];
$add= $_POST['add'];
  //$monym = mysqli_real_escape_string($conn, $_POST['monym']);
 $name=$_POST['name'];
 // $daym = mysqli_real_escape_string($conn, $_POST['daym']);
  $price=$_POST['pric'];
  //$totm = mysqli_real_escape_string($conn, $_POST['totm']);
//$img=$_POST['img'];
$qin=$_POST['qin'];
//picture codin


   


if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
   if($picture_size<=50000000)
   
      $pic_name=time()."_".$picture_name;

   $quer="INSERT INTO `prodect` (`id`, `add`, `img`, `name`, `price`, `idm`, `idu`,`qin`,`namem`,`tyem`) VALUES (NULL, '
      $add', '$pic_name', '$name', '$price', '$idm', '$user','$qin','$namem','$tyem');";
    mysqli_query($conn, $quer);
      move_uploaded_file($picture_tmp_name,"Upload/".$pic_name);
    echo "تمت عملية اضافة المنتج بشكل صحيح";
     header('location: homs.php');
}
else{
echo "لم تتم اضافة المنتج";
}
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

   
<br>
     <div id="log" style="border-style: none;">
<form method="post" enctype='multipart/form-data'>

<div id="b"><input type=""  name="add">:العنوان </div>
<br>


<div id="b"><input type="text" name="name" >:الاسم</div> <br>

<div id="b"><input type="phone" name="pric" >:السعر</div><br>
<div id="b"><input type="file" name="img" >:الصورة</div><br>
<div id="b"><input type="phone" name="qin" >:  لكمية</div><br>




<div style="float: left;" >
<div  id="b" style="text-align: center;">
 <input type="submit" name="in_prod" value="  اضافة المنتج "> </div></div>



</form>
</div>
 </div> 
     

</body>
</html>