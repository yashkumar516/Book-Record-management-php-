<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$q="select * from books";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update record management</title>
    <link rel="stylesheet" href="css/view.css" >

</head>
<body>
<h1 >Update Book Record Management</h1><br>
<form action="updation.php" method="post">
<table id="view">
<tr>
<th>bookid</th>
<th>title</th>
<th>author</th>
<th>price</th>
</tr>
<?php
   for($i=1; $i<=$num; $i++)
      {
         $rows=mysqli_fetch_array($result);
        ?>
<tr>
<td><?php echo $rows['bookid'];?>
    <input type="hidden" name="bookid<?php echo $i;?>" value="<?php echo $rows['bookid'];?>"/> </td>
<td><input type="text"  name="title<?php echo $i; ?>" value="<?php echo $rows['title'];?>"/></td>
<td><input type="text"  name="author<?php echo $i; ?>" value="<?php echo $rows['author'];?>"/></td>
<td><input type="text"  name="price<?php echo $i; ?>" value="<?php echo $rows['price'];?>"/></td>
</tr>
<?php
}
?>
</table><br>
<input type="submit" value="Update" style="background-color:lightgreen;margin-left:720px;
font-size:22px;width:150px;border-radius:8px;">

</form><br>
<a href="home.php"><button style="margin-left:720px; font-size:18px;width:150px; 
background-color:lightgreen;border-radius:8px;">
HOME</button></a>
</body>
</html>