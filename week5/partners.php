<?php

$sel_query = "SELECT PartnerContact, PartnerLeaderName, PartnerName From partners";

$conn = new PDO("mysql:host=localhost;dbname=3dprint", 'root','');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare($sel_query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);
foreach ($result as $row) {
    echo $row['PartnerContact'];
    echo $row['PartnerLeaderName'];
    echo $row['PartnerName'];
    
}

?>

<a href="index.php">Main Page</a>