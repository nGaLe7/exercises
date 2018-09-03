<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Week4 Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<p><h1>Login </h1></p>


<form action="loginprocessing.php" name"login" method="post">
<label>username</label>
<input type="text" name="username">
<label>email</label>
<input type="text" name="email">
<label>password</label>
<input type="text" name="password">
<input type="submit" name="submit">

</form>

<?php
'srv/sunnies.php';
//https://www.formget.com/login-form-in-php/

// answer

/*if($_SESSION['login'] == true) {
    header('location:success.php');
}*/

//header('location:login.php');

//if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    //$myusername = mysqli_real_escape_string($db,$_POST['username']);
    //$mypassword = mysqli_real_escape_string($db,$_POST['password']); 
    // $myemail = mysqli_real_escape_string($db,$_POST['email']);
   
    
    //$sql = "SELECT FROM user WHERE username = '$myusername' and password = '$mypassword' and email = '$myemail'";
    if(isset($_SESSION['login'])) {

    $conn = new PDO("mysql:host=localhost;dbname=sunnies", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM users WHERE (username = '{$_POST['username']}' OR email = '{$_POST['email']}') AND password = '{$_POST['password']}'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    /*
    $row = mysql_fetch_array($result,MYSQL_ASSOC);
    $active = $row['active'];
    $count = mysql_num_rows($result);
    $result = $stmt->fetchAll();*/

    /*$sel_query = "SELECT * FROM users";
    $stmt = $conn->prepare($sel_query);
    $stmt->execute();
    $result = $stmt->fetchAll();*/
    die();
}

selectAll();

function selectAll() {
    $conn  = new PDO("mysql:host=localhost;dbname=sunnies", 'root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sel_query = "SELECT * FROM users";
    $stmt = $conn->prepare($sel_query);
    $stmt->execute();
    $result = $stmt->fetchAll();

}

die();

    /*if(isset($_POST['submit'])) {
    $conn = new PDO("mysql:host=localhost;dbname=sunnies", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = "SELECT (username, email, password) FROM users
            IF VALUES ('{$_POST['username']}', '{$_POST['email']}', '{$_POST['password']}')  ";
    
     // prepare the query
    $stmt = $conn->prepare($query);
    $result = $stmt->execute();
 
    // sanitize
    //$this->email=htmlspecialchars(strip_tags($this->email));
 
    // bind given email value
    //$stmt->bindParam(1, $this->email);
 
    // execute the query
 
    // get number of rows
    //$num = $stmt->rowCount();
 
    // if email exists, assign values to object properties for easy access and use for php sessions
    if($num>0){
 
        // get record details / values
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
        // assign values to object properties
        
       // $this->username = $row['username'];
       // $this->email = $row['email'];
        //$this->password = $row['password'];
        
 
        // return true because email exists in the database
        return true;
    }
 
    // return false if email does not exist in the database
    return false;
}*/

/*if(isset($_POST['submit'])) {
    $conn = new PDO("mysql:host=localhost;dbname=sunnies", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT username, email, password 
              FROM users";     

$stmt = $conn->prepare($query);
//execute query

$result = $stmt->execute();
    // get number of rows   
    // return false if email does not exist in the database
    return false;
}*/
/*
    //SQL
    $query = "INSERT INTO users (username, email, password) VALUES ('{$_POST['username']}', '{$_POST['email']}', '{$_POST['password']}')";
    // invalid query
    //$del_query = "DELETE FROM users WHERE username = '{$_POST['username']}";  
    //$sel_query = "SELECT * FROM users";

    //load query
    $stmt = $conn->prepare($query);
    //execute query
    $result = $stmt->execute();
*/
?>

</body>
</html>