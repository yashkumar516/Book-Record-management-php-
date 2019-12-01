<?php

$title = $_POST['title'];
$author = $_POST['author'];
$price = $_POST['price'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');

$q="insert into books (title,author,price) values ('$title','$author',$price)";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insertion</title>
</head>
<body>
<h1> Book Record Management</h1>
    <?php
    if ($status==1)
    {
        echo "<h3>Inserted succesfully</h3>";
    }
    else{
        echo "Insert failed";
    }
    ?>
    <p>click here to go back</p>
    <a href="home.php">click here</a>
    </body>
    </html>