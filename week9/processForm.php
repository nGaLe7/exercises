<?php 
//print_r($_POST);
//die();
session_start();

//$_SESSION['successful'] = "insert complete";
//$_SESSION['failed'] = "insert failed";

// https://stackoverflow.com/questions/10097887/using-sessions-session-variables-in-a-php-login-script

$_SESSION['successful'] = "input successful";
$_SESSION['failed'] = "input failure";

if(isset($_POST['submit'])) {
    $conn = new PDO("mysql:host=localhost;dbname=3dprint", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (FullName, DateOfBirth, Email, MobileNumber, Address) 
    VALUES ('{$_POST['valFullName']}', '{$_POST['valDateOfBirth']}', '{$_POST['valEmail']}', '{$_POST['valMobileNumber']}', '{$_POST['valAddress']}')";  

    $act = $conn->prepare($sql);
    $act->bindParam('FullName', $_POST['valFullName']);
    $act->bindParam('DateOfBirth', $_POST['valDateOfBirth']);
    $act->bindParam('Email', $_POST['valEmail']);
    $act->bindParam('MobileNumber', $_POST['valMobileNumber']);
    $act->bindParam('Address', $_POST['valAddress']);
    $act->bindParam('submit', $_POST['submit']);
    // ^ security against sql injection

    $result = $act->execute();
    //$result = $conn->query($sql);

    if($result == 1) {
        set_time_limit(60); 
        header('location:index.php');
        echo ($conn->lastInsertId());
        echo($_SESSION['successful']);
        unset($_SESSION['failed']);
    }
    else {
        set_time_limit(60);
        header('location:index.php');   
        echo($_SESSION['failed']);
        unset($_SESSION['successful']);
    }

}



$name = $datebirth = $email = $mobile = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["valFullName"]);
  $datebirth = test_input($_POST["valDateOfBirth"]);
  $email = test_input($_POST["valEmail"]);
  $mobile = test_input($_POST["valMobileNumber"]);
  $address = test_input($_POST["valAddress"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// see below for possible validation fixs
/*
if (!empty([$_POST]))
{
 $username = !empty($_POST['username'])? testUserInput(($_POST['username'])): null;
 $password = !empty($_POST['password'])? testUserInput(($_POST['password'])): null;
try
{
$stmt = $conn->prepare("SELECT password FROM users WHERE username=:user");
$stmt->bindParam(':user', $username);
$stmt->execute();
$rows = $stmt -> fetch();

*/
/*
if (isset($_POST['select'])) {
    
    $prefetchsql  = "SELECT * FROM users WHERE MobileNumber = 0419189606";
    $act = $conn->prepare($prefetchsql);
    $act->execute();
    $result = $act->fetchAll();
echo $prefetchsql;

}
die();*/

?>