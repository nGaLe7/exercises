<?php

function addUser($username, $password, $name, $surname, $role){
    global $conn;
    $sql = "INSERT INTO users(username, password, name, surname, role) VALUES (:username, :password, :name, :surname, :role)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':surname', $surname);
    $stmt->bindValue(':role', $role);
    $result = $stmt->execute();
    return $result;
}

?>