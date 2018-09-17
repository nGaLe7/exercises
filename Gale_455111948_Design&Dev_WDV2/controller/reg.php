<?php

require("../model/db.php");
require("../model/myFunctions.php");
require("../model/testUserInput.php");
if (!empty([$_POST])) {
//input sanitation via test_user_input function
$username = !empty($_POST['username'])? testUserInput(($_POST['username'])): null;
$mypass = !empty($_POST['password'])? testUserInput(($_POST['password'])): null;

$accessRights = !empty($_POST['accessRights'])? testUserInput(($_POST['accessRights'])): null;
$password= password_hash($mypass, PASSWORD_DEFAULT);

}
try {
 
if($_REQUEST['action_type'] == 'add'){
    $queryUserAddSuccess = addUser($username, $password);
      if ($queryUserAddSuccess){
	  	header('location:../index.php');
         }
          else {
           echo "failed to add details";
          }
       }
  }
  catch(PDOException $e)
  {
  echo "Account creation problems".$e -> getMessage();
  
  }

if (!empty([$_POST])) {
  $fullName = !empty($_POST['FullName']) ? testUserInput(($_POST['FullName'])): null;
  $DateOfBirth = !empty($_POST['DateOfBirth'])? testUserInput(($_POST['DateOfBirth'])): null;
  $mobileNumber = !empty($_POST['mobileNumber'])? testUserInput(($_POST['mobileNumber'])): null;
  $email = !empty($_POST['email'])? testUserInput(($_POST['email'])): null;
  $address = !empty($_POST['address'])? testUserInput(($_POST['address'])): null;

  }

try {
 
  if($_REQUEST['action_type'] == 'add'){
    $queryDetailsAddSucesss = addDetails($fullName, $DateOfBirth, $mobileNumber, $email, $address, $accessRights);
      if ($queryDetailsAddSucesss){
         header('location:../index.php');
         }
         else {
         echo "failed to add details";
         }
        exit;
      }
    }
  catch(PDOException $e)
    {
  echo "Account creation problems".$e -> getMessage();
    //die();
}

?>