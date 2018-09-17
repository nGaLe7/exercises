<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>3D Print Aus Register User</title>
<link href="../css/styles.css" rel="stylesheet">
<link href="../css/normalize.css" rel="stylesheet">
</head>
<!-- change all the CSS class names, reposition all content -->
<body>

 

<header class="banner"><h1>Print Aus Banner</h1></header>   

<div class="gridContain">
    <div class="gridBox"><h2>Login</h2></div>
<div class="gridBox">
  <nav class="navLinks">
  	  <div><a href="../../index.php">Login</a></div>
      <div><a href="homepage.php">Homepage</a></div>
      <div><a href="projectNews.php">Project News</a></div>
      <div><a href="archive.php">Archive</a></div>
      <div><a href="privacy.php">Privacy Policy</a></div>
      <div><a href="#">Admin Create User</a></div>
      <div><a href="contact.php">Contact</a></div>
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
    <!--<div class="gridContain2">-->
    	<div class="gridBox2">	
			<form class="regForm" action="../../controller/reg.php"  method="post">
				<h2>Register New user</h2>
				<label>Username:</label>
				<input type="text" name=username required>
				<label>Password:</label>
				<input type="text" name=password required>
				<label>Full Name:</label>
				<input type="text" name=FullName required>
				<label>Date of Birth:</label>
				<input type="date" name=DateOfBirth required>	
				<label>Mobile Number:</label>
				<input type="text" name="mobileNumber" required>
				<label>Email:</label>
				<input type="text" name="email" required>
				<label>Address:</label>
				<input type="text" name="address" required>
				<label>Access Rights:</label>
				<input type="text" name="accessRights" required>
				<input type="hidden" name="action type" value="add"/>
				<input type="submit">
		</form>
	<!--</div>-->          
</div>

 
</div>
</div>


<footer class="footer"><h2>Copyright PrintAus 2018</h2> </footer>
  
</div>
</body>
</html>

