<?php

$size= sizeof($_POST);
$records=$size/4;

for($i=1;$i<=$records;$i++)
{
    $index1= "bookid".$i;
    $bookid[$i]= $_POST[$index1];

    $index2= "title".$i;
    $title[$i]= $_POST[$index2];

    $index3= "author".$i;
    $author[$i]= $_POST[$index3];

    $index4= "price".$i;
    $price[$i]= $_POST[$index4];
}
$con= mysqli_connect('localhost','root');
   mysqli_select_db($con,'brm_db');

for($i=1;$i<=$records;$i++)
{
$q="update books SET title='$title[$i]', author='$author[$i]', price=$price[$i] where bookid=$bookid[$i]";
mysqli_query($con,$q);
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>updation</title>
</head>
<body>
<h1 >update Record management</h1><br>
<?php echo "record updated" ?><br>
<a href="home.php">click here to go home</a>
</body>
</html>