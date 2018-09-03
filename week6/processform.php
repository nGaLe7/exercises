<?php 
//print_r($_POST);
//die();

if(isset($_POST['submit'])) {
    $conn = new PDO("mysql:host=localhost;dbname=3dprint", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (FullName, DateOfBirth, Email, MobileNumber, Address) 
    VALUES ('{$_POST['FullName']}', '{$_POST['DateOfBirth']}', '{$_POST['Email']}', '{$_POST['MobileNumber']}', '{$_POST['Address']}')";  

    $act = $conn->prepare($sql);
    $act->bindParam('FullName', $_POST['FullName']);
    $act->bindParam('DateOfBirth', $_POST['DateOfBirth']);
    $act->bindParam('Email', $_POST['Email']);
    $act->bindParam('MobileNumber', $_POST['MobileNumber']);
    $act->bindParam('Address', $_POST['Address']);
    $act->bindParam('submit', $_POST['submit']);
    // ^ security against sql injection

    $act->execute();
    echo $conn->lastInsertId();

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