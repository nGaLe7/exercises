<?php 
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>3D Print Aus</title>
<link href="view/css/styles.css" rel="stylesheet">
<link href="view/css/normalize.css" rel="stylesheet">
</head>
<!-- change all the CSS class names, reposition all content -->
<body>

 

<header class="banner"><h1>Print Aus Banner</h1></header>   

<div class="gridContain">
    <div class="gridBox"><h3>Links</h3></div>
<div class="gridBox">
  <nav class="navLinks">
      <div><a href="#">Homepage</a></div>
      <div><a href="HTML/ProjectNews.html">Project News</a></div>
      <div><a href="HTML/Archive.html">Archive</a></div>
      <div><a href="HTML/Privacy.html">Privacy Policy</a></div>
      <div><a href="view/pages/registration.php">Admin Create User</a></div>
      <div><a href="HTML/Contact.html">Contact</a></div>
  </nav>
</div>
<div class="gridBox">
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
    <!--<p>
    <h2>News feed</h2>
        Default text Default text Default text Default text Default text Default text Default text Default text Default text 
  </p>
  <p>
    <h2>Social media feed</h2>
     Default text Default text Default text Default text Default text Default text Default text 
  </p> -->
</div>


<div class="gridBox">
    <div class="gridContain2">
    <div class="gridBox2"><p>Default text default</p></div>
    <div class="gridBox2"><p>Default text default</p></div>
    <div class="gridBox2"><p>Default text default</p></div>        
    <div class="gridBox2"><p>Default text default</p></div>
    <div class="gridBox2"><p>Default text default</p></div>        
    <div class="gridBox2"><p>Default text default</p></div>        
    <div class="gridBox2"><p>Default text default</p></div>        
    <div class="gridBox2"><p>Default text default</p></div>               
</div>

 
</div>
</div>


<footer class="footer"><h2>Copyright PrintAus 2018</h2> </footer>
  
</div>
</body>
</html>
