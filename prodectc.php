<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="ss.css">
</head>
	<div id="basil">write a code by basilshraim</div>
<body>
<h1 style="text-align: center;">المنتجات</h1>
<br><br><br><br><br><br>
<div id="data"> 
<div style="display: none;"><?php include("not.php")?></div>

<?php include("contact.php")?>
	<?php


$sql = "SELECT * FROM prodect ";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	
       echo '

       <form action="pay.php? " method="post" style="display: inline;">
             <div id="lnk">'.$row["add"].'
<div id="f">'.$row["qin"].'<div id="if">

<a href="Upload/'.$row["img"].'">
<img src="Upload/'.$row["img"].'" 
style="width:100%;height:100%;"></a>

</div><div id="m"><div id="n"> '.$row["name"].'</div>    <div id="p" >'.$row["price"].'</div></div>  </div>
<div style="height: 30px;text-align:center;"><input type="" name="qin" id="teo" >:  الكمية </div>

<div id="c" >  <button type="submit" name="del" value="'.$row['id'].'" style="	height:30px;width: 100%;">
               شراء  
            </button>



</div>
</div> 
</form>';

    }
    

} else {


    echo "no prodect";
}

mysqli_close($conn);
?>
	
</div>





</body>
</html>