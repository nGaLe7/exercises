<?php 
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Books</title>
<link href="view/css/resCSS.css" rel="stylesheet">
</head>

<body>
<div class="flex-container">

 <div class="loginForm">
    <form action="controller/pdoLogin.php" method="post">
        <fieldset>
            <h1 class="registerLink"><a id="registerLink2" href="view/pages/registration.php">Register</a></h1>
            <legend> Admin Login</legend>
            <label>Username:</label>
            <input type="text" name="username" required>
            <label>Password:</label>
            <input type="text" name="password" required>
            <input type="submit" value=" Submit ">
        </fieldset>
    </form>
</div>

  <header class="nav">header </header>
  <nav class="nav">
    <div class="menuItem"><a href="#home">HOME</a></div>
    <div class="menuItem">ABOUT US</div>
    <div class="menuItem">PRODUCTS</div>
    <div class="menuItem">CONTACT</div>
  </nav>
  <div class="contentLeft">left </div>
  <article>
    <div class="holder"><img src="view/images/apple.jpg" alt=""/></div>
    <div class="holder"><img src="view/images/apple.jpg" alt=""/></div>
    <div class="holder"><img src="view/images/apple.jpg" alt=""/></div>
    <div class="holder"><img src="view/images/apple.jpg" alt=""/></div>
    <div class="holder"><img src="view/images/apple.jpg" alt=""/></div>
    
  </article>
  <div class="contentRight">right </div>


  <footer>
    <p>footer</p>
  </footer>
  
</div>
</body>
</html>
