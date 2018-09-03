<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Week3 edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<p><h1>edit</h1></p>


<form action="edit.php" method="get">
<input type="text" name="username">
<input type="text" name="email">
<input type="text" name="password">
<input type="submit" name="submit">

</form>
</body>
</html>