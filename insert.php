<h1 align="center" >INSERT BOOK RECORD</h1>
<?php
$bookid=$_POST['bookid'];
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
echo "bookid:  " . $bookid;
echo "title:  ". $title;
echo "price:  " . $price;
echo "author:  " .$author;
$con=mysqli_connect('localhost','root');

if(!$con)
	echo "CONNECTION FAILED";
else
	echo "CONNECTION DONE";

mysqli_select_db($con,'db1');
$q="insert into book(title,price,author)values('$title',$price,'$author')";
$status=mysqli_query($con,$q);
echo "status: ". $status;
mysqli_close($con);


?>
<!doctype html>
<html>
 <head>
  <title>book records</title>
 </head>
 <body>
  <p>Do you want to insert more records?<a href="book.php">Click Here</a></p>
   <p>Go to Home Page<a href="home.php">Click Here</a></p>
 </body>
</html>