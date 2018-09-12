<?php 
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Books Website</title>
<link href="view/css/styles.css" rel="stylesheet">
<link href="view/css/normalize.css" rel="stylesheet">
</head>

<body class="bodyCustom">
<div class="flex-container">

 <div class="loginForm">
    <form action="controller/pdoLogin.php" method="post">
        <fieldset>
            <legend>Login</legend>
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
    <div class="menuItem"><a href="view/pages/registration.php">Admin Create User</a></div>
  </nav>
  <div class="contentLeft">left </div>
  <article>
    <div class="holder"><img src="view/images/default.png" alt=""/></div>
    <div class="holder"><img src="view/images/she.jpg" alt=""/></div>
    <div class="holder"><img src="view/images/donQuixote.jpg" alt=""/></div>
    <div class="holder"><img src="view/images/theHobbit.jpg" alt=""/></div>
    <div class="holder"><img src="view/images/andThenThereWhereNone.jpg" alt=""/></div>
    
  </article>
  <div class="contentRight">right </div>


  <footer>
    <p>footer</p>
  </footer>
  
</div>
</body>
</html>
