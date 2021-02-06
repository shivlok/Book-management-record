<?php
 $size=sizeof($_POST);
 $j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index]))
	$b_id[$i]=$_POST[$index];
else
	$i--;
}
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'db1');
	
	for($k=1;$k<=$size;$k++)
	{
	$q="delete from book where bookid=".$b_id[$k];
   
   $status=mysqli_query($con,$q);
	}
   mysqli_close($con);

?>
<!doctype html>
<html>
 <head>
  <title>DELETION</title>
 </head>
 <body>
 <h1 align="center" > DELETE BOOK RECORDS</h1>
  <p><?php

 if($status==1)
	  echo $size."records deleted";
  else 
	  echo "deletion failed";
  ?></p>
  <p>Go to Home Page<a href="home.php">Click Here</a></p>
 </body>
</html>