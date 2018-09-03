<?php

require("../model/db.php");
require("../model/myFunctions.php");
require("../model/testUserInput.php");
if (!empty([$_POST])) {
//input sanitation via test_user_input function
$username = !empty($_POST['username'])? testUserInput(($_POST['username'])): null;
$mypass = !empty($_POST['password'])? testUserInput(($_POST['password'])): null;
$name = !empty($_POST['name']) ? testUserInput(($_POST['name'])): null;
$surname = !empty($_POST['surname'])? testUserInput(($_POST['surname'])): null;
$role = !empty($_POST['role']) ? testUserInput(($_POST['role'])): null;
$password= password_hash($mypass, PASSWORD_DEFAULT);

}
try {
 
if($_REQUEST['action_type'] == 'add'){
  	$querySuccess = addUser($username, $password, $name, $surname, $role);
          if ($querySuccess){
	  	header('location:../index.php');
         }
          else {
           echo "some message or action";
          }
	  	exit;
    }
  }
  catch(PDOException $e)
  {
  echo "Account creation problems".$e -> getMessage();
  die();
  }
?>