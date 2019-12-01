<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
    $index = "del".$j;
    if(isset($_POST[$index]))
    {
        $b_id[$i]=$_POST[$index];
    }
    else
    $i--;
}

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
for($k=1;$k<=$size;$k++)
{
    $q="delete from books where bookid=".$b_id[$k];
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
    <title>Deletion</title>
</head>
<body>
<h1 >Book Record management</h1><br>
<?php echo "record deleted" ?><br>
<a href="home.php">click here to go home</a>
</body>
</html>