<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Books Website</title>
<link href="../css/styles.css" rel="stylesheet">
<link href="../css/normalize.css" rel="stylesheet">
</head>

<body class="bodyCustom">
<div class="flex-container">
 
<header class="nav">header</header>
  <nav class="nav">
    <div class="menuItem"><a href="../../index.php">Home</a></div>
    <div class="menuItem"><a href="#">View Books</a></div>
    <div class="menuItem"><a href="bookAdd.php">Add Books</a></div>
    <div class="menuItem"><a href="createUser.php">Admin only</a></div>     
    <div class="menuItem"><a href="policy.html">Policies list</a></div>
   </nav>
<article class="article">


<?php
include '../../controller/findCover.php';
?>

</article>



<footer>
   <p>footer</p>
</footer>
  
</div>
</body>
</html>