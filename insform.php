<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insform</title>
</head>
<body>
    <h1> Book Record management</h1>
    <form action="insertion.php" method="post">
    <table>
    <tr>
  <th> Title</th>
   <td> <input type="text" name="title" placeholder="enter book title" required></td>
</tr>

<tr>
<th> Author</th>
 <td><input type="text" name="author" placeholder="enter book author name" required></td>
</tr>

<tr>
 <th> Price</th>
<td> <input type="int" name="price" placeholder="enter book price" required></td>
</tr>

<tr>
<th></th>
<td><input type="submit"></td>
</tr>

</table>

    </form>
</body>
</html>