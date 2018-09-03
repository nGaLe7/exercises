<?php

$dbusername = "root";
$dbpassword = "";

try {

$conn = new PDO("mysql:host=localhost;dbname=formative47", $dbusername,$dbpassword);
// set attributes
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}

catch(PDOExceptions $e)
{
    $error_message = $e->getMessage();
    ?>
    <h1>Datebase connection error</h1>
    <p>There was an error connecting to the database</p>
    <p>Error message: <?php echo $error_message; ?></p>
    <?php
    exit();
}
?>