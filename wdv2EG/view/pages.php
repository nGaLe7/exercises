<!doctype html>
<html>
<head>
<title>example login/logout</title>
<link href="view/css/styles.css" rel="stylesheet">
<link href="view/css/normalize.css" rel="stylesheet">

</head>
<body>

<header class="banner">
<?php
    function showWelcome() {
    ?>
    <h1>Welcome!</h1>
</header>

<div class="gridContain">
    <div class="gridBox">
    
    <div class="loginForm">
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
<form action="index.php?pageid=registering" method="post">
    <input type="text" placeholder="user name" name="username">
    <input type="email" placeholder="email Address" name="email">
    <input type="password" placeholder="password" name="password">
    <input type="password" placeholder="password again" name="password2">
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


        </div>
    </div>
</div>



</body>
</html>


