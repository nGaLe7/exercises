<?php
session_start();
?>

<?php
//$_SESSION['login'] = true;
//header('location:success.php');

if(isset($_SESSION['login'])) {

    $conn = new PDO("mysql:host=localhost;dbname=sunnies", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM users WHERE (username = '{$_POST['username']}' OR email = '{$_POST['email']}') AND password = '{$_POST['password']}'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    die();
}

?>