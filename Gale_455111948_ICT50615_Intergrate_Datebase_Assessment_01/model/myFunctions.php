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

    
    $stmt = $conn->prepare("INSERT INTO users(email, firstName, lastName, accessRights) VALUES (:email, :name, :surname, :accessRights)");
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':surname', $surname);   
    $stmt->bindValue(':accessRights', $accessRole);
    // insert id FOREIGN key? how
    $conn->lastInsertId();
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
public function add($data)
{

    $temp = array(
        'Email' => $data['Email'],
        'loginID'=> 1
    );    
    return $this->db->insert('login',$temp);
    return $this->db->insert_id();
    $data['loginID'] = $this->db->insert_id(); // Use insert_id()
    return $this->db->insert('users',$data);
}
*/

// http://domexception.blogspot.com/2013/08/php-get-list-of-possible-foreign-key.html

//  https://stackoverflow.com/questions/27619534/how-to-store-last-insert-id-in-database-as-foreign-key-in-another-table
// https://stackoverflow.com/questions/46069461/last-insert-id-is-changed-while-using-foreign-key

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