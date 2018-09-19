<?php
  // working transaction
function registerUser($username, $password, $accessRole, $email, $name, $surname)
    {
        global $conn;
    try  {
    $conn->beginTransaction();
    $stmt = $conn->prepare("INSERT INTO login(username, password) VALUES (:username, :password)");
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    $stmt->execute();

    $loginID = $conn->lastInsertId();
    $stmt = $conn->prepare("INSERT INTO users(email, firstName, lastName, accessRights, loginID) VALUES (:email, :name, :surname, :accessRights, :loginID)");
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':surname', $surname);   
    $stmt->bindValue(':accessRights', $accessRole);
    $stmt->bindValue(':loginID', $loginID);
    $stmt->execute();
    $conn->commit();
    }

    catch(PDOException $ex) {
        //code to roll back 
        $conn->rollBack();
        throw $ex;
    }

}


/*
function addUser($username, $password, $accessRole, $email, $name, $surname) {
    global $conn;
    $sql = "INSERT INTO login(username, password) VALUES (:username, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    $result = $stmt->execute();

    $sql = "INSERT INTO users(email, firstName, lastName, accessRights, loginID) VALUES (:email, :name, :surname, :accessRights, :loginID)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':surname', $surname);   
    $stmt->bindValue(':accessRights', $accessRole);
    $stmt->bindValue(':loginID', $loginID);
    $result = $stmt->execute();


    return $result;
}*/
/*
  //proper transaction example

    function newAdminUser($username, $password, $role, $firstname, $lastname, $email)
    {
    $conn->beginTransaction();
    $stmt = $conn->prepare("INSERT INTO login(username, password, accessRights) VALUES (:username, :password, :role)");
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    $stmt->bindValue(':role', $role);
    $stmt->execute();
    // last inserted = loginID

    $lastLoginID = $conn->lastInsertId();
    $stmt = $conn->prepare("INSERT INTO users(firstname, lastname, email, loginID) VALUES (:firstname, :lastname, :email, :loginID)");
    $stmt->bindValue(':firstname', $firstname);
    $stmt->bindValue(':lastname', $lastname);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':loginID', $lastLoginID);
    $stmt->execute();
    $conn->commit();
    }
    catch (PDOException $ex) {
        // code to roll back 
        $conn->rollBack();
        throw $ex;
    }
}


}*/



?>