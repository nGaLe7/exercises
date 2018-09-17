<?php

function addUser($username, $password) {
 global $conn;
 $sql = "INSERT INTO login (username, password) VALUES (:username, :password)";
    // needs to insert into 2 tables, try transaction 

 /*$sql = "start TRANSACTION;
        INSERT INTO users (FullName, DateOfBirth, MobileNumber, email, address, accessRights)
        VALUES (:FullName, :DateOfBirth, :mobileNumber, :email, :address, :accessRights);
        INSERT INTO login (username, password) 
        VALUES (:username, :password);
        COMMIT";*/
    
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    
    $result = $stmt->execute();
    return $result;
}

function addDetails($fullName, $DateOfBirth, $mobileNumber, $email, $address, $accessRights) {
    global $conn;
 $detail_sql = "INSERT INTO users (FullName, DateOfBirth, MobileNumber, email, address, accessRights) VALUES (:FullName, :DateOfBirth, :mobileNumber, :email, :address, :accessRights)";

    $stmt = $conn->prepare($detail_sql);
    $stmt->bindValue(':FullName', $fullName);
    $stmt->bindValue(':DateOfBirth', $DateOfBirth);
    $stmt->bindValue(':mobileNumber', $mobileNumber);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':address', $address);
    $stmt->bindValue(':accessRights', $accessRights);
    $result = $stmt->execute();
    return $result;
}


// details add and user/pass add functions needed as seperate? possible through same submit button?


/*  Example transaction  - -http://www.mysqltutorial.org/mysql-transaction.aspx 

start TRANSACTION;
insert into login (email, firstName, password, surname, username)
values ('gg@gmail.com', 'alf', 'pass', 'Ell', 'AlphdoGe');
insert into `admin user` (accessType, loginID)
VALUES ('full access', '44');
COMMIT;

add in a function to rollback with last_insert_ID for both tables at once if this method is used. 

example without transaction

// example for this DB

INSERT INTO users (FullName, DateOfBirth, MobileNumber, email, address, accessRights) VALUES ('name', '07/07/2007', '0400116226', 'email', 'address', 'accessRights');
INSERT INTO login (username, password) VALUES ('username', 'password');

// example for sunnies DB

insert into login (email, firstName, password, surname, username)
values ('testEmail', 'test', 'passwurD', 'P', 'ZetaDood');
insert into `admin user` (accessType, loginID)
VALUES ('no access', '99');

*/


?>