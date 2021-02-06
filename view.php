


<!DOCTYPE html>
<html>
 <head>
  <title>book records</title>
  <link rel="stylesheet" href="viewStyle.css"/>
 </head>
 <body>
  <h1 align="center" > VIEW BOOK RECORDS</h1>
  <h3>HERE IS THE LIST OF ALL BOOKS.</h3>
  <?php
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'db1');
 $q="select * from book";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 ?>
 <table id="main">
  <tr>
  <th>bookid</th>
  <th>title</th>
  <th>price</th>
  <th>author</th>
  </tr>
  <?php
   for($i=1;$i<=$num;$i++)
   {
	   $rows=mysqli_fetch_array($result);
	   ?>
  <tr>
   <td><?php echo $rows['bookid']; ?></td>
   <td><?php echo $rows['title']; ?></td>
   <td><?php echo $rows['price']; ?></td>
   <td><?php echo $rows['author']; ?></td>
  </tr>
 <?php
   }
?>
</table>
 <p>Go to Home Page<a href="home.php">Click Here</a></p>
  </body>
  </html>
  
  
   
 