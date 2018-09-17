<?php 
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>3D Print Aus Login</title>
<link href="view/css/styles.css" rel="stylesheet">
<link href="view/css/normalize.css" rel="stylesheet">
</head>
<!-- change all the CSS class names, reposition all content -->
<body>

 

<header class="banner"><h1>Print Aus Banner</h1></header>   

<div class="gridContain">
    <div class="gridBox"><h2>Login</h2></div>
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
         <div><label>Username:</label></div>
        <div><input type="text" name="username" required></div>
        <div><label>Password:</label></div>
        <div><input type="text" name="password" required></div>
        <div><input type="submit" value=" Submit"></div>    
    </form>
    </div>

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
