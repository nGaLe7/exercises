<?php
session_start();
?>

<?php

if($_SESSION['login'] != true) {
    header('location:login.php');
}

?>