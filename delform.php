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
    <title>delete record </title>
    <link rel="stylesheet" href="css/view.css" >

</head>
<body>
<h1 >Book Record management</h1><br>
<form action="deletion.php" method="post">
<table id="view">
<tr>
<th>BOOKID</th>
<th>TITLE</th>
<th>AUTHOR</th>
<th>PRICE</th>
<th>SELECT TO DELETE</th>
</tr>
<?php
   for($i=1; $i<=$num; $i++)
      {
         $rows=mysqli_fetch_array($result);
        ?>
<tr>
<td><?php echo $rows['bookid'];?></td>
<td><?php echo $rows['title'];?></td>
<td><?php echo $rows['author'];?></td>
<td><?php echo $rows['price'];?></td>
<td><input type="checkbox" value="<?php echo $rows['bookid'];?>" name="del<?php echo $i ;?>" /></td>
</tr>
<?php
}
?>
</table><br>
<input type="submit" value="Delete" style="background-color:lightgreen;margin-left:720px;
font-size:22px;width:150px;border-radius:8px;"><br><br>

</form>
<a href="home.php"><button style="margin-left:720px; font-size:18px;width:150px; 
background-color:lightgreen;border-radius:8px;">
HOME</button></a>
</body>
</html>