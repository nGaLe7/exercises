<?php 
//print_r($_POST);
//die();

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

    $act->execute();
    if($result == 1) {
        echo $conn->lastInsertId();
        echo $_SESSION[" user data inserted"];
    }
    else {
        echo "entry failed";
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