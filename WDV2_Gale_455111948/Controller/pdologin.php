<?php

require("../model/db.php");
require("../model/myFunctions.php");
require("../model/testUserInput.php");

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

if (password_verify($password, $rows['password'])){
    // assign session variables
      $_SESSION["adminUser"] = $username;
      $_SESSION["login"] = true;
      header('location:../View/pages/adminBookCentral.php');
  }  
  else {
        header('location:../index.php');
        
  }
}
catch(PDOException $e)
{
echo "Account creation problems".$e -> getMessage();
die();
}
}

  
?>