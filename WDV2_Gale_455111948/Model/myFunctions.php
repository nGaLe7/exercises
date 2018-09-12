<?php

function addUser($username, $password, $name, $surname, $email, $accessRights){
    global $conn;
    $sql = "INSERT INTO users(username, password, name, surname, email, accessRights) VALUES (:username, :password, :name, :surname, :email, :accessRights)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':surname', $surname);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':accessRights', $accessRights);
    $result = $stmt->execute();
    return $result;
}

?>