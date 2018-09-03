<?php 

session_start();

?>

<form action="controller/pdoLogin.php" method="post">
<fieldset>
<legend> Admin Login</legend>
<label>Username:</label>
<input type="text" name="username" required>
<label>Password:</label>
<input type="text" name="password" required>
<input type="submit" value=" Submit ">
</fieldset>
</form>

<h1><a href="view/pages/registration.php">Register</a></h1>