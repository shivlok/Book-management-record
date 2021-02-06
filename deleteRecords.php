<!DOCTYPE html>
<html>
 <head>
  <title>Book Records</title>
  <link rel="stylesheet" href="viewStyle.css"/>
  <style>
   #button{
	   margin:6px;
	   font-size:15px;
	   background:black;
	  color:white;
	  border:2px bold black;
	  border-radius:10px;
   }
  </style>
 </head>
 <body>
 <form action="deletion.php" method="post">
  <h1 align="center" > DELETE BOOK RECORDS</h1>
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
  <th>select to remove</th>
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
   <td><input type="checkbox" value="<?php echo $rows['bookid'] ?>" name="b<?php echo $i ?>"/></td>
  </tr>
 <?php
   }
?>
</table>
<input type="submit" value="Delete" id="button"/>
</form>
  </body>
  </html>