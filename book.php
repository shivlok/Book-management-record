<!DOCTYPE html>
<html>
 <head>
  <title>book records</title>
 </head>
 <body>
  <h1 align="center" > INSERT BOOK RECORDS</h1>
  <form action="insert.php" method="post" enctype="multipart/form-data">
	<label>Bookid:</label><br/>
	<input type="number" name="bookid"/><br/><br/>
	<label>title:</label><br/>
	<input type="text" name="title"/><br/><br/>
	<label>Price:</label><br/>
	<input type="number" name="price"/><br/><br/>
	<label>Author:</label><br/>
	<input type="text" name="author"/><br/><br/>
	<input type="submit" value="Insert"/><br/>
 </form>	 
 </body>
</html>
