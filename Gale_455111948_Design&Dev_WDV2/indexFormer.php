<?php 
session_start();
?>

<!-- Unless visitor logs on through this page, they will not be able to see many of the navigation elements
use ajax to code this (possibly $_Sessions will be the answer [week 9 example]) -->

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>3D Print Aus Login</title>
<link href="view/css/styles.css" rel="stylesheet">
<link href="view/css/normalize.css" rel="stylesheet">
<script src="view/JS/script.js" defer ></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<!-- change all the CSS class names, default php code site names reposition all content -->
<body>

<header class="banner"><h1>Print Aus Banner</h1></header>   

<div class="gridContain">
    <div class="gridBox"></div>
<div class="gridBox">
  <nav class="navLinks">
      <div><a href="#">Login</a></div>
      <div><a href="view/pages/homepage.php">Homepage</a></div>      
      <div><a href="view/pages/projectNews.php">Project News</a></div>
      <div><a href="view/pages/archive.php">Archive</a></div>
      <div><a href="view/pages/privacy.php">Privacy Policy</a></div>
      <div><a href="view/pages/registration.php">Admin Create User</a></div>
      <div><a href="view/pages/contact.php">Contact</a></div>
  </nav>
</div>

<div class="gridBox">    

</div>


<div class="gridBox">
    <div class="loginForm"> 
        <form action="controller/pdoLogin.php" method="post">  
        <h2>Login</h2>    
        <div><label>Username:</label></div>
        <div><input type="text" name="username" required></div>
        <div><label>Password:</label></div>
        <div><input type="text" name="password" required></div>
        <div><input type="submit" value=" Submit"></div>    
        </form>
    </div>            
</div>

 
</div>
</div>


<footer class="footer"><h2>Copyright PrintAus 2018</h2> </footer>
  
</div>
</body>
</html>

<?php
    session_start();
    include('model/session.php');
    include('model/database.php');
    include('view/pages.php');
    include('view/elements.php');
    showHeader();
    showMenu();
    if(isset($_GET['pageid'])) {
		if($_GET['pageid'] == 'login') {
			showLogin();
		}
		if($_GET['pageid'] == 'register') {
			showRegister();
		}
		if($_GET['pageid'] == 'logout') {
			doLogout();
		}
		if($_GET['pageid'] == 'delacc') {
			showAreYouSure();
		}
		if($_GET['pageid'] == 'loggigin') {
			if(isset($_POST)) {
				$res = doLoginProcess();
			}
		}
		if($_GET['pageid'] == 'registering') {
			if(isset($_POST)) {
				doRegistrationProcess();
			}
		}
		if($_GET['pageid'] == 'loggedin') {
			if(isset($_SESSION['loggedin'])) {
				showLoggedin();
			}
		}
		if($_GET['pageid'] == 'dodelacc') {
			if(isset($_SESSION['loggedin'])) {
				if(isset($_POST)) {
					doDelAccount();
				}
			}
		}
		if($_GET['pageid'] == 'showreg') {
			if(isset($_SESSION['loggedin'])) {
				showRegistration();
			}
		}
		if($_GET['pageid'] == 'updateregister') {
			if(isset($_SESSION['loggedin'])) {
				if(isset($_POST)) {
					doUpdateRegistrationProcess();
				}
			}
		}
		
	}
	if(isset($_SESSION['loggedin'])) {
	    showLoggedin();
	} else {
	    showWelcome();
	}
    showFooter();
?>
