<?php

$conn = new PDO("mysql:host=localhost;dbname=formative47", 'root', '');
// set attributes
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}


?>