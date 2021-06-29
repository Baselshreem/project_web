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

<div id="led" style="display: inline-block;">

<h1 style="text-align: center;">الاشعارات</h1>
<br>
<br>
<br>

<div id="data" style="display: inline-block;">
  <?php include("contact.php")?>
  <div style="display: none;"><?php include("log.php")?></div>
  <?php
$id= $_SESSION['id'];
$stat=$_SESSION['stat'];
   
$count=0;

$sql = "SELECT * FROM `notf` WHERE     idu='$id'  and state='$stat' and stat='unred' and( text='ans prodect acp' or text='ans mony acp' or text='ans prodect cans' or text='ans mony cans') ;";
$result = mysqli_query($conn, $sql);
//echo $n;

if (mysqli_num_rows($result) > 0) {
  
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $st=$row['text'];

      $count++;
     $state=$row['stat'];
   if($st=='ans prodect acp'  && $state=='red'){
      
echo ' <div id="not"  ><a href="show.php?id='.$row["id"].' "><div id="notp" style="background-color: #F48C1D;"><pre>      لقد تمت عملية الموافقة على طلبك من قبل  '.$row["name"].' </pre> </div></a></div>


       ';
   }

if($st=='ans prodect acp'  && $state=='unred'){
      
echo ' <div id="not"  ><a href="show.php?id='.$row["id"].' "><div id="notp" style="background-color: #ecb390;"> <pre>    لقد تمت عملية الموافقة على طلبك من قبل  '.$row["name"].'  </pre></div></a></div>


       ';
   }



   if($st=='ans mony acp' && $state=='red' ){

    echo ' <div id="not"  ><a href="show.php?id='.$row["id"].' "><div id="notp" style="background-color:#F48C1D;"><pre>  لقد قام    بلموافقة على طلب الشحن '.$row["name"].' </pre></div></a></div>


       ';
   }

 if($st=='ans mony acp' && $state=='unred' ){

    echo ' <div id="not ><a href="show.php?id='.$row["id"].' "><div id="notp" style="background-color: #ecb390;"><pre>  لقد قام    بلموافقة على طلب الشحن '.$row["name"].'</pre></div></a></div>


       ';
   }


   if($st=='ans prodect cans' && $state=='red' ){

    echo ' <div id="not" ><a href="show.php?id='.$row["id"].' "><div id="notp" style="background-color: #F48C1D;"><pre>  لقد قام   برفض طلبك '.$row["name"].'</pre></div></a></div>


       ';
   }

   if($st=='ans prodect cans' && $state=='unred' ){

    echo ' <div id="not"><a href="show.php?id='.$row["id"].' "><div id="notp" style="background-color: #ecb390;"><pre>  لقد قام   برفض طلبك '.$row["name"].'</pre></div></a></div>


       ';
   }

   if($st=='ans mony cans' && $state=='red'){

    echo ' <div id="not"><a href="show.php?id='.$row["id"].' "><div id="notp" style="background-color: #F48C1D;"><pre> لقد قام   برفض طلب   الشحن '.$row["name"].'</pre></div></a></div>


       ';
   }


   if($st=='ans mony cans' && $state=='unred'){

    echo ' <div id="not"><a href="show.php?id='.$row["id"].' "><div id="notp" style="background-color: #ecb390;"><pre>  لقد قام   برفض طلب   الشحن '.$row["name"].'</pre></div></a></div>


       ';
   }

   if($st=='doct req' && $state=='red'){

    echo ' <div id="not"><a href="show.php?id='.$row["id"].' "><div id="notp" style="background-color: #F48C1D;"><pre>  لقد قام   برفض طلب   الحجز '.$row["idm"].'</pre></div></a></div>


       ';
   }


   if($st=='doct req' && $state=='unred'){

    echo ' <div id="not"><a href="show.php?id='.$row["id"].' "><div id="notp" style="background-color: #ecb390;"><pre>  لقد قام   برفض طلب   الحجز '.$row["idm"].'</pre>/div></a></div>


       ';
   }
        

    }

  
      
    $_SESSION['mm']=$count;


} else {

  
    echo "لا توجد اشعارات";
}

mysqli_close($conn);
?>
  


</div>
<div id="b" style="text-align: center;"onclick="history.back()">رجوع لصفحة الرئيسية</div>


</div>


</body>
</html>





















