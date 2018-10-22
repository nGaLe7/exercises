<?php
function dbConnect() {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=wdv2", 'root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}

function doLoginProcess() {
    $conn = dbConnect();
    $sql = "
SELECT * FROM users 
    WHERE username = :username AND
	password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':password', $_POST['password']);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if(is_array($result) && sizeof($result) > 0) {
	$_SESSION['message'] = 'Login Successful';
	$_SESSION['loggedin'] = $result['id'];
	header('Location: index.php'); // set client cookie!
    } else {
	$_SESSION['error'] = 'boo hoo login failed';
	unset($_SESSION['loggedin']); 
	header('Location: index.php?pageid=login'); // set client cookie!
    }
}
function doRegistrationProcess() {
    $conn = dbConnect();
    $sql = "
INSERT INTO users 
    (username, password, email) 
	VALUES (:username, :password, :email);";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':password', $_POST['password']);
    $stmt->bindParam(':email', $_POST['email']);
    $res = $stmt->execute();
    if($res == true) {
	$_SESSION['message'] = 'Registration Successful';
    } else {
	$_SESSION['error'] = 'boo hoo registration failed';
    }
}
function getRegistrationDetails() {
    $conn = dbConnect();
    $sql = "
SELECT * FROM users 
    WHERE id = :uid";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':uid', $_SESSION['loggedin']);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if(is_array($result) && sizeof($result) > 0) {
	    return $result;
    } else {
	    return $false;
    }
}
function doUpdateRegistrationProcess() {
    $conn = dbConnect();
    $sql = "
UPDATE users 
    SET username = :username, password = :password, 
	email = :email WHERE users.id = :uid;";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':password', $_POST['password']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':uid', $_SESSION['loggedin']);
    $res = $stmt->execute();
    if($res == true) {
	$_SESSION['message'] = 'Registration Successful';
    } else {
	$_SESSION['error'] = 'boo hoo registration failed';
    }
}
function doDelAccount() {
    $conn = dbConnect();
    $sql = "
DELETE FROM users 
    WHERE users.id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_SESSION['loggedin']);
    $res = $stmt->execute();
    if($res == true) {
	session_destroy();
	header('location: index.php');
    } else {
	$_SESSION['error'] = 'boo hoo del account failed';
	header('location: index.php');
    }
}
?>
