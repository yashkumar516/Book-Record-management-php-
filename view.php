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
    <title>book record management</title>
    <link rel="stylesheet" href="css/view.css" >

</head>
<body>
<h1 > Book Record Management</h1><br>
<table id="view">
<tr>
<th>BOOKID</th>
<th>TITLE</th>
<th>AUTHOR</th>
<th>PRICE</th>
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
</tr>
<?php
}
?>
</table> <br>
<a href="home.php"><button style="margin-left:650px; font-size:18px;width:150px; 
background-color:lightgreen;border-radius:8px;">
HOME</button></a>
</body>
</html>