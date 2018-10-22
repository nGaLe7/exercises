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
 
  <header class="nav">header</header>

  <nav class="nav">
    <div class="menuItem"><a href="#">Home</a></div>
    <div class="menuItem"><a href="view/pages/mainLibary">View Books</a></div>
    <div class="menuItem"><a href="view/pages/mainLibary">Add Books</a></div>
    
    
    <div class="menuItem"><a href="view/pages/createUser.php">Admin only</a></div>    
    <div class="menuItem">placeholder</div>
    <div class="menuItem">placeholder</div>
  </nav>

  <article class="article">
  <div class="loginForm">
    <form action="controller/loginForm.php" method="post">
        <fieldset class="fieldSet">
            <legend>Login</legend>
            <label>Username:</label>
            <input type="text" name="username" required>
            <label>Password:</label>
            <input type="text" name="password" required>
            <input type="submit" value=" Submit ">
        </fieldset>
        <div>Registration is unavailable for non-admins</div>
    </form>
</div>

<div><h1>PlaceHolder for content</h1></div>

</article>

  



<footer>
   <p>footer</p>
</footer>
  
</div>
</body>
</html>