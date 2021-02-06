<!DOCTYPE html>
<html>
 <head>
  <title>UPDATE BOOK RECORDS</title>
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
 <form action="updation.php" method="post">
  <h1 style="text-align:center; padding:0px;background-color:purple;"> UPDATE BOOK RECORDS</h1>
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
   <td><?php echo $rows['bookid']; ?> <input type="hidden" name="bookid<?php echo $i?>" value="<?php echo $rows['bookid']; ?> "/></td>
   <td><input type="text" name="title<?php echo $i?>" value="<?php echo $rows['title'];?>"/></td>
   <td><input type="text" name="price<?php echo $i?>" value="<?php echo $rows['price']; ?>"/> </td>
   <td><input type="text" name="author<?php echo $i?>" value="<?php echo $rows['author'];?>"/></td>
  </tr>
 <?php
   }
?>
</table>
<input type="submit" value="Update Records" id="button"/>
</form>
  </body>
  </html>
  