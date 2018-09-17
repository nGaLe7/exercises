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
    <div class="menuItem"><a href="../../index.php">Login</a></div>
    <div class="menuItem"><a href="#">Libary Home</a></div>
    <div class="menuItem">placeholder</div>    
    <div class="menuItem">placeholder</div>
    <div class="menuItem">placeholder</div>
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