<?php
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'db1');
 $size=sizeof($_POST);
 $records=$size/4;
 for($i=1;$i<=$records;$i++)
 {
  $index1="bookid".$i;
  $bookid[$i]=$_POST[$index1];
  
  $index2="title".$i;
  $title[$i]=$_POST[$index2];
  
  $index3="price".$i;
  $price[$i]=$_POST[$index3];
  
  $index4="author".$i;
  $author[$i]=$_POST[$index4];
  
 }
 
 for($i=1;$i<=$records;$i++)
 {
  $q="update book SET title='$title[$i]',price='$price[$i]',author='$author[$i]' where bookid=$bookid[$i]";
  mysqli_query($con,$q);
 }
?>
<!doctype html>
<html>
 <head>
  <title>UPDATION</title>
 </head>
 <body>
 <h1 style="text-align:center; padding:0px;background-color:purple;" > UPDATE BOOK RECORDS</h1>
  <p><?php

 
	  echo "RECORDS UPDATED";
  
  ?></p>
  <p>Click to see the records<a href="view.php">Click Here</a></p>
  <p>Go to Home Page<a href="home.php">Click Here</a></p>
 </body>
</html>