<?php

// render output
$sel_query = "SELECT FullName, Address, DateOfBirth, email, MobileNumber FROM users";

$conn = new PDO("mysql:host=localhost;dbname=3dprint", 'root','');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare($sel_query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);
foreach ($result as $row) {
    echo $row['FullName'];
    echo $row['Address'];
    echo $row['DateOfBirth'];
    echo $row['email'];
    echo $row['MobileNumber'];
}

?>

<a href="index.php">Main Page</a>