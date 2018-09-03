<?php // view stuff goes here
session_start();

function home() {
    echo 'Home
<p>Some different html</p>
';
}

function productList() {
    echo 'Product List';

?>
<p>some more html</p>
<?php
}
function registerForm() {
?>
    <form action="index.php?pageid=registering" method="POST">
    <label>Email</label>
    <input type="text" name="email" id="email" onkeyup="doEmailCheck(this.value)">
    <input type="submit" name="register" value="register">
    </form>
<?php
}

function loginForm() {
    ?>
    <form action="index.php?pageid=loggingin" method="POST">
    <input type="submit" name="login" value="login">
    </form>
<?php
}
?>
<?php
function showMessage() {
    echo '<div id="errmsg">error</div>';
if(isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
    }
}

if(isset($_GET['email'])) {
 $conn = new PDO("mysql:host=localhost;dbname=sunnies", 'root', '');
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $query = "SELECT * FROM users WHERE email = :email";
 $stmt = $conn->prepare($query);
 $stmt->bindParam(':email', $_GET['email']);
 $stmt->execute();
 $result = $stmt->fetch();    
 if(is_array($result)) {
     echo 'user exists';
    } else {
     echo 'user does not exist';
    }
}
?>