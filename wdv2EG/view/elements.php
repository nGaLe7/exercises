<!doctype html>
<html>
<head>
<title>example login/logout</title>
<link href="view/css/styles.css" rel="stylesheet">
<link href="view/css/normalize.css" rel="stylesheet">

</head>
<body>

<?php
function showHeader() {
    echo "<div>HEADER</div>"; 
    echo "<div>"; 
    if(isset($_SESSION['error'])) {
	echo "<div>{$_SESSION['error']}</div>";
	unset($_SESSION['error']);
    }
    if(isset($_SESSION['message'])) {
	echo "<div>{$_SESSION['message']}</div>";
	unset($_SESSION['message']);
    }
    echo "</div>"; 
}
?>
<div class="gridBox">
    
    <div class="loginForm">
<?php
function showMenu() {
    if(isset($_SESSION['loggedin'])) {
	echo '<div>
<a href="index.php?pageid=delacc">Delete</a>
<a href="index.php?pageid=showreg">Update</a>
<a href="index.php?pageid=logout">logout</a>
</div>';
    } else {
	echo '<div>
<a href="index.php?pageid=login">login</a>
<a href="index.php?pageid=register">register</a>
</div>';
    }
}
?>

</div>
</div>

<?php
function showFooter() {
    echo "<footer>";
    echo "<div>";
    print_r($_SESSION);
    echo "</div><div>";
    print_r($_GET);
    echo "</div><div>";
    print_r($_POST);
    echo "</div>";
    echo "</footer>";
}
?>
</body>
</html>