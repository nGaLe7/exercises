<?php
function showWelcome() {
?>
<h1>Welcome!</h1>
<?php
}
function showLogin() {
?>
<form action="index.php?pageid=loggigin" method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit">
</form>
<?php
}
function showLoggedin() {
?>
<h1>Yipee Loggedin!</h1>
<?php
}
function showAreYouSure() {
?>
<form action="index.php?pageid=dodelacc" method="post">
    <input type="submit" name="delacc" value="are you sure">
</form>
<?php
}
function showRegister() {
?>
<!--<form action="index.php?pageid=registering" method="post">
    <input type="text" placeholder="user name" name="username">
    <input type="email" placeholder="email Address" name="email">
    <input type="password" placeholder="password" name="password">
    <input type="password" placeholder="password again" name="password2">
    <input type="submit"
</form>-->
<form class="regForm" action="index.php?pageid=registering"  method="post">
				<h2>Register New user</h2>
				
				<input type="text" name=username placeholder="user name">
				
				<input type="text" name=password placeholder="password">
				
				<input type="text" name=FullName placeholder="Fullname">
				
				<input type="date" name=DateOfBirth>	
				
				<input type="text" name="mobileNumber" placeholder="Mobile Number">
				
				<input type="text" name="email" placeholder="Email">
				
				<input type="text" name="address" placeholder="Address">
				
				<input type="text" name="accessRights" placeholder="Access Rights">
				<!--<input type="hidden" name="action type" value="add"/>-->
				<input type="submit">
		</form>
<?php
}
function showRegistration() {
    $result = getRegistrationDetails();
?>

<form action="index.php?pageid=updateregister" method="post">
    <input type="text" placeholder="user name" name="username" value="<?php echo $result['username']; ?>">
    <input type="email" placeholder="email Address" name="email" value="<?php echo $result['email']; ?>">
    <input type="password" placeholder="password" name="password" value="<?php echo $result['password']; ?>">
    <input type="submit">
</form>
<?php
}
?>




