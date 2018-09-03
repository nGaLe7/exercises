<?php
session_start();
?>

<?php

$_SESSION['login'] = false;
header('location:login.php');

?>